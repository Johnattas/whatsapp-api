<?php

namespace Johnattas\WhatsappApi\WebHook;
use Johnattas\WhatsappApi\WebHook\Notification\MessageNotificationFactory;
use Johnattas\WhatsappApi\WebHook\Notification\StatusNotificationFactory;

final class NotificationFactory
{
    /**
     * @return Notification[]
     */
    public static function buildAllFromPayload($payload)
    {

        if (!is_array($payload['entry'] ?? null)) {
            return [];
        }

        $notifications = [];

        foreach ($payload['entry'] as $entry) {



            if (!is_array($entry['changes'])) {
                continue;
            }

            foreach ($entry['changes'] as $change) {
                $message = $change['value']['messages'][0] ?? [];
                $status = $change['value']['statuses'][0] ?? [];
                $contact = $change['value']['contacts'][0] ?? [];
                $metadata = $change['value']['metadata'] ?? [];

                if ($message) {

                    $temp = MessageNotificationFactory::buildFromPayload($metadata, $message, $contact);
                    $temp->moment = 'receive';
                    $temp->type = $message['type'];
                    $notifications[] = $temp;
                }

                if ($status) {
                    $status = new Notification\StatusNotificationFactory();

                    $temp = StatusNotificationFactory::buildStatusFromPayload($metadata, $status);
                    $temp->moment = 'status';
                    $notifications[] = $temp;

                }
            }
        }

        return $notifications;
    }
}

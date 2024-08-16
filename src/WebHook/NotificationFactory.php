<?php

namespace Johnattas\WhatsappApi\WebHook;

final class NotificationFactory
{
    public Notification\MessageNotificationFactory $message_notification_factory;
    public Notification\StatusNotificationFactory $status_notification_factory;


    public function __construct()
    {
        $this->message_notification_factory = new Notification\MessageNotificationFactory();
        $this->status_notification_factory = new Notification\StatusNotificationFactory();
    }

    /**
     * @return Notification[]
     */
    public function buildAllFromPayload(array $payload)
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
                    $temp = $this->message_notification_factory->buildFromPayload($metadata, $message, $contact);
                    $temp->moment = 'receive';
                    $temp->type = $message['type'];
                    $notifications[] = $temp;
                }

                if ($status) {
                    $temp = $this->status_notification_factory->buildFromPayload($metadata, $status);
                    $temp->moment = 'status';
                    $notifications[] = $temp;

                }
            }
        }

        return $notifications;
    }
}

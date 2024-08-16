<?php

namespace Johnattas\WhatsappApi;

use Johnattas\WhatsappApi\WebHook\Notification;
use Johnattas\WhatsappApi\WebHook\NotificationFactory;
use Johnattas\WhatsappApi\WebHook\VerificationRequest;

class WhatsappWebHook
{
    /**
     * Verify a webhook anytime you configure a new one in your App Dashboard.
     *
     * @param  array  $payload Query string parameters received in your endpoint URL.
     * @return string          Challenge sent by Meta (Facebook)
     */
    public function verify(array $payload, string $verify_token): string
    {
        return (new VerificationRequest($verify_token))
            ->validate($payload);
    }

    /**
     * Get a notification from incoming webhook messages.
     *
     * @param  array  $payload Payload received in your endpoint URL.
     * @return Notification    A PHP representation of WhatsApp webhook notifications
     */
    public function read(array $payload): ?Notification
    {
        return (new NotificationFactory())
            ->buildFromPayload($payload);
    }

    /**
     * Get all notifications from incoming webhook messages.
     *
     * @param  array  $payload Payload received in your endpoint URL.
     * @return Notification[]    A PHP representation of WhatsApp webhook notifications
     */
    public function readAll(array $payload): array
    {
        return (new NotificationFactory())
            ->buildAllFromPayload($payload);
    }
}

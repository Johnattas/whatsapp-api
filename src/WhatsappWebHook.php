<?php

namespace Johnattas\WhatsappApi;

use Johnattas\WhatsappApi\WebHook\Notification;
use Johnattas\WhatsappApi\WebHook\NotificationFactory;
use Johnattas\WhatsappApi\WebHook\VerificationRequest;

class WhatsappWebHook
{

    public static function process($payload)
    {
        return self::read($payload);
    }

    public static function verify(array $payload, string $verify_token)
    {
        return (new VerificationRequest($verify_token))
            ->validate($payload);
    }


    public static function read(array $payload)
    {
        return NotificationFactory::buildAllFromPayload($payload);
    }
}

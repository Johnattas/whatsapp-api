<?php

namespace Johnattas\WhatsappApi;

use Johnattas\WhatsappApi\WebHook\Notification;
use Johnattas\WhatsappApi\WebHook\NotificationFactory;
use Johnattas\WhatsappApi\WebHook\VerificationRequest;

class WhatsappWebHook
{

    public function verify(array $payload, string $verify_token)
    {
        return (new VerificationRequest($verify_token))
            ->validate($payload);
    }


    public function read(array $payload)
    {
        return (new NotificationFactory())
            ->buildAllFromPayload($payload);
    }

}

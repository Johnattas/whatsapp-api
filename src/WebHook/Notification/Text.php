<?php

namespace Johnattas\WhatsappApi\WebHook\Notification;

final class Text extends MessageNotification
{
    public string $message;

    public function __construct(string $id, Support\Business $business, string $message, string $received_at_timestamp)
    {
        parent::__construct($id, $business, $received_at_timestamp);

        $this->message = $message;
    }

    public function message(): string
    {
        return $this->message;
    }
}

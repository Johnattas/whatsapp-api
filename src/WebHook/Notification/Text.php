<?php

namespace Johnattas\WhatsappApi\WebHook\Notification;

final class Text extends MessageNotification
{
    public array $content;

    public function __construct(string $id, Support\MetaAccount $meta_account, string $message, string $received_at_timestamp)
    {
        parent::__construct($id, $meta_account, $received_at_timestamp);

        $this->content = [
            'id' => $id,
            'message' => $message,
        ];
    }

    public function message(): string
    {
        return $this->content;
    }
}

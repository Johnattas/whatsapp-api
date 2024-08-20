<?php

namespace Johnattas\WhatsappApi\WebHook\Notification;

final class Button extends MessageNotification
{
    public string $text;

    public string $payload;

    public array $content;

    public function __construct(
        string $id,
        Support\MetaAccount $meta_account,
        string $text,
        string $payload,
        string $received_at_timestamp
    ) {
        parent::__construct($id, $meta_account, $received_at_timestamp);

        $this->content = [
            'id' => $id,
            'text' => $text,
            'payload' => $payload,
        ];

        $this->text = $text;
        $this->payload = $payload;
    }

    public function text(): string
    {
        return $this->text;
    }

    public function payload(): string
    {
        return $this->payload;
    }
}

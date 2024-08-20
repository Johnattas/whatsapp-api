<?php

namespace Johnattas\WhatsappApi\WebHook\Notification;

final class Reaction extends MessageNotification
{
    public string $message_id;

    public string $emoji;

    public function __construct(
        string $id,
        Support\MetaAccount $meta_account,
        string $message_id,
        array $content,
        string $received_at_timestamp
    ) {
        parent::__construct($id, $meta_account, $received_at_timestamp);

        $this->message_id = $message_id;
        $this->content =[
            'emoji' => $emoji,
            'id' => $message_id,
        ];
    }

    public function messageId(): string
    {
        return $this->message_id;
    }

    public function emoji(): string
    {
        return $this->content;
    }
}

<?php

namespace Johnattas\WhatsappApi\WebHook\Notification;

final class Interactive extends MessageNotification
{
    public string $item_id;

    public string $title;

    public string $description;

    public array $content;

    public function __construct(
        string $id,
        Support\MetaAccount $meta_account,
        string $item_id,
        string $title,
        string $description,
        string $received_at_timestamp
    ) {
        parent::__construct($id, $meta_account, $received_at_timestamp);

        $this->content = [
            'id' => $id,
            'item_id' => $item_id,
            'title' => $title,
            'description' => $description,
        ];

        $this->item_id = $item_id;
        $this->title = $title;
        $this->description = $description;
    }

    public function itemId(): string
    {
        return $this->item_id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function description(): string
    {
        return $this->description;
    }
}

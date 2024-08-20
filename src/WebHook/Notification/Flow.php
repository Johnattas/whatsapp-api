<?php

namespace Johnattas\WhatsappApi\WebHook\Notification;

final class Flow extends MessageNotification
{
    public string $name;

    public string $body;

    public string $response;

    public array $content;

    public function __construct(
        string $id,
        Support\MetaAccount $meta_account,
        string $name,
        string $body,
        string $response,
        string $received_at_timestamp
    ) {
        parent::__construct($id, $meta_account, $received_at_timestamp);

        $this->content = [
            'id' => $id,
            'name' => $name,
            'body' => $body,
            'response' => $response,
        ];

        $this->name = $name;
        $this->body = $body;
        $this->response = $response;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function response(): string
    {
        return $this->response;
    }
}

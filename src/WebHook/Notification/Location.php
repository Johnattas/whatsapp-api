<?php

namespace Johnattas\WhatsappApi\WebHook\Notification;

final class Location extends MessageNotification
{
    public string $latitude;

    public string $longitude;

    public string $name;

    public string $address;

    public array $content;

    public function __construct(
        string $id,
        Support\MetaAccount $meta_account,
        string $latitude,
        string $longitude,
        string $name,
        string $address,
        string $received_at_timestamp
    ) {
        parent::__construct($id, $meta_account, $received_at_timestamp);

        $this->content = [
            'id' => $id,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'name' => $name,
            'address' => $address,
        ];

        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->name = $name;
        $this->address = $address;
    }

    public function latitude(): string
    {
        return $this->latitude;
    }

    public function longitude(): string
    {
        return $this->longitude;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function address(): string
    {
        return $this->address;
    }
}

<?php

namespace Johnattas\WhatsappApi\WebHook\Notification;

final class Location extends MessageNotification
{
    public string $latitude;

    public string $longitude;

    public string $name;

    public string $address;

    public function __construct(
        string $id,
        Support\Business $business,
        string $latitude,
        string $longitude,
        string $name,
        string $address,
        string $received_at_timestamp
    ) {
        parent::__construct($id, $business, $received_at_timestamp);

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

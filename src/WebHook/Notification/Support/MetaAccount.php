<?php

namespace Johnattas\WhatsappApi\WebHook\Notification\Support;

final class MetaAccount
{
    public string $phone_number_id;

    public string $phone_number;

    public function __construct(string $phone_number_id, string $phone_number)
    {
        $this->phone_number_id = $phone_number_id;
        $this->phone_number = $phone_number;
    }

    public function phoneNumberId(): string
    {
        return $this->phone_number_id;
    }

    public function phoneNumber(): string
    {
        return $this->phone_number;
    }

    public function getMeta(): array
    {
        return [
            'phone_number_id' => $this->phone_number_id,
            'phone_number' => $this->phone_number,
        ];
    }
}

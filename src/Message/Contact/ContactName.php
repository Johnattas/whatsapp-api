<?php

namespace Johnattas\WhatsappApi\Message\Contact;

final class ContactName
{
    public string $first_name;

    public string $last_name;

    public function __construct(string $first_name, string $last_name = '')
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function fullName(): string
    {
        return "$this->first_name $this->last_name";
    }

    public function firstName(): string
    {
        return $this->first_name;
    }

    public function lastName(): string
    {
        return $this->last_name;
    }
}

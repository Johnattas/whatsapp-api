<?php

namespace Johnattas\WhatsappApi\Message;

use Johnattas\WhatsappApi\Message\Contact\ContactName;
use Johnattas\WhatsappApi\Message\Contact\Phone;
use Johnattas\WhatsappApi\Message\Contact\Phones;

final class ContactMessage extends Message
{
    /**
    * {@inheritdoc}
    */
    public string $type = 'contacts';

    public ContactName $name;

    public Phones $phones;

    /**
    * {@inheritdoc}
    */
    public function __construct(string $to, ContactName $name, ?string $reply_to, Phone ...$phones)
    {
        $this->name = $name;
        $this->phones = new Phones(...$phones);

        parent::__construct($to, $reply_to);
    }

    public function fullName(): string
    {
        return $this->name->fullName();
    }

    public function firstName(): string
    {
        return $this->name->firstName();
    }

    public function lastName(): string
    {
        return $this->name->lastName();
    }

    public function phones(): Phones
    {
        return $this->phones;
    }
}

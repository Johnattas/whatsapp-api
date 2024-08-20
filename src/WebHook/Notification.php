<?php

namespace Johnattas\WhatsappApi\WebHook;

use Johnattas\WhatsappApi\WebHook\Notification\Support;
use Carbon\Carbon;

abstract class Notification
{

    public string $moment, $type;

    public function __construct(public string $id, Support\MetaAccount $meta_account, string $received_at_string)
    {
        $this->id = $id;
        $this->meta_account = $meta_account->getMeta();
        $this->received_at = Carbon::createFromTimestamp((int) $received_at_string)->format('Y-m-d H:i:s');
    }

    public function id(): string
    {
        return $this->id;
    }

    public function businessPhoneNumberId(): string
    {
        return $this->meta_account->phoneNumberId();
    }

    public function businessPhoneNumber(): string
    {
        return $this->meta_account->phoneNumber();
    }

    public function receivedAt(): \DateTimeImmutable
    {
        return $this->received_at;
    }
}

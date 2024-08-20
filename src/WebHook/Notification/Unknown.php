<?php

namespace Johnattas\WhatsappApi\WebHook\Notification;

final class Unknown extends MessageNotification
{
    public function __construct(string $id, Support\MetaAccount $meta_account, string $received_at_timestamp)
    {
        parent::__construct($id, $meta_account, $received_at_timestamp);
    }
}

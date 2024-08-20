<?php

namespace Johnattas\WhatsappApi\WebHook\Notification;

final class System extends MessageNotification
{
    public string $message;
    public array $content;
    public Support\MetaAccount $old_business_data;

    public function __construct(string $id, Support\MetaAccount $meta_account, Support\MetaAccount $old_business_data, string $message, string $received_at_timestamp)
    {
        parent::__construct($id, $meta_account, $received_at_timestamp);

        $this->content = [
            'id' => $id,
            'message' => $message,
            'old_business_data' => $old_business_data,
        ];

        $this->message = $message;
        $this->old_business_data = $old_business_data;
    }

    public function message(): string
    {
        return $this->message;
    }

    public function oldBusinessPhoneNumberId(): string
    {
        return $this->old_business_data->phoneNumberId();
    }
}

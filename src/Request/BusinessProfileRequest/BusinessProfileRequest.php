<?php

namespace Johnattas\WhatsappApi\Request\BusinessProfileRequest;

use Johnattas\WhatsappApi\Request;

final class BusinessProfileRequest extends Request
{
    /**
     * @var string WhatsApp profile fields.
     */
    public string $fields;

    /**
     * @var string WhatsApp Number Id from messages will sent.
     */
    public string $from_phone_number_id;

    public function __construct(string $fields, string $access_token, string $from_phone_number_id, ?int $timeout = null)
    {
        $this->fields = $fields;
        $this->from_phone_number_id = $from_phone_number_id;

        parent::__construct($access_token, $timeout);
    }

    /**
     * Return WhatsApp Number Id for this request.
     *
     * @return string
     */
    public function fromPhoneNumberId(): string
    {
        return $this->from_phone_number_id;
    }

    /**
     * WhatsApp node path.
     *
     * @return string
     */
    public function nodePath(): string
    {
        return $this->from_phone_number_id . '/whatsapp_business_profile?fields=' . $this->fields;
    }
}

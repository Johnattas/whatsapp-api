<?php

namespace Johnattas\WhatsappApi\Message;

use Johnattas\WhatsappApi\Message\Media\MediaID;

final class AudioMessage extends Message
{
    /**
    * {@inheritdoc}
    */
    public string $type = 'audio';

    /**
    * Document identifier: WhatsApp Media ID or any Internet public link document.
    *
    * You can get a WhatsApp Media ID uploading the document to the WhatsApp Cloud servers.
    */
    public MediaID $id;

    /**
    * {@inheritdoc}
    */
    public function __construct(string $to, MediaID $id, ?string $reply_to)
    {
        $this->id = $id;

        parent::__construct($to, $reply_to);
    }

    public function identifierType(): string
    {
        return $this->id->type();
    }

    public function identifierValue(): string
    {
        return $this->id->value();
    }
}

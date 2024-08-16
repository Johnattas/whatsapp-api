<?php

namespace Johnattas\WhatsappApi\Message;

use Johnattas\WhatsappApi\Message\Media\MediaID;

final class DocumentMessage extends Message
{
    /**
    * {@inheritdoc}
    */
    public string $type = 'document';

    /**
    * Document identifier: WhatsApp Media ID or any Internet public link document.
    *
    * You can get a WhatsApp Media ID uploading the document to the WhatsApp Cloud servers.
    */
    public MediaID $id;

    /**
     * Describes the filename for the specific document: eg. my-document.pdf.
     */
    public string $name;

    /**
     * Describes the specified document.
     */
    public ?string $caption;

    /**
    * {@inheritdoc}
    */
    public function __construct(string $to, MediaID $id, string $name, ?string $caption, ?string $reply_to)
    {
        $this->id = $id;
        $this->name = $name;
        $this->caption = $caption;

        parent::__construct($to, $reply_to);
    }

    /**
     * Name of the document to show on a WhatsApp message.
     */
    public function filename(): string
    {
        return $this->name;
    }

    public function caption(): ?string
    {
        return $this->caption;
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

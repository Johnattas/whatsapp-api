<?php

namespace Johnattas\WhatsappApi\Message;

final class ReactionMessage extends Message
{
    /**
     * {@inheritdoc}
     */
    public string $type = 'reaction';

    public $emoji;

    public $message_id;

    /**
     * {@inheritdoc}
     */
    public function __construct(string $to, string $message_id, string $emoji)
    {
        $this->emoji = $emoji;
        $this->message_id = $message_id;

        parent::__construct($to, null);
    }

    public function emoji(): string
    {
        return $this->emoji;
    }

    public function message_id(): string
    {
        return $this->message_id;
    }
}

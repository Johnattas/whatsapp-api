<?php

namespace Johnattas\WhatsappApi\Message\ButtonReply;

class Button
{
    public $id;
    public $title;

    public function __construct(string $id, string $title)
    {
        $this->id = $id;
        $this->title = $title;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }
}

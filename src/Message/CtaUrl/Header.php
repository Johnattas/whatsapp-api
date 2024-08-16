<?php

namespace Johnattas\WhatsappApi\Message\CtaUrl;

abstract class Header
{
    public string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    abstract public function getBody(): array;
}

<?php

namespace johnattas\WhatsappApi\Message\CtaUrl;

abstract class Header
{
    protected string $type;

    protected function __construct(string $type)
    {
        $this->type = $type;
    }

    abstract public function getBody(): array;
}

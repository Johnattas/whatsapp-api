<?php

namespace Johnattas\WhatsappApi\Message\Template;

final class Component
{
    /**
     * Parameters of a header template.
     */
    public array $header;

    /**
     * Parameters of a body template.
     */
    public array $body;

    /**
     * Buttons to attach to a template.
     */
    public array $buttons;

    public function __construct(array $header = [], array $body = [], array $buttons = [])
    {
        $this->header = $header;
        $this->body = $body;
        $this->buttons = $buttons;
    }

    public function header(): array
    {
        return $this->header;
    }

    public function body(): array
    {
        return $this->body;
    }

    public function buttons(): array
    {
        return $this->buttons;
    }
}

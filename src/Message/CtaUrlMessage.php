<?php

namespace Johnattas\WhatsappApi\Message;

use Johnattas\WhatsappApi\Message\CtaUrl\Header;

final class CtaUrlMessage extends Message
{
    /**
    * {@inheritdoc}
    */
    public string $type = 'cta_url';

    public string $displayText;

    public string $url;

    public ?Header $header = null;

    public ?string $body = null;

    public ?string $footer = null;

    /**
    * {@inheritdoc}
    */
    public function __construct(
        string $to,
        string $displayText,
        string $url,
        ?Header $header,
        ?string $body,
        ?string $footer,
        ?string $reply_to
    ) {
        $this->displayText = $displayText;
        $this->url = $url;
        $this->header = $header;
        $this->body = $body;
        $this->footer = $footer;

        parent::__construct($to, $reply_to);
    }

    public function getDisplayText(): string
    {
        return $this->displayText;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function header(): ?array
    {
        return is_null($this->header) ? null : $this->header->getBody();
    }

    public function body(): ?string
    {
        return $this->body;
    }

    public function footer(): ?string
    {
        return $this->footer;
    }

    public function action(): array
    {
        return [
            'name' => $this->type,
            'parameters' => [
                'display_text' => $this->displayText,
                'url' => $this->url,
            ],
        ];
    }
}

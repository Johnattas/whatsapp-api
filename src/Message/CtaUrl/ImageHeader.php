<?php

namespace Johnattas\WhatsappApi\Message\CtaUrl;

final class ImageHeader extends Header
{
    public string $link;

    public function __construct(string $link)
    {
        parent::__construct('image');

        $this->link = $link;
    }

    public function getBody(): array
    {
        return [
            'type' => $this->type,
            'image' => [
                'link' => $this->link,
            ],
        ];
    }
}

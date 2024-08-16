<?php

namespace Johnattas\WhatsappApi\WebHook\Notification\Support;

final class Error
{
    public int $code;

    public string $title;

    public function __construct(int $code, string $title)
    {
        $this->code = $code;
        $this->title = $title;
    }

    public function code(): int
    {
        return $this->code;
    }

    public function title(): string
    {
        return $this->title;
    }
}

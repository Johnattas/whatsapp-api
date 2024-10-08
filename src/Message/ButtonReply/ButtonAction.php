<?php

namespace Johnattas\WhatsappApi\Message\ButtonReply;

class ButtonAction
{
    public $buttons;

    public function __construct(array $buttons)
    {
        $this->buttons = $buttons;
    }

    public function buttons(): array
    {
        $buttonActions = [];

        foreach ($this->buttons as $button) {
            $buttonActions[] = [
                "type" => "reply",
                "reply" => [
                    "id" => $button->id(),
                    "title" => $button->title(),
                ],
            ];
        }

        return $buttonActions;
    }
}

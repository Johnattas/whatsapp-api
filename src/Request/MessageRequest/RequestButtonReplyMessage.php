<?php

namespace Johnattas\WhatsappApi\Request\MessageRequest;

use Johnattas\WhatsappApi\Request\MessageRequest;

class RequestButtonReplyMessage extends MessageRequest
{
    public function body(): array
    {
        $body = [
            'messaging_product' => $this->message->messagingProduct(),
            'recipient_type' => $this->message->recipientType(),
            'to' => $this->message->to(),
            'type' => 'interactive',
            'interactive' => [
                'type' => 'button',
                'body' => ['text' => $this->message->body()],
                'action' => ['buttons' => $this->message->action()->buttons()],
            ],
        ];

        if ($this->message->header()) {
            $body['interactive']['header'] = [
                'type' => 'text',
                'text' => $this->message->header(),
            ];
        }

        if ($this->message->footer()) {
            $body['interactive']['footer'] = [
                'text' => $this->message->footer(),
            ];
        }

        if ($this->message->replyTo()) {
            $body['context']['message_id'] = $this->message->replyTo();
        }

        return $body;
    }
}

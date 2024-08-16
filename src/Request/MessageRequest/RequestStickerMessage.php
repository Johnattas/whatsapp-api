<?php

namespace Johnattas\WhatsappApi\Request\MessageRequest;

use Johnattas\WhatsappApi\Request\MessageRequest;

final class RequestStickerMessage extends MessageRequest
{
    /**
     * {@inheritdoc}
     */
    public function body(): array
    {
        $body = [
            'messaging_product' => $this->message->messagingProduct(),
            'recipient_type' => $this->message->recipientType(),
            'to' => $this->message->to(),
            'type' => $this->message->type(),
            $this->message->type() => [
                $this->message->identifierType() => $this->message->identifierValue(),
            ],
        ];

        if ($this->message->replyTo()) {
            $body['context']['message_id'] = $this->message->replyTo();
        }

        return $body;
    }
}

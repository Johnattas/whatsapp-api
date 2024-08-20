<?php

namespace Johnattas\WhatsappApi\WebHook\Notification;

use Johnattas\WhatsappApi\WebHook\Notification;

abstract class MessageNotification extends Notification
{
    public ?Support\Context $context = null;

    public ?Support\Client $client = null;

    public ?Support\Referral $referral = null;

    public function client(): ?Support\Client
    {
        return $this->$client;
    }

    public function replyingToMessageId(): ?string
    {
        if (!$this->context) {
            return null;
        }

        return $this->context->replyingToMessageId();
    }

    public function isForwarded(): bool
    {
        if (!$this->context) {
            return false;
        }

        return $this->context->isForwarded();
    }

    public function context(): ?Support\Context
    {
        return $this->context;
    }

    public function referral(): ?Support\Referral
    {
        return $this->referral;
    }

    public function withContext(Support\Context $context): self
    {
        $this->context = $context;

        return $this;
    }

    public function withReferral(Support\Referral $referral): self
    {
        $this->referral = $referral;

        return $this;
    }

    public function withClient(Support\Client $client): self
    {
        $this->client = $client;

        return $this;
    }
}

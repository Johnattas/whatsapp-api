<?php

namespace Johnattas\WhatsappApi\WebHook\Notification\Support;

final class Context
{
    public ?string $replying_to_message_id;

    public bool $forwarded;

    public ?ReferredProduct $referred_product;

    public function __construct(
        string $replying_to_message_id = null,
        bool $forwarded = false,
        ReferredProduct $referred_product = null
    ) {
        $this->replying_to_message_id = $replying_to_message_id;
        $this->forwarded = $forwarded;
        $this->referred_product = $referred_product;
    }

    public function replyingToMessageId(): ?string
    {
        return $this->replying_to_message_id;
    }

    public function isForwarded(): bool
    {
        return $this->forwarded;
    }

    public function hasReferredProduct(): bool
    {
        return null !== $this->referred_product;
    }

    public function catalogId(): ?string
    {
        if (!$this->hasReferredProduct()) {
            return null;
        }

        return $this->referred_product->catalogId();
    }

    public function productRetailerId(): ?string
    {
        if (!$this->hasReferredProduct()) {
            return null;
        }

        return $this->referred_product->productRetailerId();
    }
}

<?php

namespace Johnattas\WhatsappApi\WebHook\Notification\Support;

final class ReferredProduct
{
    public string $catalog_id;

    public string $product_retailer_id;

    public function __construct(string $catalog_id, string $product_retailer_id)
    {
        $this->catalog_id = $catalog_id;
        $this->product_retailer_id = $product_retailer_id;
    }

    public function catalogId(): string
    {
        return $this->catalog_id;
    }

    public function productRetailerId(): string
    {
        return $this->product_retailer_id;
    }
}

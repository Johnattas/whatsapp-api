<?php

namespace Johnattas\WhatsappApi\WebHook\Notification;

use Johnattas\WhatsappApi\WebHook\Notification\Support\Products;

final class Order extends MessageNotification
{
    public string $catalog_id;
    public string $message;
    public Products $products;
    public array $content;

    public function __construct(
        string $id,
        Support\MetaAccount $meta_account,
        string $catalog_id,
        string $message,
        Products $products,
        string $received_at_timestamp
    ) {
        parent::__construct($id, $meta_account, $received_at_timestamp);

        $this->content = [
            'id' => $id,
            'catalog_id' => $catalog_id,
            'message' => $message,
            'products' => $products,
        ];

        $this->catalog_id = $catalog_id;
        $this->message = $message;
        $this->products = $products;
    }

    public function catalogId(): string
    {
        return $this->catalog_id;
    }

    public function message(): string
    {
        return $this->message;
    }

    public function products(): Products
    {
        return $this->products;
    }
}

<?php

namespace Johnattas\WhatsappApi\WebHook\Notification;

final class Media extends MessageNotification
{
    public string $image_id;

    public string $mime_type;

    public string $sha256;

    public string $filename;

    public string $caption;

    public function __construct(
        string $id,
        Support\MetaAccount $meta_account,
        string $image_id,
        string $mime_type,
        string $sha256,
        string $filename,
        string $caption,
        string $received_at_timestamp,
        array $content,
    ) {
        parent::__construct($id, $meta_account, $received_at_timestamp);

        $this->content = [
            'id' => $image_id,
            'type' => $mime_type,
            'sha256' => $sha256,
            'filename' => $filename,
            'caption' => $caption,
        ];
        $this->image_id = $image_id;
        $this->mime_type = $mime_type;
        $this->sha256 = $sha256;
        $this->filename = $filename;
        $this->caption = $caption;
    }

    public function imageId(): string
    {
        return $this->image_id;
    }

    public function mimeType(): string
    {
        return $this->mime_type;
    }

    public function sha256(): string
    {
        return $this->sha256;
    }

    public function filename(): string
    {
        return $this->filename;
    }

    public function caption(): string
    {
        return $this->caption;
    }
}

<?php

namespace Johnattas\WhatsappApi\Request\MediaRequest;

use GuzzleHttp\Psr7;
use Johnattas\WhatsappApi\Request;

final class UploadMediaRequest extends Request
{
    /**
     * @var string File path of file will sent.
     */
    public string $file_path;

    /**
    * @var string WhatsApp Number Id from messages will sent.
    */
    public string $phone_number_id;

    /**
     * Creates a new Media Request instance.
     *
     */
    public function __construct(string $file_path, string $phone_number_id, string $access_token, ?int $timeout = null)
    {
        $this->file_path = $file_path;
        $this->phone_number_id = $phone_number_id;

        parent::__construct($access_token, $timeout);
    }

    /**
     * Returns the raw form of the request.
     *
     * @return array
     */
    public function form(): array
    {
        return [
            [
                'name' => 'file',
                'contents' => Psr7\Utils::tryFopen($this->file_path, 'r'),
            ],
            [
                'name' => 'type',
                'contents' => mime_content_type($this->file_path),
            ],
            [
                'name' => 'messaging_product',
                'contents' => 'whatsapp',
            ],
        ];
    }

    /**
     * WhatsApp node path.
     *
     * @return string
     */
    public function nodePath(): string
    {
        return $this->phone_number_id . '/media';
    }
}

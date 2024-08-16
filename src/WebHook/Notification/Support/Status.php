<?php

namespace Johnattas\WhatsappApi\WebHook\Notification\Support;

/**
 * @method static Status DELIVERED()
 * @method static Status READ()
 * @method static Status SENT()
 * @method static Status FAILED()
 */
final class Status extends \MyCLabs\Enum\Enum
{
    public const DELIVERED = 'delivered';

    public const READ = 'read';

    public const SENT = 'sent';

    public const FAILED = 'failed';
}

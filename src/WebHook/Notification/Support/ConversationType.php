<?php

namespace Johnattas\WhatsappApi\WebHook\Notification\Support;

/**
 * @method static ConversationType BUSINESS_INITIATED()
 * @method static ConversationType CUSTOMER_INITIATED()
 * @method static ConversationType REFERRAL_INITIATED()
 */
final class ConversationType extends \MyCLabs\Enum\Enum
{
    public const BUSINESS_INITIATED = 'business_initiated';

    public const CUSTOMER_INITIATED = 'user_initiated';

    public const REFERRAL_INITIATED = 'referral_conversion';

    public const AUTHENTICATION = 'authentication';

    public const MARKETING = 'marketing';

    public const UTILITY = 'utility';

    public const SERVICE = 'service';
}

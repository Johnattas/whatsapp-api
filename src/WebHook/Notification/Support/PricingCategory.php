<?php

namespace Johnattas\WhatsappApi\WebHook\Notification\Support;

/**
 * @method static PricingCategory AUTHENTICATION()
 * @method static PricingCategory MARKETING()
 * @method static PricingCategory UTILITY()
 * @method static PricingCategory SERVICE()
 * @method static PricingCategory REFERRAL_INITIATED()
 */
final class PricingCategory extends \MyCLabs\Enum\Enum
{
    public const AUTHENTICATION = 'authentication';

    public const MARKETING = 'marketing';

    public const UTILITY = 'utility';

    public const SERVICE = 'service';

    public const REFERRAL_INITIATED = 'referral_conversion';
}

<?php

namespace Johnattas\WhatsappApi\Message\Contact;

use MyCLabs\Enum\Enum;

final class PhoneType extends Enum
{
    public const CELL = 'cell';
    public const MAIN = 'main';
    public const IPHONE = 'iphone';
    public const HOME = 'home';
    public const WORK = 'work';
}

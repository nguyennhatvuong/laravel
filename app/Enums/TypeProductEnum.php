<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class TypeProductEnum extends Enum
{
    const men =   0;
    const women = 1;
    const kids = 2;
}

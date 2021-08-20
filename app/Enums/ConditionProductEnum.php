<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ConditionProductEnum extends Enum
{
    const default =   0;
    const hot =   1;
    const new = 2;
    const sale = 2;
}

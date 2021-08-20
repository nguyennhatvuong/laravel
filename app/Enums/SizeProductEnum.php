<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class SizeProductEnum extends Enum
{
    const S =   0;
    const M =   1;
    const L = 2;
    const XL = 3;
    const XXL = 4;
}

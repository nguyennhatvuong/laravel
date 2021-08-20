<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class QuantityStatusEnum extends Enum
{
    const all =   0;
    const less =   1;
    const outOfStock = 2;
    const stocking = 3;
}

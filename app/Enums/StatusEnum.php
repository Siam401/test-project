<?php

namespace App\Enums;

use App\Traits\UsefulEnums;

enum StatusEnum: string
{
    use UsefulEnums;

    case Pending = 'pending';
    case Confirmed = 'confirmed';
    case Completed = 'completed';
}

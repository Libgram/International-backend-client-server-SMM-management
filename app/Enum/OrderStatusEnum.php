<?php

namespace App\Enum;

enum OrderStatusEnum: int
{

    case new = 0;
    case paid = 1;
    case completed = 2;
}

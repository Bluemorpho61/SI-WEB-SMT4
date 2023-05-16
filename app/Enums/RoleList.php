<?php

namespace App\Enums;

enum RoleList: int
{
    case STAKEHOLDER = 0;
    case ADMIN = 1;
    case DEVELOPER = 2;
}
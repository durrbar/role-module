<?php

declare(strict_types=1);

namespace Modules\Role\Enums;

enum Permission: string
{
    case SuperAdmin = 'super_admin';
    case StoreOwner = 'store_owner';
    case Staff = 'staff';
    case Customer = 'customer';}

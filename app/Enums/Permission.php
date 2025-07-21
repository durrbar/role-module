<?php

namespace Modules\Role\Enums;

use BenSampo\Enum\Enum;

/**
 * Class RoleType
 */
final class Permission extends Enum
{
    public const SUPER_ADMIN = 'super_admin';

    public const STORE_OWNER = 'store_owner';

    public const STAFF = 'staff';

    public const CUSTOMER = 'customer';
}

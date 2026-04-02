<?php

declare(strict_types=1);

use Modules\Role\Enums\Permission;
use Modules\User\Models\User;

if (! function_exists('Role')) {

    function Role(User $user): string
    {
        if ($user->hasPermissionTo(Permission::SuperAdmin->value)) {
            return Permission::SuperAdmin->value;
        }
        if ($user->hasPermissionTo(Permission::StoreOwner->value) && ! $user->hasPermissionTo(Permission::SuperAdmin->value)) {
            return Permission::StoreOwner->value;
        }
        if ($user->hasPermissionTo(Permission::Staff->value)) {
            return Permission::Staff->value;
        }

        return Permission::Customer->value;

    }
}

<?php

use Modules\Role\Enums\Permission;
use Modules\User\Models\User;

if (! function_exists('Role')) {

    function Role(User $user): string
    {
        if ($user->hasPermissionTo(Permission::SuperAdmin->value)) {
            return Permission::SuperAdmin->value;
        } elseif ($user->hasPermissionTo(Permission::StoreOwner->value) && ! $user->hasPermissionTo(Permission::SuperAdmin->value)) {
            return Permission::StoreOwner->value;
        } elseif ($user->hasPermissionTo(Permission::Staff->value)) {
            return Permission::Staff->value;
        } else {
            return Permission::Customer->value;
        }
    }
}

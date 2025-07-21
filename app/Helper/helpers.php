<?php

use Modules\Role\Enums\Permission;
use Modules\User\Models\User;

if (! function_exists('Role')) {

    function Role(User $user): string
    {
        if ($user->hasPermissionTo(Permission::SUPER_ADMIN)) {
            return Permission::SUPER_ADMIN;
        } elseif ($user->hasPermissionTo(Permission::STORE_OWNER) && ! $user->hasPermissionTo(Permission::SUPER_ADMIN)) {
            return Permission::STORE_OWNER;
        } elseif ($user->hasPermissionTo(Permission::STAFF)) {
            return Permission::STAFF;
        } else {
            return Permission::CUSTOMER;
        }
    }
}

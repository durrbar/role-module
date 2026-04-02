<?php

declare(strict_types=1);

namespace Modules\Role\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as SpatieRole;

#[Table('roles')]
class Role extends SpatieRole
{
    use HasFactory;
    use HasUuids;

    protected $primaryKey = 'uuid';
}

<?php

declare(strict_types=1);

namespace Modules\Role\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Permission\Models\Permission as SpatiePermission;

#[Table('permissions')]
class Permission extends SpatiePermission
{
    use HasUuids;

    protected $primaryKey = 'uuid';

    /**
     * A permission belongs to some users of the model associated with its guard.
     */
    public function users(): BelongsToMany
    {
        return $this->morphedByMany(
            getModelForGuard($this->attributes['guard_name']),
            'model',
            config('permission.table_names.model_has_permissions'),
            'permission_id',
            config('permission.column_names.model_morph_key')
        )->with('profile', 'address', 'shop');
    }
}

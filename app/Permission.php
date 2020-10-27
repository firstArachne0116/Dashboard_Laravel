<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    public static function defaultPermissions()
    {
        return [
            'Manage Users',
            'Manage Roles',
            'Manage Permissions'
        ];
    }
}
<?php

namespace App;


class Role extends \Spatie\Permission\Models\Role
{
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    public static function defaultRoles()
    {
        return [
            'Administrator',
            'User',
        ];
    }
}

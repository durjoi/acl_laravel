<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function permissions() {
      return $this->belongsToMany(Permission::class, 'roles_permissions');
    }

    public function users() {
      return $this->belongsToMany(User::class, 'users_roles');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    public function roles() {
      return $this->belongsToMany(Role::class, 'roles_permissions');
    }

    public function users() {
      return $this->belongsToMany(User::class, 'users_permissions');
    }
}

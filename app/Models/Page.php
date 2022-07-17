<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Page extends Model
{
    public static function get_administrator($username, $password)
    {
        $user = DB::table('administrators')->where(['username' => $username, 'password' => $password, 'deleted_at' => null]);
        if ($user->count() > 0) {
            $user = $user->first();
            session()->put('admin', ['user_id' => $user->administrator_id, 'name' => $user->name, 'role_id' => $user->role_id]);
            return true;
        } else {
            return false;
        }
    }
}
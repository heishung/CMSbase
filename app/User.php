<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the connection of the entity.
     *
     * @return string|null
     */
    public function getQueueableConnection()
    {
        // TODO: Implement getQueueableConnection() method.
    }

    /**
     * Retrieve the model for a bound value.
     *
     * @param  mixed $value
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function resolveRouteBinding($value)
    {
        // TODO: Implement resolveRouteBinding() method.
    }

    static function createAdminIfNeed()
    {
        $count = self::where('role_id', \UserRole::ROLE_ADMIN)->count();
        if ($count == 0) {
            $admin = new User();
            $admin->name = 'Super Admin';
            $admin->email = 'admin@gmail.com';
            $admin->role_id = \UserRole::ROLE_ADMIN;
            $admin->password = bcrypt('admin123');
            $admin->email_verified = true;
            $admin->save();
        }
    }

    public function isAdmin()
    {
        return $this->role_id == \UserRole::ROLE_ADMIN;
    }
}

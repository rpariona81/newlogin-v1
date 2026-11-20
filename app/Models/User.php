<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
//use Illuminate\Support\Str;

#[Fillable(['username', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    use HasUuids; // Habilita la generación automática de UUIDs


    protected $table = 't_users';

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /*public function setPasswordAttribute($value)
    {
        // Genera un salt aleatorio compatible con SHA-512 crypt ($6$)
        $salt = '$6$rounds=10000$' . bin2hex(random_bytes(8)) . "$";
        // Genera el hash final estructurado
        $hash_moodle = crypt($value, $salt);

        $this->attributes['password'] = $hash_moodle;
    }*/

    /*public function checkPassword($password)
    {
        // Verifica si la contraseña proporcionada coincide con el hash almacenado
        return crypt($password, $this->password) === $this->password;
    }*/

    /*public function setUsernameAttribute($value)
    {
        $this->attributes['username'] = uuid_create(UUID_TYPE_RANDOM)->toString();
    }*/
    
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

use Illuminate\Support\Str;
use App\Lib\MoodleHasher;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Genera un salt aleatorio compatible con SHA-512 crypt ($6$)
        // $salt = '$6$rounds=10000$' . bin2hex(random_bytes(8)) . "$";
        $moodle_hasher = new MoodleHasher();
        //genera usuarios
        $user1 = new User();
        $user1->email = 'jdoe@email.com';
        //$user1->password = crypt('123456', $salt);
        $user1->password = $moodle_hasher->make('123456');
        //$user1->username = Str::uuid()->toString();
        $user1->username = substr($user1->email, 0, strpos($user1->email,'@')); // Genera un nombre de usuario aleatorio de 8 caracteres
        $user1->save();

        $user2 = new User();
        $user2->email = 'tomas@email.com';
        //$user2->password = crypt('123456', $salt);
        $user2->password = $moodle_hasher->make('123456');
        //$user2->username = Str::uuid()->toString();
        $user2->username = substr($user2->email, 0, strpos($user2->email,'@')); // Genera un nombre de usuario aleatorio de 8 caracteres
        $user2->save();
    }
}

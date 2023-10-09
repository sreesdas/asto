<?php 

namespace App\Services; 

use App\Models\User;

class UserService
{
    public function firstOrCreate($username, $record)
    {
        $user = User::where('username', $username)->first();
        if($user) {
            $user->update($record);
        } else {
            $user = User::create([
                'username' => $username,
                'name' => $record['name'],
                'email' => "$username@ongc.co.in",
                'password' => bcrypt('4st0CWC@123!')
            ]);
        }

        return $user;
    }
}
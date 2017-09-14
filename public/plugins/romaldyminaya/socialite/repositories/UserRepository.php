<?php namespace RomaldyMinaya\Socialite\Repositories;

use RainLab\User\Models\User;
use Carbon\Carbon;
use Hash;

class UserRepository
{
    public function findByUsernameOrCreate ($userData, $provider)
    {
        $user = User::whereRsProviderId($userData->id)->first();

        if (!$user) {
            $user = new User();
            $user->rs_provider      = $provider;
            $user->rs_provider_id   = $userData->id;
            $user->name             = $userData->name;
            $user->email            = $userData->email;
            $user->avatar           = $userData->avatar ?: null;
            $user->is_activated     = true;
            $user->activated_at     = Carbon::now();

            //Added for preventing null error from DB
            $user->password         = Hash::make(str_random(10));

            $user->forceSave();
        }

        $this->checkIfUserNeedsUpdating($user, $userData);

        return $user;
    }

    public function checkIfUserNeedsUpdating ($user, $userData)
    {
        $socialData = [
            'avatar' => $userData->avatar ?: null,
            'email'  => $userData->email,
            'name'   => $userData->name,
        ];

        $dbData = [
            'avatar'   => $user->avatar ?: null,
            'email'    => $user->email,
            'name'     => $user->name,
        ];

        if (count(array_diff($socialData, $dbData))) {
            $user->avatar   = $userData->avatar;
            $user->email    = $userData->email;
            $user->name     = $userData->name;
            $user->forceSave();
        }
    }
}
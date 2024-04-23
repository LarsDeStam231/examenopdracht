<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Role;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        // Bepaal de rolename op basis van de e-mail
        $rolename = $this->assignRoleBasedOnEmail($user->email);

        // Voeg de rolename toe aan de gebruiker
        $user->update(['rolename' => $rolename]);
    }

    /**
     * Assign role based on user email.
     *
     * @param  string  $email
     * @return string
     */
    private function assignRoleBasedOnEmail(string $email): string
    {
        if (strpos($email, 'adminexcellenttaste') !== false) {
            return 'admin';
        } elseif (strpos($email, 'kokexcellenttaste') !== false) {
            return 'kok';
        } elseif (strpos($email, 'barmanexcellenttaste') !== false) {
            return 'barman';
        } else {
            return 'gebruiker';
        }
    }
}
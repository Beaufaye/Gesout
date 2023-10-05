<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Demandes;
use App\Models\User;

class PermissionPolicy
{

    use HandlesAuthorization;

    public function before(User $user, $ability){
        if($user->isAdministrateur()){
            return true;
        }
    }
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Demandes $demandes)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->id === 1;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Demandes $demandes)
    {
        return $user->id === 1;
        
    }
    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Demandes $demandes)
    {
        return $user->id === 3;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Demandes $demandes)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Demandes $demandes)
    {
        //
    }
}

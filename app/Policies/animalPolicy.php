<?php

namespace App\Policies;

use App\Models\User;
use App\Models\animals;
use Illuminate\Auth\Access\Response;

class animalPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
        return $user->id === $animals->user_id
        ? Response::allow()
        : Response::deny('You do not own this animal');

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, animals $animals): bool
    {
        //
        return $user->id === $animals->user_id
        ? Response::allow()
        : Response::deny('You do not own this animal');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, animals $animals): bool
    {
        //
        return $user->id === $animals->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, animals $animals): bool
    {
        //
        return $user->id === $animals->user_id;
        
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, animals $animals): bool
    {
        //
       

    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, animals $animals): bool
    {
        //
        
                   
    }
}

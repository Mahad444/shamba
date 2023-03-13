<?php

namespace App\Policies;

use App\Models\User;

class CropPolicy
{
    /**
     * Create a new policy instance.
     */
    public function viewAny()
    {
        //
        return $user->id === $crops->user_id
        ? Response::allow()
        : Response::deny('You do not own this crop');
        
    }
    public function view(User $user, crops $crops): bool
    {
        //
        return $user->id === $crops->user_id
        ? Response::allow()
        : Response::deny('You do not own this crop');
    }
    public function create(User $user): bool
    {
        //
    }
    public function update(User $user, crops $crops): bool
    {
        //
        return $user->id === $crops->user_id;
    }
    public function delete(User $user, crops $crops): bool
    {
        //
        return $user->id === $crops->user_id;
        
    }

}

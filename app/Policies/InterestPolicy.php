<?php

namespace App\Policies;

use App\Models\Interest;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InterestPolicy
{
    use HandlesAuthorization;

    public function allowRestify(User $user = null): bool
    {
        return true;
    }

    public function show(User $user, Interest $model): bool
    {
        return true;
    }

    public function store(User $use = null): bool
    {
        return true;
    }

    public function storeBulk(User $user): bool
    {
        return false;
    }

    public function update(User $user, Interest $model): bool
    {
        return false;
    }

    public function updateBulk(User $user, Interest $model): bool
    {
        return false;
    }

    public function deleteBulk(User $user, Interest $model): bool
    {
        return false;
    }

    public function delete(User $user, Interest $model): bool
    {
        return false;
    }
}

<?php

namespace App\Policies;

use App\Models\User;
use App\Models\TankStorageTerminalDashboard;
use Illuminate\Auth\Access\HandlesAuthorization;

class TankStorageTerminalDashboardPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_tank::storage::terminal::dashboard');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, TankStorageTerminalDashboard $tankStorageTerminalDashboard): bool
    {
        return $user->can('view_tank::storage::terminal::dashboard');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_tank::storage::terminal::dashboard');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, TankStorageTerminalDashboard $tankStorageTerminalDashboard): bool
    {
        return $user->can('update_tank::storage::terminal::dashboard');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, TankStorageTerminalDashboard $tankStorageTerminalDashboard): bool
    {
        return $user->can('delete_tank::storage::terminal::dashboard');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_tank::storage::terminal::dashboard');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, TankStorageTerminalDashboard $tankStorageTerminalDashboard): bool
    {
        return $user->can('force_delete_tank::storage::terminal::dashboard');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_tank::storage::terminal::dashboard');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, TankStorageTerminalDashboard $tankStorageTerminalDashboard): bool
    {
        return $user->can('restore_tank::storage::terminal::dashboard');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_tank::storage::terminal::dashboard');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, TankStorageTerminalDashboard $tankStorageTerminalDashboard): bool
    {
        return $user->can('replicate_tank::storage::terminal::dashboard');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_tank::storage::terminal::dashboard');
    }
}

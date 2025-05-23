<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class PostPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Post $post): bool
    {
        //
    }

    /**
     * Determine whether the user can view models.
     */
    public function create(User $user): bool
    {
        return Auth::check();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Post $post): bool
    {
        return $user->user_id === $post->owner->user_id || $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Post $post): bool
    {
        return $user->user_id === $post->owner->user_id || $user->isAdmin();
    }

    /**
     * Determine whether the user can create the model.
     */
    public function store(User $user, Post $post): bool
    {
        return Auth::check();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Post $post): bool
    {
        //
    }

    public function like(User $user): bool
    {
        return Auth::check();
    }
    public function voteComment(User $user): bool
    {
        return Auth::check();
    }
    
    public function comment(User $user): bool
    {
        return Auth::check();
    }
}

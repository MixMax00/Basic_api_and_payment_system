<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Post;

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
        // processing user data
         // $user->name = "Mr. ". $user->name;
         // $user->save();

        $title = "New user " . $user->name . "Created Successfully!!";
        $description = "New user " .$user->name. "Created Successfully!! Created Successfully!! Created Successfully!! Created Successfully!! Created Successfully!!";
        Post::create([
            "title"       => $title,
            "description" => $description,
            "user_id"     => $user->id,
            "category_id" => 1
        ]);



    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        $title = "User " . $user->name . "Updated Successfully!!";
        $description = "User " .$user->name. "Updated Successfully!! Updated Successfully!! Updated Successfully!! Updated Successfully!! Updated Successfully!!";
        Post::create([
            "title"       => $title,
            "description" => $description,
            "user_id"     => $user->id,
            "category_id" => 1
        ]);

    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}

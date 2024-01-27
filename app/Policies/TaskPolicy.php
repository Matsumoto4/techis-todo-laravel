<?php

namespace App\Policies;

use App\Models\User;

class TaskPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    //指定されたユーザのタスクのとき削除可能
    public function destroy(User $user,Task $task)
    {
        return $user->id === $task->user_id;
    }
}

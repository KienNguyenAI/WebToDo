<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function getAllUsers()
    {
        $users = User::all();
        return response()->json($users, 200);
    }
    public function getUserTasks($userId)
    {
        $user = User::with(['tasks.list', 'tasks.tags'])->find($userId);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json([
            'user' => $user->name,
            'tasks' => $user->tasks
        ], 200);
    }
}

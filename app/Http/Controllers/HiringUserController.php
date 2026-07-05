<?php

namespace App\Http\Controllers;

use App\Models\HiringUser;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class HiringUserController extends BaseController
{
    public function index()
    {
        $hiringUsers = HiringUser::all();
        return $this->sendResponse($hiringUsers, 'Hiring users retrieved successfully.');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:hiring_users,email',
                'notes' => 'nullable|string',
                'phone' => 'nullable|string|max:20',
            ]);
        } catch (ValidationException $e) {
            return $this->sendError('Validation Error.', $e->errors(), 422);
        }

        $hiringUser = HiringUser::create($validated);
        return $this->sendResponse($hiringUser, 'Hiring user created successfully.', 201);
    }
    
}
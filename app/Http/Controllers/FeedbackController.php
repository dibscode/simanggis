<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return Feedback::with(['user', 'school'])->get();
    }

    public function show($id)
    {
        return Feedback::with(['user', 'school'])->findOrFail($id);
    }

    public function store(Request $request)
    {
        return Feedback::create($request->only(['school_id', 'user_id', 'feedback_text', 'rating']));
    }

    public function update(Request $request, $id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->update($request->only(['school_id', 'user_id', 'feedback_text', 'rating']));
        return $feedback;
    }

    public function destroy($id)
    {
        return Feedback::destroy($id);
    }
}


<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    // Display a listing of the participants
    public function index()
    {
        $participants = Participant::all();
        return view('admin.dashboard.participants.index', compact('participants'));
    }

    // Show the form for creating a new participant
    public function create()
    {
        return view('admin.dashboard.participants.create');
    }

    // Store a newly created participant in storage
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:participants',
        ]);

        Participant::create($request->all());

        return redirect()->route('admin.participants.index')->with('success', 'Participant created successfully.');
    }

    // Show the form for editing the specified participant
    public function edit($id)
    {
        $participant = Participant::findOrFail($id);
        return view('admin.dashboard.participants.edit', compact('participant'));
    }

    // Update the specified participant in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:participants,email,' . $id,
        ]);

        $participant = Participant::findOrFail($id);
        $participant->update($request->all());

        return redirect()->route('admin.participants.index')->with('success', 'Participant updated successfully.');
    }

    // Remove the specified participant from storage
    public function destroy($id)
    {
        $participant = Participant::findOrFail($id);
        $participant->delete();

        return redirect()->route('admin.participants.index')->with('success', 'Participant deleted successfully.');
    }
}

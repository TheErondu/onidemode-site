<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    // Define availability options as a constant or private property
    private const AVAILABILITY_OPTIONS = [
        'Weekday mornings',
        'Weekday afternoons',
        'Weekday evenings',
        'Weekend mornings',
        'Weekend afternoons',
        'Weekend evenings'
    ];
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
            'gender' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'email' => 'required|string|email|max:255|unique:participants',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'proficiency' => 'required|string|max:255',
            'read_write' => 'required|string|max:3',
            'availability' => 'required|array',
            'proposed_date' => 'required|date',
            'interest_reason' => 'nullable|string|max:500',
            'experience' => 'nullable|string|max:500',
            'skills' => 'nullable|string|max:500',
            'additional_info' => 'nullable|string|max:500',
            'recording_consent' => 'required|string|max:3',
            'rules_agreement' => 'required|string|max:3',
        ]);

        Participant::create($request->all());

        return redirect()->route('admin.participants.index')->with('success', 'Participant created successfully.');
    }

    // Display the specified participant
    public function show(Participant $participant)
    {
        // dd($participant);
        return view('admin.dashboard.participants.show', compact('participant'));
    }

    // Show the form for editing the specified participant
    public function edit($id)
    {
        $participant = Participant::findOrFail($id);
        $availabilityOptions = self::AVAILABILITY_OPTIONS;

        return view('admin.dashboard.participants.edit', compact('participant', 'availabilityOptions'));
    }

    // Update the specified participant in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'email' => 'required|string|email|max:255|unique:participants,email,' . $id,
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'proficiency' => 'required|string|max:255',
            'read_write' => 'required|string|max:3',
            'availability' => 'required|array',
            'availability.*' => 'in:' . implode(',', self::AVAILABILITY_OPTIONS),
            'proposed_date' => 'required|date',
            'interest_reason' => 'nullable|string|max:500',
            'experience' => 'nullable|string|max:500',
            'skills' => 'nullable|string|max:500',
            'additional_info' => 'nullable|string|max:500',
            'recording_consent' => 'required|string|max:3',
            'rules_agreement' => 'required|string|max:3',
        ]);

        $participant = Participant::findOrFail($id);
        $participant->update($request->all());

        return redirect()->route('admin.settings.participants.index')->with('message', 'Participant updated successfully.');
    }

    // Remove the specified participant from storage
    public function destroy($id)
    {
        $participant = Participant::findOrFail($id);
        $participant->delete();

        return redirect()->route('admin.settings.participants.index')->with('message', 'Participant deleted successfully.');
    }
}

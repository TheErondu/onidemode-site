<?php

namespace App\Http\Controllers\Frontend;

use App\DTO\ParticipantDTO;
use App\Http\Controllers\Controller;
use App\Models\Participant;

class ParticipantController extends Controller
{
    static  public function createParticipant(ParticipantDTO $details): Participant
    {

        $participant = Participant::firstOrCreate(
            [
                'email' => $details->email, // Search condition 1
                'phone' => $details->phone, // Search condition 2
            ],
            [
                'first_name' => $details->first_name,
                'last_name' => $details->last_name,
                'gender' => $details->gender,
                'age' => $details->age,
                'address' => $details->address,
                'proficiency' => $details->proficiency,
                'read_write' => $details->read_write,
                'availability' => json_encode($details->availability), // Save array as JSON
                'proposed_date' => $details->proposed_date,
                'interest_reason' => $details->interest_reason,
                'experience' => $details->experience,
                'skills' => $details->skills,
                'additional_info' => $details->additional_info,
                'recording_consent' => $details->recording_consent,
                'rules_agreement' => $details->rules_agreement,
            ]
        );

        return $participant;
    }

}

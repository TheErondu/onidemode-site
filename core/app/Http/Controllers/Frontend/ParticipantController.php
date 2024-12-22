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
                'first_name' => $details->first_name, // Data to insert if no match is found
                'last_name' => $details->last_name,
            ]
        );

        return $participant;
    }
}

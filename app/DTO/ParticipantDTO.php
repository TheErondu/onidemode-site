<?php

namespace App\DTO;

class ParticipantDTO
{
    public string $first_name;
    public string $last_name;
    public string $phone;
    public string $email;
    public string $gender;
    public ?int $age; // Nullable field
    public ?string $address;
    public ?string $proficiency;
    public ?string $read_write;
    public array $availability; // Array type
    public ?string $proposed_date;
    public ?string $interest_reason;
    public ?string $experience;
    public ?string $skills;
    public ?string $additional_info;
    public ?bool $recording_consent;
    public ?bool $rules_agreement;

    /**
     * ParticipantDTO constructor.
     */
    public function __construct(
        string $first_name,
        string $last_name,
        string $phone,
        string $email,
        string $gender,
        ?int $age,
        ?string $address,
        ?string $proficiency,
        ?string $read_write,
        array $availability,
        ?string $proposed_date,
        ?string $interest_reason,
        ?string $experience,
        ?string $skills,
        ?string $additional_info,
        ?bool $recording_consent,
        ?bool $rules_agreement
    ) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->phone = $phone;
        $this->email = $email;
        $this->gender = $gender;
        $this->age = $age;
        $this->address = $address;
        $this->proficiency = $proficiency;
        $this->read_write = $read_write;
        $this->availability = $availability;
        $this->proposed_date = $proposed_date;
        $this->interest_reason = $interest_reason;
        $this->experience = $experience;
        $this->skills = $skills;
        $this->additional_info = $additional_info;
        $this->recording_consent = $recording_consent;
        $this->rules_agreement = $rules_agreement;
    }

    /**
     * Create a DTO from an associative array.
     *
     * @param array $data
     * @return self
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['first_name'] ?? '',
            $data['last_name'] ?? '',
            $data['phone'] ?? '',
            $data['email'] ?? '',
            $data['gender'] ?? '',
            isset($data['age']) ? (int) $data['age'] : null,
            $data['address'] ?? null,
            $data['proficiency'] ?? null,
            $data['read_write'] ?? null,
            $data['availability'] ?? [], // Default to an empty array
            $data['proposed_date'] ?? null,
            $data['interest_reason'] ?? null,
            $data['experience'] ?? null,
            $data['skills'] ?? null,
            $data['additional_info'] ?? null,
            isset($data['recording_consent']) ? (bool) $data['recording_consent'] : null,
            isset($data['rules_agreement']) ? (bool) $data['rules_agreement'] : null
        );
    }
}

<?php

namespace App\DTO;

class ParticipantDTO
{
    public string $first_name;
    public string $last_name;
    public string $phone;
    public string $email;

    /**
     * ParticipantDTO constructor.
     */
    public function __construct(string $first_name, string $last_name, string $phone, string $email)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->phone = $phone;
        $this->email = $email;
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
            $data['email'] ?? ''
        );
    }
}

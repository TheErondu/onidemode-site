<?php

namespace App\DTO;

class ContactDetailsDTO
{
    public string $email;
    public string $phone;
    public string $address;

    public function __construct(array $data)
    {
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->address = $data['address'];
    }
}

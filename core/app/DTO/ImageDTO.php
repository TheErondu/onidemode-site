<?php

namespace App\DTO;

class ImageDTO
{
    public string $position;
    public string $src;

    public function __construct(array $data)
    {
        $this->position = $data['position'];
        $this->src = $data['src'];
    }
}

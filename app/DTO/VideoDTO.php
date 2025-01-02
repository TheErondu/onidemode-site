<?php

namespace App\DTO;

class VideoDTO
{
    public string $position;
    public string $src;

    public function __construct(array $data)
    {
        $this->src = $data['src'];
    }
}

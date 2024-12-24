<?php

namespace App\DTO;

class CtaDTO
{
    public string $text;
    public string $link;

    public function __construct(array $data)
    {
        $this->text = $data['text'];
        $this->link = $data['link'];
    }
}

<?php

namespace App\DTO;

class HomePageDTO
{
    /** @var SectionDTO[] */
    public array $sections;

    public function __construct(array $sections)
    {
        $this->sections = array_map(fn($section) => new SectionDTO($section), $sections);
    }
}


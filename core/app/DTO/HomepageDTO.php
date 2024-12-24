<?php

namespace App\DTO;

class HomePageDTO
{
    /** @var SectionDTO[] */
    //// Test 1: Change the visibility of the property to public
    public array $sections;

    public function __construct(array $sections)
    {
        $this->sections = array_map(fn($section) => new SectionDTO($section), $sections);
    }
}


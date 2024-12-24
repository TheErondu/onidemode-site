<?php

namespace App\DTO;

use App\DTO\SocialLinksDTO;

class MemberDTO
{
    public int $id;
    public string $name;
    public string $designation;
    public SocialLinksDTO $social_links;
    public string $image;

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->designation = $data['designation'];
        $this->social_links = new SocialLinksDTO($data['social_links']);
        $this->image = $data['image'];
    }
}

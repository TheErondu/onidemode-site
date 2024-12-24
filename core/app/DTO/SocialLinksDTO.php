<?php
namespace App\DTO;
class SocialLinksDTO
{
    public ?string $facebook;
    public ?string $twitter;
    public ?string $instagram;
    public ?string $youtube;
    public ?string $linkedin;

    public function __construct(array $data)
    {
        $this->facebook = $data['facebook'] ?? null;
        $this->twitter = $data['twitter'] ?? null;
        $this->instagram = $data['instagram'] ?? null;
        $this->youtube = $data['youtube'] ?? null;
        $this->linkedin = $data['linkedin'] ?? null;
    }
}

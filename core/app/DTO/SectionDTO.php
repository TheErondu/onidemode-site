<?php

namespace App\DTO;

class SectionDTO
{
    public string $id;
    public string $title;
    public ?string $subtitle;
    public ?string $description;
    public ?CtaDTO $cta;
    public ?string $image;
    public ?array $images;
    public ?array $members;
    public ?ContactDetailsDTO $contact_details;
    public ?SocialLinksDTO $social_links;

    public function __construct(array $data)
    {
        $this->title = $data['title'];
        $this->subtitle = $data['subtitle'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->cta = isset($data['cta']) ? new CtaDTO($data['cta']) : null;
        $this->image = $data['image'] ?? null;
        $this->images = isset($data['images']) ? array_map(fn($image) => new ImageDTO($image), $data['images']) : null;
        $this->members = isset($data['members']) ? array_map(fn($member) => new MemberDTO($member), $data['members']) : null;
        $this->contact_details = isset($data['contact_details']) ? new ContactDetailsDTO($data['contact_details']) : null;
        $this->social_links = isset($data['social_links']) ? new SocialLinksDTO($data['social_links']) : null;
    }
}

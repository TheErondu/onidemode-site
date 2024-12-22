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
        $this->id = $data['id'];
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

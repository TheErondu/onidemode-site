<?php

namespace App\DTO;

class SettingsDTO
{
    public string $key;
    public string $value;
    public ?string $group;

    /**
     * Predefined default values for settings.
     */
    private static array $defaults = [
        'site_name' => 'Default Site Name',
        'seo_title' => 'Default SEO Title',
        'payment_gateway' => 'Paystack',
    ];

    public function __construct(string $key, ?string $value = null, ?string $group = null)
    {
        $this->key = $key;
        $this->value = $value ?? self::getDefault($key);
        $this->group = $group;
    }

    /**
     * Retrieve the default value for a key.
     */
    private static function getDefault(string $key): string
    {
        return self::$defaults[$key] ?? 'Undefined';
    }

    /**
     * Create a new SettingsDTO from an array.
     */
    public static function fromArray(array $data): self
    {
        return new self(
            $data['key'],
            $data['value'] ?? null,
            $data['group'] ?? null
        );
    }

    /**
     * Convert the DTO back to an array.
     */
    public function toArray(): array
    {
        return [
            'key' => $this->key,
            'value' => $this->value,
            'group' => $this->group,
        ];
    }
}

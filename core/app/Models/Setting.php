<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\DTO\SettingsDTO;

class Setting extends Model
{
    protected $fillable = ['key', 'value', 'group'];

    /**
     * Save or update a setting using a SettingsDTO.
     */
    public static function saveSetting(SettingsDTO $settingsDTO): Setting
    {
        return self::updateOrCreate(
            ['key' => $settingsDTO->key],
            $settingsDTO->toArray()
        );
    }

    /**
     * Retrieve a setting value by its key using the DTO to handle defaults.
     */
    public static function getValue(string $key): string
    {
        $setting = self::where('key', $key)->first();
        return $setting ? $setting->value : SettingsDTO::fromArray(['key' => $key])->value;
    }
}

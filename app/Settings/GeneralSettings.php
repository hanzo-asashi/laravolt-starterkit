<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $logo;
    public string $favicon;
    public string $darkLogo;
    public string $guestLogo;
    public string $guestBackground;


    public static function group(): string
    {
        return 'general-settings';
    }

}

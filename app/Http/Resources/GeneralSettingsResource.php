<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class GeneralSettingsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     */
    public function toArray($request): array | JsonSerializable | Arrayable
    {
        return [
            'logo' => $this->logo,
            'favicon' => $this->favicon,
            'dark_logo' => $this->dark_logo,
            'guest_logo' => $this->guest_logo,
            'guest_background' => $this->guest_background,
        ];
    }
}

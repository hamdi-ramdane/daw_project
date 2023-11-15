<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DoctorResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'doctorID' => $this->doctor_id,
            'userID' => $this->user_id,
            'specialty' => $this->specialty,
            'sessions' => $this->schedualed_sessions,
            'expYears' => $this->years_of_exp,
        ];
    }
}

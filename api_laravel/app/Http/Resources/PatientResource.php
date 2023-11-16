<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'patientID' => $this->patient_id,
            'userID' => $this->user_id,
            'addictionScore' => $this->addiction_score,
            'depressionScore' => $this->depression_score,
            'adhdScore' => $this->adhd_score,
            'insomniaScore' => $this->insomnia_score,
        ];
 
    }
}

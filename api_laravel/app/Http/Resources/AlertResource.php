<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AlertResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'alertID' => $this->alert_id,
            'patientID' => $this->patient_id,
            'date' => $this->alert_date,
            'type' => $this->alert_type,
        ];
    }
}

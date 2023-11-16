<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuizResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'quizID' => $this->quiz_id,
            'patientID' => $this->patient_id,
            'date' => $this->quiz_date,
            'score' => $this->quiz_score,
        ];
    }
}

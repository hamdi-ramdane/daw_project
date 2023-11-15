<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'messageID' => $this->message_id,
            'senderID' => $this->sender_id,
            'receiverID' => $this->receiver_id,
            'content' => $this->content,
            'date' => $this->message_date,
        ];
 
    }
}

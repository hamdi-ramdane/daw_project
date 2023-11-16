<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdminResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'adminID' => $this->admin_id,
            'userID' => $this->user_id,
            'role' => $this->admin_role,
            'perms' => $this->permissions,
        ];
 
    }
}

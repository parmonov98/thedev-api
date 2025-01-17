<?php

namespace App\Http\Resources;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'post_id' => $this->post_id,
            'replies' => static::collection($this->whenLoaded('replies')),
            'body' => $this->body,
            'token' => $this->remember_token
        ];
    }
}

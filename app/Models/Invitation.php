<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['email', 'invitation_token'])]
class Invitation extends Model
{
    /**
     * Generate a new invitation token.
     */
    public function generateInvitationToken()
    {
        $this->invitation_token = substr(md5(rand(0, 9) . $this->email . time()), 0, 32);
    }

    /**
     * Get Link
     */
    public function getLink(): string
    {
        return urldecode(route('register') . '?invitation_token=' . $this->invitation_token);
    }
}

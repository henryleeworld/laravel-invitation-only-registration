<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'email', 'invitation_token'
    ];

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

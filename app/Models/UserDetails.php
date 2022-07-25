<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    // determina il nome della tabella sovrascrivendo la convenzione del plurale
    protected $table = 'user_details';
}

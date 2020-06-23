<?php

namespace App\Models;
use Carbon\Carbon;

use App\Scopes\DateScopable;
use Illuminate\Database\Eloquent\Model;


class Message extends Model
{
    use DateScopable;
    protected $fillable = ['name', 'email', 'message'];
}

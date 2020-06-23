<?php 

namespace App\Scopes;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait DateScopable
{
    public function scopeOneMonthsOld(Builder $query)
    {
        $query->where('created_at', '<=', Carbon::parse('1  months ago'));
    }
} 
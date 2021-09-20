<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    // public function ideas()
    // {
    //     return $this->hasMany(Idea::class);
    // }

    // public static function getCount()
    // {
    //     return  Idea::query()
    //         ->selectRaw("count(*) as all_statuses")
    //         ->selectRaw("count(case when status_id = 1 ) as Open")
    //         ->selectRaw("count(case when status_id = 2 ) as Considering")
    //         ->selectRaw("count(case when status_id = 3 ) as in_progress")
    //         ->selectRaw("count(case when status_id = 4 ) as implenemented")
    //         ->selectRaw("count(case when status_id = 5 ) as closed")
    //         ->first()->toArray();
    // }

    // bro, this entire class is a bad idea, hhhh
}

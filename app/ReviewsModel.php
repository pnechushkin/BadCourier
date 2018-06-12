<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ReviewsModel extends Model
{
    protected $Reviews = [];

    public function GetReviews($quantity = 5)
    {
        $this->Reviews = DB::table('reviews_of_couriers')
            ->latest()
            ->limit($quantity)
            ->get();
        return $this->Reviews;
    }

}

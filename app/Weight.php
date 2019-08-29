<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Weight extends Model
{
    protected $fillable = [ 'weight' ];

    public function getLatestAttribute(){
        // retrieve the most recent weight from the db
        $latest_weight = DB::table('weights')->pluck('weight')->last();

        return $latest_weight;
    }

    public function getYesterdayAttribute(){
        // retrieve the second to last weight from the db
        $yesterday_weight = DB::table('weights')->latest()->skip(1)->take(1)->pluck('weight')->first();

        return $yesterday_weight;
    }

    public function getLastWeekAttribute(){
        // retrieve the weight from a week ago from the db
        $last_week_weight = DB::table('weights')->latest()->skip(7)->take(1)->pluck('weight')->first();

        return $last_week_weight;
    }

    public function getDayDifferenceAttribute(){
        // using the previously queried weights, calculate the weight change since yesterday
        $today_weight = Weight::find(1)->latest;
        $yesterday_weight = Weight::find(1)->yesterday;

        $day_weight_change = $today_weight - $yesterday_weight;

        return $day_weight_change;
    }

    public function getWeekDifferenceAttribute(){
        // using the previously queried weights, calculate the weight change since a week ago
        $last_week_weight = Weight::find(1)->last_week;
        $today_weight = Weight::find(1)->latest;

        $week_weight_change = $today_weight - $last_week_weight;

        return $week_weight_change;
    }
}

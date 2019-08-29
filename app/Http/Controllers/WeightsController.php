<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Weight;
use Illuminate\Http\Request;

class WeightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the necessary data from the Weight model, then return it to the view
        $today_weight = Weight::find(1)->latest;
        $yesterday_weight = Weight::find(1)->yesterday;
        $last_week_weight = Weight::find(1)->last_week;

        $change_since_yesterday = number_format(Weight::find(1)->day_difference, 1);
        $change_since_last_week = number_format(Weight::find(1)->week_difference, 1);

        return view('weights.index', 
                    ['today_weight'          => $today_weight, 
                    'yesterday_weight'       => $yesterday_weight, 
                    'last_week_weight'       => $last_week_weight, 
                    'change_since_yesterday' => $change_since_yesterday, 
                    'change_since_last_week' => $change_since_last_week]
                    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate and store the weight information
        $this->validate( $request, [
            'weight' => 'required|max:5',
        ]);

        Weight::create($request->all());
       
        return redirect('/weights'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function contact(){

        //return view('contact');
    
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Ball;
use App\Models\Bucket;
use Illuminate\Http\Request;

class BucketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bucketSizeInches = 100;
        $buckets = Bucket::all()->map->only('name', 'volume');
        $balls = Ball::all()->map->only('name', 'volume');
        
        $totalBallCount = 0;

        foreach ($balls as $ball) {
            $ballCount = $this->calculateBallCount($bucketSizeInches, $ball['size']);
            $totalBallCount += $ballCount;
            echo "The number of {$ball['color']} balls that can fit in the 100-inch bucket is: {$ballCount}<br>";
        }

        echo "The total number of balls that can fit in the 100-inch bucket is: {$totalBallCount}";
    }

    public function calculateBallCount($bucketSize, $ballSize)
    {
        // Convert sizes to the same unit of measurement
        $bucketRadius = $bucketSize / 2;
        $ballRadius = $ballSize / 2;

        // Calculate the volume of the bucket and the volume of a ball
        $bucketVolume = (4 / 3) * pi() * pow($bucketRadius, 3);
        $ballVolume = (4 / 3) * pi() * pow($ballRadius, 3);

        // Calculate the number of balls that can fit in the bucket
        $ballCount = floor($bucketVolume / $ballVolume);

        return $ballCount;
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
        //
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
}

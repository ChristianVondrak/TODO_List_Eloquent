<?php 
namespace App\Http\Controllers;
 
use App\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlightController extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validate the request...
 
        $flight = new Flight;
 
        $flight->name = $request->name;
 
        $flight->save();
    }
}


?>
<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Incident;
use App\Http\Resources\Incident as Incidentresource;
      
class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            $incidents = Incident::all();
            return Incidentresource::collection($incidents);
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
     //   $validated = $request->validated();
    

     $validation = Validator::make($request->all(),[ 
        'title' => 'required',
        'category' => 'required',
        'location *' => 'required',
        'incidentDate' =>'required',
    ]);

    if($validation->fails()){
     return $validation->errors();
    } else{
        $incident = new Incident;

        $incident->title = $request->title;
        $incident->comments = $request->comments;
        $incident->latitude = $request->location['latitude'];
        $incident->longitude = $request->location['longitude'];
        $incident->category_id = $request->category;
        $incidentDate= strtotime($request->incidentDate);
        $incident->incident_date = date('Y-m-d H:i:s', $incidentDate);
        if($request->createDate == ""){
            $incident->create_date = date("Y-m-d h:i:s");
        }else{
            $createDate= strtotime($request->createDate);
            $incident->create_date = date('Y-m-d H:i:s', $createDate); 
        }
        if($request->modifyDate == ""){
            $incident->modify_date = date("Y-m-d h:i:s");
        }else{
            $modify_date= strtotime($request->createDate);
            $incident->modify_date = date('Y-m-d H:i:s', $modify_date); 
        }
        
     
      //  $incident->title = $request->people;
        

        $incident->save();
        foreach ($request->people as $people) {
            $peopleArray[] = ['name' => $people['name'], 'type' => $people['type']];
            }
            $incident->people()->createMany($peopleArray);

    }
        
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

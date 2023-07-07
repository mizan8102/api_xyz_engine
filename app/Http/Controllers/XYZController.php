<?php

namespace App\Http\Controllers;

use App\Http\Requests\XYZRequest;
use App\Http\Resources\DataResource;
use App\Models\Stepone;
use App\Models\Steptwo;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;

class XYZController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DataResource::collection(Steptwo::with('stepone')->orderByDesc('id')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(XYZRequest $request)
    {
        $data=$request->validated();
        try{
            DB::beginTransaction();
            $com = Stepone::create($data['first_step']);
            $data['second_step']['stepone_id'] = $com->id;
            $stepTwo = Steptwo::create($data['second_step']);
            DB::commit();
            return response()->json([
                "step_one" => $com,
                "step_two" => $stepTwo
            ],200);
        }catch(Exception $ex){
            DB::rollBack();
            return response()->json([
                "error" => $ex->getMessage()
            ],400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

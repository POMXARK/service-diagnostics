<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreObj1AiRequest;
use App\Http\Requests\UpdateObj1AiRequest;
use App\Models\Obj1Ai;
use Domain\Interfaces\ObjAIInterface;
use Illuminate\Http\JsonResponse;

class Obj1AiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreObj1AiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreObj1AiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obj1Ai  $obj1Ai
     * @return \Illuminate\Http\Response
     */
    public function show(Obj1Ai $obj1Ai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obj1Ai  $obj1Ai
     * @return \Illuminate\Http\Response
     */
    public function edit(Obj1Ai $obj1Ai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateObj1AiRequest  $request
     * @param  \App\Models\Obj1Ai  $obj1Ai
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateObj1AiRequest $request, Obj1Ai $obj1Ai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obj1Ai  $obj1Ai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obj1Ai $obj1Ai)
    {
        //
    }

    /*
     *  квитировать
     */
    public function confirm(Obj1Ai $obj1Ai, ObjAIInterface $domainObj1Ai): JsonResponse
    {
        Obj1Ai::where('id', $obj1Ai->id)
            ->update(['sts' => $domainObj1Ai->changeSts($obj1Ai->sts)]);
        return response()->json(['status' => 'true'], 200);
    }
}

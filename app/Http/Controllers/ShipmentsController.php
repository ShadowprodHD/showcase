<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShipmentsRequest;
use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Shipment::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ShipmentsRequest $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shipment = new Shipment();

        $shipment->customer_id = $request->get('customer');
        $shipment->referentie_nummer = $request->get('referentie_nummer');
        $shipment->loading_adres = $request->get('loading_adres');
        $shipment->loading_city = $request->get('loading_city');

        if($shipment->save()) {
            return response($shipment);
        }

        return false;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $shipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Shipment $shipment)
    {
        return response($shipment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $shipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shipment $shipment)
    {
        $shipment->customer_id = $request->get('customer');
        $shipment->referentie_nummer = $request->get('referentie_nummer');
        $shipment->loading_adres = $request->get('loading_adres');
        $shipment->loading_city = $request->get('loading_city');

        if($shipment->save()) {
            return response($shipment);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Shipment $shipment)
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

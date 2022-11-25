<?php

namespace App\Http\Controllers;

use App\Models\InvoiceContent;
use App\Http\Requests\StoreInvoiceContentRequest;
use App\Http\Requests\UpdateInvoiceContentRequest;

class InvoiceContentController extends Controller
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
     * @param  \App\Http\Requests\StoreInvoiceContentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceContentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvoiceContent  $invoiceContent
     * @return \Illuminate\Http\Response
     */
    public function show(InvoiceContent $invoiceContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvoiceContent  $invoiceContent
     * @return \Illuminate\Http\Response
     */
    public function edit(InvoiceContent $invoiceContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceContentRequest  $request
     * @param  \App\Models\InvoiceContent  $invoiceContent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceContentRequest $request, InvoiceContent $invoiceContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvoiceContent  $invoiceContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvoiceContent $invoiceContent)
    {
        //
    }
}

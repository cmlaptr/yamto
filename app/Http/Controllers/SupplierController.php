<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Supplier::all();
        return view('product.supplier')->with([
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'spl_name' => 'required',
            'spl_contact' => 'required',
            'spl_address' => 'required',
        ]);
        if ($validator->fails()) {
            toast()->error('Gagal', 'Gagal Menambah Data Supplier')->position('top');
            return redirect()->back();
        } else {
            toast()->success('Berhasil', 'Berhasil Menambah Data Supplier')->position('top');
        }
        $data = new Supplier();

        $data->spl_name = $request->spl_name;
        $data->spl_contact = $request->spl_contact;
        $data->spl_address = $request->spl_address;

        $data->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'spl_name' => 'required',
            'spl_contact' => 'required',
            'spl_address' => 'required',
        ]);
        if ($validator->fails()) {
            toast()->error('Gagal', 'Gagal Menambah Supplier')->position('top');
            return redirect()->back();
        } else {
            toast()->success('Berhasil', 'Berhasil Menambah Supplier')->position('top');
        }
        $data = Supplier::where('id', $id)->firstOrFail();

        $data->spl_name = $request->spl_name;
        $data->spl_contact = $request->spl_contact;
        $data->spl_address = $request->spl_address;
        $data->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Supplier::find($id);
        $data->delete();

        return redirect()->back();
    }
}

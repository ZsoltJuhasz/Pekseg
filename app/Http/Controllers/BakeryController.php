<?php

namespace App\Http\Controllers;

use App\Models\Bakery;
use Illuminate\Http\Request;

class BakeryController extends Controller
{
    public function index()
    {
        $bakeries = Bakery::all();

        return view("/list_bakeries", [
            "bakeries" => $bakeries
        ]);
    }

    public function create()
    {
        return view("new_bakery");
    }

    public function store(Request $request)
    {
        Bakery::create($request->all());

        return redirect("/");
    }

    public function edit($id)
    {
        $bakery = Bakery::find($id);

        return view("/edit_bakery", [
            "bakery" => $bakery
        ]);
    }

    public function update(Request $request)
    {
        $bakery = Bakery::find($request->id);

        $bakery->update($request->all());

        return redirect("/");
    }

    public function search(Request $request)
    {
        $bakeries = Bakery::where("type", $request->type)->get();

        return view("show_bakery", [
            "bakeries" => $bakeries
        ]);
    }

    public function destroy($id)
    {
        Bakery::destroy($id);

        return redirect("/");
    }
}

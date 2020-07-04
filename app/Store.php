<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name', 'phone', 'address', 'position',
    ];
    
    public function save(Request $request)
    {
        $store = new Store();
        $store->name = $request->input('name');
        $store->phone = $request->input('phone');
        $store->address = $request->input('address');
        $store->position = $request->input('position');
        $store->save();

        return '200';
        # code...
    }

    public function showAllStores()
    {
        $allStores = Store::all();
        return $allStores;
        # code...
    }
    public function show($storeId)
    {
        return Store::findOrFail($storeId);
    }

    public function showVips()
    {
        return Store::where('vip',true)->get();
    }

    public function showNewStores()
    {
        return  store::orderBy('created_at', 'desc')
        ->take(10)
        ->get();
    }

}

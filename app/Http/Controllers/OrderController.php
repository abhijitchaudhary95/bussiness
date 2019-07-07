<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $menu=null;
    //
    public function __construct(menu $menu)
    {
        $this->menu = $menu;
    }

   /* public function page()
    {

        $menu = App\Models\Menu::get();
        foreach ($menu as $menu) {
            $menu->name = $menu->name;
        }

        return view('order');
    }
*/
    public function getOrder(){

        return view('admin.pages.order');
        return view('admin.pages.order')->with('order',$order_data);
    }

    public function showOrder(){

        return view('admin.pages.order-add');
    }

    public function submitorder(Request $request){
        $rules = $this->order->getOrderAddRules();
        $request->validate($rules);
        $data = $request->all();
        $this->order->fill($data);
        $success = $this->order->save();
        if($success){
            $request->session()->flash('success','Menu added successfully.');
        }else{
            $request->session()->flash('error','Sorry! There is problem while adding menu.');
        }
        return redirect()->route('order-list');

    }
}

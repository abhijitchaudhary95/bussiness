<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

class MenuController extends Controller
{
    //
    protected $menu=null;

    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }

    public function getMenu(){
        $menu_data = $this->menu->get();
        return view('admin.pages.menu')->with('menu',$menu_data);
    }

    public function showMenu(){

            $Orders = Menu::all(); // get all teams
            return view('order-add', [ 'Orders' => $Orders]);

        return view('admin.pages.menu-add');
    }



    public function submitMenu(Request $request){
        $rules = $this->menu->getMenuAddRules();
        $request->validate($rules);
        $data = $request->all();
        $this->menu->fill($data);
        $success = $this->menu->save();
        if($success){
            $request->session()->flash('success','Menu added successfully.');
        }else{
            $request->session()->flash('error','Sorry! There is problem while adding menu.');
        }
        return redirect()->route('menu-list');
        
    }
}

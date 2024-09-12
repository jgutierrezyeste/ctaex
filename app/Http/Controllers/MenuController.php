<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    

    public function menus()
    {
       /* $archivo=fopen("menus.txt","w+");
        $menus= new Menu();
        $data= $menus->optionsMenu();
        $menuAll =[];
        foreach ($data as $line)
        {
            $item = [ array_merge($line, ['submenu' => $menus->getChildren($data, $line) ]) ];
            $menuAll = array_merge($menuAll, $item);
        }
        //return $menus->menuAll = $menuAll;
        return view ('welcome_menu', compact('menus'));*/
        $menus=Menu::all();
        return view ('welcome_menu', compact('menus'));

    }
    
}

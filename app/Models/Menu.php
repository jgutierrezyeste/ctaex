<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function getChildren($data,$line)
    {
        $children =[];
        foreach ($data as $line1)
        {
            if ($line['id']==$line1['parent']){
                $children =array_merge($children,[array_merge($line1,['submenu'=>$this->getChildren($data,$line1)])]);
            }
        }
        return $children;
    }

    public function optionsMenu()
    {
        return $this->where ('enabled',1)
        ->orderby('parent')
        ->orderby('order')
        ->orderby('name')
        ->get()
        ->toArray();
    }

    /*public function menus()
    {
        $archivo=fopen("menus.txt","w+");
        $menus= new Menu();
        $data= $menus->optionsMenu();
        $menuAll =[];
        foreach ($data as $line)
        {
            $item = [ array_merge($line, ['submenu' => $menus->getChildren($data, $line) ]) ];
            $menuAll = array_merge($menuAll, $item);
        }
        $menus->menuAll = $menuAll;
        fwrite($archivo,$menus);
        return view ('welcome_menu', compact('menus'));
    }*/
    public static function menus()
    {
        $menus= new Menu();
        $data= $menus->optionsMenu();
        $menuAll =[];
        foreach ($data as $line)
        {
            $item = [ array_merge($line, ['submenu' => $menus->getChildren($data, $line) ]) ];
            $menuAll = array_merge($menuAll, $item);
        }
        return $menus->menuAll = $menuAll;
    }
}

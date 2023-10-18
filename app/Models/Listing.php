<?php
namespace App\Models;
class listing {
    public static function all(){
        return [
            [
    
                'id' => 1,
                'title' => 'first listing',
                'discreption' => 'routes are loaded by the RouteServiceProvider and all of them will',
                
            ],
            [
    
                'id' => 2,
                'title' => 'second listing',
                'discreption' => 'routes are loaded by the RouteServiceProvider and all of them will',
            ],
            
        ];
    }


    public static function find($id){

        $listings = self::all();
        foreach ($listings as $listing) {
           if ($listing['id'] == $id){
            return $listing;
           }
        }


    }
}
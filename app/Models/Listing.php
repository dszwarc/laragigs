<?php
    namespace App\Models;


    //Create class for Listing object
    class Listing {
        //when running all function, return all listings as object. in this example we have the listings hard-coded
        public static function all(){
            return [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, nesciunt?'
                ],
                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, nesciunt?'
                ]
                ];
        }

        // use id from GET Route in order to find a specific listing with that id
        public static function find($id) {
            $listings = self::all();

            foreach($listings as $listing){
                if($listing['id']==$id){
                    return $listing;
                }
            }
        }
    }
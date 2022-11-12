<?php

namespace App\GraphQL\Mutations\Admin\Food;

use App\Models\food;

final class Deletefood
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {


        $food=food::find($args["id"]);
        // Cache::pull("foods");
        // Cache::pull("food_".$food->id);
        unlink(public_path("food/".$food->getRawOriginal("thumbnail")));
        unlink(public_path("food/".$food->getRawOriginal("meta_logo")));
        foreach($food->images as $image){

            unlink(public_path("food/".$image->getRawOriginal("url")));

        }
        $food->message=trans("admin.the food was deleted successfully");
        return $food;


    }
}

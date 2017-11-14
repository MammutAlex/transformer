<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 14.11.17
 * Time: 8:29.
 */

namespace MammutAlex\Transformer\Test\Transformer;

use MammutAlex\Transformer\Transformer;

class DataTransformer extends Transformer
{
    /**
     * Transform model item too show in restAPI.
     *
     * @param $app
     *
     * @return array
     */
    public static function transform($app)
    {
        return[
            'name' => $app['first_name'].' '.$app['last_name'],
            'truck'=> [
                'width' => $app['truck_width'],
                'height'=> $app['truck_height'],
                'length'=> $app['truck_length'],
                'volume'=> $app['truck_width'] * $app['truck_height'] * $app['truck_length'],
            ],
        ];
    }
}

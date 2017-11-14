<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 13.11.17
 * Time: 18:58
 */

namespace MammutAlex\Transformer;

interface TransformerInterface
{
    /**
     * Transform model item too show in restAPI
     *
     * @param $app
     *
     * @return array
     */
    public static function transform($app);

    /**
     * Transform for show many items in restAPI
     *
     * @param $items
     *
     * @return array
     */
    public static function transformCollection($items);

    /**
     * Transform model item for many show
     *
     * @param $app
     *
     * @return array
     */
    public static function transformList($app);
}
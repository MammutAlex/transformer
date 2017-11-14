<?php

namespace MammutAlex\Transformer;

abstract class Transformer implements TransformerInterface
{
    /**
     * Add all data to restAPI.
     *
     * @param array $items
     *
     * @return array
     */
    public static function transformCollection($items)
    {
        $data = [];
        foreach ($items as $item) {
            $data[] = static::transformList($item);
        }

        return $data;
    }

    /**
     * Add item to show inst in restAPI.
     *
     * @param $app
     *
     * @return array
     */
    public static function transformList($app)
    {
        return static::transform($app);
    }
}

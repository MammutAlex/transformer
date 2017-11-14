<?php

namespace MammutAlex\Transformer\Test;

use MammutAlex\Transformer\Test\Transformer\DataTransformer;
use PHPUnit\Framework\TestCase;


class TransformerTest extends TestCase
{

    public function testTransformCollection()
    {
        $inputArray=$this->modelDataArray();
        $transformArray = DataTransformer::transformCollection([$inputArray]);
        $promiseArray =[DataTransformer::transform($inputArray)];
        $this->assertSame($transformArray, $promiseArray);
    }

    private function modelDataArray()
    {
        return [
            'first_name' => 'Alex',
            'last_name' => 'Kovalchuk',
            'truck_width' => 100,
            'truck_height' => 100,
            'truck_length' => 100,
        ];
    }
}
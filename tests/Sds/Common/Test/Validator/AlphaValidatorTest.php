<?php

namespace Sds\Common\Test\Validator;

use Sds\Common\Validator\AlphaValidator;

class AlphaValidatorTest extends \PHPUnit_Framework_TestCase {

    public function testValidator(){

        $validator = new AlphaValidator;

        $testArray = [
            [true, 'abc'],
            [true, 'ABC'],
            [false, 'a1'],
            [false, 'a&']
        ];

        foreach ($testArray as $item) {
            if ($item[0]){
                $this->assertTrue($validator->isValid($item[1]));
            } else {
                $this->assertFalse($validator->isValid($item[1]));
            }
        }
    }
}

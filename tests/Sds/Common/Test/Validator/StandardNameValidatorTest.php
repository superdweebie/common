<?php

namespace Sds\Common\Test\Validator;

use Sds\Common\Validator\StandardNameValidator;

class StandardNameValidatorTest extends \PHPUnit_Framework_TestCase {

    public function testValidator(){

        $validator = new StandardNameValidator;

        $testArray = [
            [true, 'username'],
            [true, 'username1'],
            [true, '1username'],
            [true, 'Username'],
            [true, 'USERNAME1'],
            [false, '1'],
            [false, 'u'],
            [false, '1234567890123456789012345678901234567890123456'],
            [false, 'username%'],
            [false, 'username@'],
            [false, 'username/']
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

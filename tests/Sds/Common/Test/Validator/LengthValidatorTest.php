<?php

namespace Sds\Common\Test\Validator;

use Sds\Common\Validator\LengthValidator;

class LengthValidatorTest extends \PHPUnit_Framework_TestCase {

    public function testValidator(){

        $validator = new LengthValidator(1, 5);

        $testArray = [
            [true, '1'],
            [true, '12345'],
            [false, ''],
            [false, '123456']
        ];

        foreach ($testArray as $item) {
            if ($item[0]){
                $this->assertTrue($validator->isValid($item[1])->getResult());
            } else {
                $this->assertFalse($validator->isValid($item[1])->getResult());
            }
        }
    }
}

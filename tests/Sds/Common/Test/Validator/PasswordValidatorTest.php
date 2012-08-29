<?php

namespace Sds\Common\Test\Validator;

use Sds\Common\Validator\PasswordValidator;

class PasswordValidatorTest extends \PHPUnit_Framework_TestCase {

    public function testValidator(){

        $validator = new PasswordValidator;

        $testArray = [
            [true, 'password1'],
            [true, 'password1@'],
            [false, '1abcd'],
            [false, '123456789'],
            [false, 'password'],
            [false, '123456789123456789123456789123456789password']
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

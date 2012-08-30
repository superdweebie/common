<?php

namespace Sds\Common\Test\Validator;

use Sds\Common\Validator\ValidatorGroup;
use Sds\Common\Validator\LengthValidator;
use Sds\Common\Validator\AlphaValidator;

class ValidatorGroupTest extends \PHPUnit_Framework_TestCase {

    public function testValidator(){

        $validator = new ValidatorGroup([
            new LengthValidator(1, 5),
            new AlphaValidator()
        ]);

        $testArray = [
            [true, 'abc'],
            [true, 'ABC'],
            [false, 'abc1'],
            [false, 'abcdefg']
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

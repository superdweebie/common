<?php

namespace Sds\Common\Test\Validator;

use Sds\Common\Validator\IdentifierArrayValidator;

class IdentifierArrayValidatorTest extends \PHPUnit_Framework_TestCase {

    public function testValidator(){

        $validator = new IdentifierArrayValidator;

        $testArray = [
            [true, ['username', 'username1', '1username']],
            [false, ['username1', 'u']]
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

<?php

namespace Sds\Common\Test\Validator;

use Sds\Common\Validator\StandardNameArrayValidator;

class StandardNameArrayValidatorTest extends \PHPUnit_Framework_TestCase {

    public function testValidator(){

        $validator = new StandardNameArrayValidator;

        $testArray = [
            [true, ['username', 'username1', '1username']],
            [false, ['username1', 'u']]
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

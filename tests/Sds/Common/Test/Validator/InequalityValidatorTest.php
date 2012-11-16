<?php

namespace Sds\Common\Test\Validator;

use Sds\Common\Validator\InequalityValidator;

class InequalityValidatorTest extends \PHPUnit_Framework_TestCase {

    public function testLessThan(){

        $validator = new InequalityValidator('>', 10);

        $testArray = [
            [true, 9],
            [true, '9'],
            [false, 10],
            [false, 10.01]
        ];

        foreach ($testArray as $item) {
            if ($item[0]){
                $this->assertTrue($validator->isValid($item[1])->getResult());
            } else {
                $this->assertFalse($validator->isValid($item[1])->getResult());
            }
        }
    }

    public function testLessOrEqualThan(){

        $validator = new InequalityValidator('>=', 10);

        $testArray = [
            [true, 9],
            [true, '9'],
            [true, 10],
            [false, 10.01]
        ];

        foreach ($testArray as $item) {
            if ($item[0]){
                $this->assertTrue($validator->isValid($item[1])->getResult());
            } else {
                $this->assertFalse($validator->isValid($item[1])->getResult());
            }
        }
    }

    public function testGreaterThan(){

        $validator = new InequalityValidator('<', 10);

        $testArray = [
            [true, 11],
            [true, '11'],
            [false, 10],
            [false, 9.9]
        ];

        foreach ($testArray as $item) {
            if ($item[0]){
                $this->assertTrue($validator->isValid($item[1])->getResult());
            } else {
                $this->assertFalse($validator->isValid($item[1])->getResult());
            }
        }
    }

    public function testGreaterOrEqualThan(){

        $validator = new InequalityValidator('<=', 10);

        $testArray = [
            [true, 11],
            [true, '11'],
            [true, 10],
            [false, 9.9]
        ];

        foreach ($testArray as $item) {
            if ($item[0]){
                $this->assertTrue($validator->isValid($item[1])->getResult());
            } else {
                $this->assertFalse($validator->isValid($item[1])->getResult());
            }
        }
    }

    public function testNotEqual(){

        $validator = new InequalityValidator('!=', 10);

        $testArray = [
            [true, 11],
            [true, '11'],
            [false, 10],
            [true, 9.9]
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

<?php

namespace Sds\Common\Test\Validator;

use Sds\Common\Validator\ValidatorFactory;

class ValidatorFactoryTest extends \PHPUnit_Framework_TestCase {

    protected $class = 'Sds\Common\Validator\LengthValidator';
    
    protected $options = [
        'min' => 2,
        'max' => 2
    ];
    
    public function testSingleClassArg(){
        $validator = ValidatorFactory::create($this->class);
        $this->assertInstanceOf($this->class, $validator);        
    }
    
    public function testClassAndOptionsArg(){
        $validator = ValidatorFactory::create($this->class, $this->options);
        $this->assertInstanceOf($this->class, $validator);        
        $this->assertTrue($validator->isValid('12'));
        $this->assertFalse($validator->isValid('1'));
        $this->assertFalse($validator->isValid('123'));        
    }
    
    public function testSingleArrayArg(){
        $validator = ValidatorFactory::create(['class' => $this->class, 'options' => $this->options]);
        $this->assertInstanceOf($this->class, $validator);        
        $this->assertTrue($validator->isValid('12'));
        $this->assertFalse($validator->isValid('1'));
        $this->assertFalse($validator->isValid('123'));        
    }
    
    public function testMultipleArrayArg(){
        $validator = ValidatorFactory::create([
            ['class' => $this->class, 'options' => $this->options],
            ['class' => $this->class, 'options' => $this->options]
        ]);
        $this->assertInstanceOf('Sds\Common\Validator\ValidatorGroup', $validator);        
        $this->assertTrue($validator->isValid('12'));
        $this->assertFalse($validator->isValid('1'));
        $this->assertFalse($validator->isValid('123'));        
    }    
}

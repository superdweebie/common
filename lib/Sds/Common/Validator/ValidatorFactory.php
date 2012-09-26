<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Validator;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class ValidatorFactory
{

    public static function createGroup($validatorDefinitions){

        $validators = [];

        foreach ($validatorDefinitions as $key=>$value){
            if ($value instanceof AbstractValidator){
                $validators[] = $value;
            } else {
                $validators[] = self::create($key, $value);
            }
        }

        return new ValidatorGroup($validators);
    }

    public static function create($arg1, $arg2 = null){

        if (is_string($arg1)){
            $class = $arg1;
            $options = $arg2;
        } else {
            $class = $arg1['class'];
            if (isset($arg1['options'])){
                $options = $arg1['options'];
            }
        }

        $reflection = new \ReflectionClass($class);
        if (isset($options)){
            $validator = $reflection->newInstanceArgs($options);
        } else {
            $validator = $reflection->newInstanceArgs();
        }

        return $validator;
    }
}

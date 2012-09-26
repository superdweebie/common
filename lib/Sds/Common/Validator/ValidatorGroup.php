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
class ValidatorGroup extends AbstractValidator
{

    protected $validators = [];

    public function __construct($validators = []){
        $this->validators = $validators;
    }

    public function isValid($value){

        $this->messages = [];

        $result = true;

        foreach($this->validators as $validator){
            if ($result && method_exists($validator, 'getSkipOnPass') && $validator->getSkipOnPass()){
                continue;
            }
            if (! $result && method_exists($validator, 'getSkipOnFail') && $validator->getSkipOnFail()){
                continue;
            }
            if ( ! $validator->isValid($value)){
                $result = false;
                $this->messages = array_merge($this->messages, $validator->getMessages());
                if (method_exists($validator, 'getHaltOnFail') && $validator->getHaltOnFail()){
                    return $result;
                }
            }
            if (method_exists($validator, 'getHaltOnPass') && $validator->getHaltOnPass()){
                return $result;
            }
        }

        return $result;
    }
}

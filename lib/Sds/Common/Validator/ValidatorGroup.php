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
            if ($validator->getSkipOnPass() && $result){
                continue;
            }
            if ($validator->getSkipOnFail() && ! $result){
                continue;
            }
            if ( ! $validator->isValid($value)){
                $result = false;
                $this->messages = array_merge($this->messages, $validator->getMessages());
                if ($validator->getHaltOnFail()){
                    return $result;
                }
            }
            if ($validator->getHaltOnPass()){
                return $result;
            }
        }

        return $result;
    }
}

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
class AlphaValidator extends AbstractValidator
{

    protected $regEx = '/^[a-zA-Z]+$/';

    public function isValid($value){

        $this->messages = [];

        $result = true;

        if ( ! preg_match($this->regEx, $value)){
            $result = false;
            $this->messages[] = 'Must contain only the characters a-z, or A-Z.';
        }
        
        return $result;
    }
}

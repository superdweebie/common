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
class CurrencyValidator extends AbstractValidator
{

    public function isValid($value){

        $this->messages = [];

        $result = true;

        $regEx = '/^\d+\.?\d{0,2}$/';

        if ( ! preg_match($regEx, $value)){
            $result = false;
            $this->messages[] = 'Must be currency format.';
        }

        return $result;
    }
}

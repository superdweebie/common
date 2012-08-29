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
class PasswordValidator extends AbstractValidator
{

    protected $lengthRegEx = '/^.{6,40}$/';

    protected $containAlphaRegEx = '/[a-zA-Z]/';

    protected $containNumRegEx ='/[0-9]/';

    public function isValid($value){

        $this->messages = [];

        $result = true;

        if ( ! preg_match($this->lengthRegEx, $value)){
            $result = false;
            $this->messages[] = 'Must be between 6 and 40 characters long.';
        }

        if ( ! preg_match($this->containAlphaRegEx, $value)){
            $result = false;
            $this->messages[] = 'Must contain at least one alpha character.';
        }

        if ( ! preg_match($this->containNumRegEx, $value)){
            $result = false;
            $this->messages[] = 'Must contain at least one numeric character.';
        }

        return $result;
    }
}

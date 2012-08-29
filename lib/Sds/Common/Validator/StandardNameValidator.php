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
class StandardNameValidator extends AbstractValidator
{

    protected $lengthRegEx = '/^.{3,40}$/';

    protected $charRegEx = '/^[a-zA-Z0-9_-]+$/';

    public function isValid($value){

        $this->messages = [];

        $result = true;

        if ( ! preg_match($this->lengthRegEx, $value)){
            $result = false;
            $this->messages[] = 'Must be between 3 and 40 characters long.';
        }
        if ( ! preg_match($this->charRegEx, $value)){
            $result = false;
            $this->messages[] = 'Must contain only the characters a-z, A-Z, 0-9, _, or -.';
        }

        return $result;
    }
}

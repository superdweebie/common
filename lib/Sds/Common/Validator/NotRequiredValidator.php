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
class NotRequiredValidator extends AbstractValidator
{

    public function isValid($value){

        $this->messages = [];

        $result = true;
        $this->haltOnPass = false;

        if ( !isset($value) || $value == ''){
            $this->haltOnPass = true;
        }

        return $result;
    }
}

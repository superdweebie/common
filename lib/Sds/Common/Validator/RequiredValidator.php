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
class RequiredValidator extends AbstractValidator
{

    protected $haltOnFail = true;

    public function isValid($value){

        $messages = [];

        $result = true;

        if ( !isset($value) || $value == ''){
            $result = false;
            $messages[] = 'This value is required.';
        }

        return new ValidatorResult($result, $messages);
    }
}

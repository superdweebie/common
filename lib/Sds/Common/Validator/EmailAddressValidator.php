<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Validator;

use Zend\Validator\EmailAddress;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class EmailAddressValidator extends AbstractValidator
{

    protected $lengthRegEx = '^.{6,40}$/';

    protected $containAlphaRegEx = '[a-zA-Z]';

    protected $containNumRegEx ='[0-9]';

    public function isValid($value){

        $this->messages = [];

        $result = true;

        $validator = new EmailAddress();
        if ( ! $validator->isValid($value) ){
            $result = false;
            $this->messages[] = 'Must be a valid email address';
        }

        return $result;
    }
}
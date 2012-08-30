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
class IdentifierArrayValidator extends AbstractValidator
{

    public function isValid($value)
    {
        $this->messages = [];

        $validator = new IdentifierValidator();
        $result = true;

        foreach ($value as $name) {
            if (!$validator->isValid($name)) {
                $result = false;
                foreach ($validator->getMessages() as $message){
                    $this->messages[] = $name . ' not valid. ' . $message;
                }
            }
        }

        return $result;
    }
}

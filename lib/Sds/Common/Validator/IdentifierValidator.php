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
class IdentifierValidator extends ValidatorGroup
{

    public function __construct(){
        $this->validators = [
            new LengthValidator(3, 40),
            new IdentifierCharsValidator()
        ];
    }
}

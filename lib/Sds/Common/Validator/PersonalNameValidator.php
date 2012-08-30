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
class PersonalNameValidator extends ValidatorGroup
{

    public function __construct(){
        $this->validators = [
            new LengthValidator(1, 50),
            new AlphaValidator()
        ];
    }
}

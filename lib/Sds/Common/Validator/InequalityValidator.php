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
class InequalityValidator extends AbstractValidator
{

    protected $operator;
    
    protected $compareValue;
    
    public function __construct($operator, $compareValue) {
        $this->operator = (string) $operator;
        $this->compareValue = (float) $compareValue;
    }

    public function isValid($value){

        $this->messages = [];

        $result = true;

        switch ($this->operator){
            case '>':
                if ( ! ($this->compareValue > $value)){
                    $result = false;
                    $this->messages[] = 'Value must be less than ' . $this->compareValue;
                }                
                break;
            case '>=':
                if ( ! ($this->compareValue >= $value)){
                    $result = false;
                    $this->messages[] = 'Value must be less than or equal to ' . $this->compareValue;
                }                  
                break;
            case '<':
                if ( ! ($this->compareValue < $value)){
                    $result = false;
                    $this->messages[] = 'Value must be greater than ' . $this->compareValue;
                }                  
                break;
            case '<=':
                if ( ! ($this->compareValue <= $value)){
                    $result = false;
                    $this->messages[] = 'Value must be greater than or equal to ' . $this->compareValue;
                }                  
                break;
            case '!=';
                if ( ! ($this->compareValue != $value)){
                    $result = false;
                    $this->messages[] = 'Value must not be equal to ' . $this->compareValue;
                }                  
                break;
        }
        
        return $result;
    }
}

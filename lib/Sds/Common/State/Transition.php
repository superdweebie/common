<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\State;

/**
 * Implementation of Sds\Common\Workflow\TransitionInterface
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class Transition implements TransitionInterface
{

    const arrow = '->';

    /**
     *
     * @var string
     */
    protected $from;

    /**
     *
     * @var string
     */
    protected $to;

    public static function fromString($string){
        list($from, $to) = explode(self::arrow, $string);
        return new static($from, $to);
    }

    public function __construct($from, $to){
        $this->from = (string) $from;
        $this->to = (string) $to;
    }

    public function getFrom() {
        return $this->from;
    }

    public function getTo() {
        return $this->to;
    }

    public function getAction() {
        return $this->from . self::arrow . $this->to;
    }
}

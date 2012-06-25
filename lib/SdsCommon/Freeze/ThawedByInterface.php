<?php
/**
 * @link       http://superdweebie.com
 * @package    Sds
 * @license    MIT
 */
namespace SdsCommon\Freeze;

/**
 * Interface to add thawed by stamp to object
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface ThawedByInterface{

    /**
     * The username who thawed
     *
     * @param string $username
     */
    public function setThawedBy($username);

    /**
     * Return the username of the user who thawed
     *
     * @param string
     */
    public function getThawedBy();
}

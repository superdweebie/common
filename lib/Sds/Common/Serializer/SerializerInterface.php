<?php
/**
 * @package    Sds
 * @license    MIT
 */
namespace Sds\Common\Serializer;

/**
 *
 * @since   1.0
 * @version $Revision$
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
interface SerializerInterface
{

    /**
     *
     * @param object $object
     * @return array
     */
    public function toArray($object);

    /**
     *
     * @param array $object
     * @return string
     */
    public function toJson($object);

    /**
     *
     * @param array $data
     * @param string $classNameKey
     * @param string $className
     * @return object
     */
    public function fromArray(array $data, $classNameKey = '_className', $className = null);

    /**
     *
     * @param string $data
     * @param string $classNameKey
     * @param string $className
     */
    public function fromJson($data, $classNameKey = '_className', $className = null);
}


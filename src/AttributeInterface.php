<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Attribute;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface AttributeInterface
{
    /**
     * Returns the id.
     * 
     * @return int The id
     */
    function getId();
    
    /**
     * Sets the code.
     *
     * @param string $code
     */
    function setCode($code);
    
    /**
     * Returns the code.
     *
     * @return string
     */
    function getCode();
    
    /**
     * Sets the storage.
     *
     * @param mixed $storage
     */
    function setStorage($storage);
    
    /**
     * Returns the storage.
     *
     * @return mixed
     */
    function getStorage();

    /**
     * Sets the name.
     *
     * @param string $name
     */
    function setName($name);
    
    /**
     * Returns the name.
     *
     * @return string
     */
    function getName();
}

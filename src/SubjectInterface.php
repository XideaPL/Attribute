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
interface SubjectInterface
{    
    /**
     * Sets the attributes values.
     *
     * @param array $values
     */
    function setAttributesValues($values);
    
    /**
     * Adds the attribute value.
     * 
     * @param ValueInterface $value
     */
    public function addAttributeValue(ValueInterface $value);
    
    /**
     * Removes the attribute value from a collection.
     * 
     * @param ValueInterface $value
     * 
     * @return boolean
     */
    public function removeAttributeValue(ValueInterface $value);
    
    /**
     * Returns whether subject has the attribute value.
     * 
     * @param ValueInterface $value
     *
     * @return boolean
     */
    public function hasAttributeValue(ValueInterface $value);    
    
    /**
     * Returns the attributes values.
     *
     * @return ValueInterface[]
     */
    function getAttributesValues();
}

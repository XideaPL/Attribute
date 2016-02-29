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
class Subject implements SubjectInterface
{
    /*
     * @var ValueInterface[]
     */
    protected $attributesValues;
    
    /**
     * {@inheritDoc}
     */
    public function setAttributesValues($values)
    {
        $this->attributesValues = $values;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getAttributesValues()
    {
        return $this->attributesValues;
    }
    
    /**
     * {@inheritDoc}
     */
    public function addAttributeValue(ValueInterface $value)
    {
        if(!in_array($value, $this->attributesValues)) {
            $this->attributesValues[] = $value;
        }
    }
    
    /**
     * {@inheritDoc}
     */
    public function removeAttributeValue(ValueInterface $value)
    {
        foreach($this->attributesValues as $key => $av) {
            if($av == $value) {
                unset($this->attributesValues[$key]);
                
                return true;
            }
        }
        
        return false;
    }
    
    /**
     * {@inheritDoc}
     */
    public function hasAttributeValue(ValueInterface $value)
    {
        if(!in_array($value, $this->attributesValues)) {
            return true;
        }
        
        return false;
    }
}

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
abstract class AbstractValue implements ValueInterface
{
    /*
     * @var int
     */
    protected $id;
    
    /*
     * @var SubjectInterface
     */
    protected $subject = null;
    
    /*
     * @var AttributeInterface
     */
    protected $attribute = null;
    
    /*
     * @var mixed
     */
    protected $value;
    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getSubject()
    {
        return $this->subject;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getAttribute()
    {
        return $this->attribute;
    }
    
    /**
     * {@inheritDoc}
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getValue()
    {
        return $this->value;
    }
}

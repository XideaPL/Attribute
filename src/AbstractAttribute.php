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
abstract class AbstractAttribute implements AttributeInterface
{
    /*
     * @var int
     */
    protected $id;
    
    /*
     * @var string
     */
    protected $code;
    
    /*
     * @var string
     */
    protected $storage = DataType::TEXT;
    
    /*
     * @var string
     */
    protected $name;
    
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
    public function setCode($code)
    {
        $this->code = $code;
        
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        return $this->code;
    }
    
    /**
     * {@inheritDoc}
     */
    public function setStorage($storage)
    {
        $this->storage = $storage;
        
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getStorage()
    {
        return $this->storage;
    }
    
    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->name;
    }
}

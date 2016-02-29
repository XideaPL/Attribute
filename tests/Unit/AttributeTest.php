<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license intypeion, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Attribute\Tests\Unit;

use Xidea\Attribute\Attribute;
use Xidea\Attribute\DataType;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class AttributeTest extends \PHPUnit_Framework_TestCase
{
    public function testSetAndGetCode()
    {
        $code = 'field_text';
        $attribute = $this->createAttribute($code, DataType::TEXT);
        $this->assertEquals($code, $attribute->getCode());

        $code = 'field_text2';
        $attribute->setCode($code);
        $this->assertEquals($code, $attribute->getCode());
    }
    
    public function testSetAndGetName()
    {
        $code = 'field_text';
        $attribute = $this->createAttribute($code, DataType::TEXT);
        $this->assertEquals($code, $attribute->getName());
        
        $name = 'Text field';
        $attribute = $this->createAttribute($code, DataType::TEXT, $name);
        $this->assertEquals($name, $attribute->getName());
        
        $name = 'Text field 2';
        $attribute->setName($name);
        $this->assertEquals($name, $attribute->getName());
    }
    
    public function testSetAndGetStorage()
    {
        $storage = DataType::TEXT;
        $attribute = $this->createAttribute('field_text', $storage);
        $this->assertEquals($storage, $attribute->getStorage());
        
        $storage = DataType::INTEGER;
        $attribute->setStorage($storage);
        $this->assertEquals($storage, $attribute->getStorage());
    }
    
    protected function createAttribute($code, $storage, $name = '')
    {
        return new Attribute($code, $storage, $name);
    }
}
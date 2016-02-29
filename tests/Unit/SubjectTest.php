<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license intypeion, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Attribute\Tests\Unit;

use Xidea\Attribute\Subject;
use Xidea\Attribute\Value;
use Xidea\Attribute\Attribute;
use Xidea\Attribute\DataType;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class SubjectTest extends \PHPUnit_Framework_TestCase
{
    public function testSetAndGetAttributesValues()
    {
        $subject = $this->createSubject();
        $attribute1 = new Attribute('field_text', DataType::TEXT);
        $attribute2 = new Attribute('field_integer', DataType::INTEGER);
        
        $subject->setAttributesValues([
            new Value($subject, $attribute1, 'Some text'),
            new Value($subject, $attribute2, 1000)
        ]);
        
        $this->assertEquals(2, count($subject->getAttributesValues()));
    }
    
    public function testAddAttributesValues()
    {
        $subject = $this->createSubject();
        $attribute1 = new Attribute('field_text', DataType::TEXT);
        $attribute2 = new Attribute('field_integer', DataType::INTEGER);
        
        $subject->setAttributesValues([
            new Value($subject, $attribute1, 'Some text'),
            new Value($subject, $attribute2, 1000)
        ]);
        
        $this->assertEquals(2, count($subject->getAttributesValues()));
        
        $attribute3 = new Attribute('field_datetime', DataType::DATETIME);
        $subject->addAttributeValue($value = new Value($subject, $attribute3, new \DateTime()));
        $subject->addAttributeValue($value);
        
        $this->assertEquals(3, count($subject->getAttributesValues()));
    }
    
    public function testRemoveAttributesValues()
    {
        $subject = $this->createSubject();
        $attribute1 = new Attribute('field_text', DataType::TEXT);
        $attribute2 = new Attribute('field_integer', DataType::INTEGER);
        
        $subject->setAttributesValues([
            new Value($subject, $attribute1, 'Some text'),
            $value = new Value($subject, $attribute2, 1000)
        ]);
        
        $this->assertEquals(2, count($subject->getAttributesValues()));
        
        $subject->removeAttributeValue($value);
        
        $this->assertEquals(1, count($subject->getAttributesValues()));
        
        $attribute3 = new Attribute('field_datetime', DataType::DATETIME);
        
        $this->assertFalse($subject->removeAttributeValue(new Value($subject, $attribute3, new \DateTime())));
        $this->assertEquals(1, count($subject->getAttributesValues()));
    }
    
    protected function createSubject()
    {
        return new Subject();
    }
}
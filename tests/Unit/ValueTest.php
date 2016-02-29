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
class ValueTest extends \PHPUnit_Framework_TestCase
{
    public function testGetSubject()
    {
        $subject = new Subject();
        $attribute = new Attribute('field_text', DataType::TEXT);
        
        $value = $this->createValue($subject, $attribute, 'Some text XYZ');
        
        $this->assertInstanceOf('\Xidea\Attribute\SubjectInterface', $value->getSubject());
    }
    
    public function testGetAttribute()
    {
        $subject = new Subject();
        $attribute = new Attribute('field_text', DataType::TEXT);
        
        $value = $this->createValue($subject, $attribute, 'Some text XYZ');
        
        $this->assertInstanceOf('\Xidea\Attribute\AttributeInterface', $value->getAttribute());
    }
    
    public function testGetValue()
    {
        $subject = new Subject();
        $attribute = new Attribute('field_text', DataType::TEXT);
        
        $value = $this->createValue($subject, $attribute, 'Some text XYZ');
        
        $this->assertEquals('Some text XYZ', $value->getValue());
    }
    
    protected function createValue(Subject $subject, Attribute $attribute, $value)
    {
        return new Value($subject, $attribute, $value);
    }
}
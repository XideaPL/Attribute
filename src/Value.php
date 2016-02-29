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
class Value extends AbstractValue
{
    /**
     * 
     * @param \Xidea\Attribute\SubjectInterface $subject
     * @param \Xidea\Attribute\AttributeInterface $attribute
     * @param mixed $value
     */
    public function __construct(SubjectInterface $subject, AttributeInterface $attribute, $value)
    {
        $this->subject = $subject;
        $this->attribute = $attribute;
        $this->value = $value;
    }
}

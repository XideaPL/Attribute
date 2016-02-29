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
interface ValueInterface
{
    /**
     * Returns the id.
     * 
     * @return string The id
     */
    function getId();
    
    /**
     * Returns the subject.
     *
     * @return SubjectInterface
     */
    public function getSubject();
    
    /**
     * Returns the attribute.
     *
     * @return AttributeInterface
     */
    public function getAttribute();

    /**
     * Sets the value.
     *
     * @param mixed $value
     */
    function setValue($value);
    
    /**
     * Returns the value.
     *
     * @return mixed
     */
    function getValue();
}

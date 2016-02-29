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
class Attribute extends AbstractAttribute
{
    public function __construct($code, $storage, $name = '')
    {
        $this->code = $code;
        $this->storage = $storage;
        
        if($name == '') {
            $this->name = $this->code;
        } else {
            $this->name = $name;
        }        
    }
}

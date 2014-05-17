<?php
/**
 * Copyright (C) 2012 code mitte GmbH - Zeughausstr. 28-38 - 50667 Cologne/Germany
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in the
 * Software without restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the
 * Software, and to permit persons to whom the Software is furnished to do so, subject
 * to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace CiscoSystems\SalesForceBundle\ForceToolkit\Form\Metadata;

use CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping\DescribeSObjectResult;

class Sobject
{
    /**
     * @var DescribeSObjectResult
     */
    private $describe;

    /**
     * @var array
     */
    private $fieldsByName = array();

    /**
     * @param DescribeSObjectResult $describe
     */
    public function __construct(DescribeSObjectResult $describe)
    {
        $this->describe = $describe;

        $this->prepare();
    }

    protected function prepare()
    {
        foreach($this->describe->getFields() AS $field)
        {
            /* @var $field \CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping\Field */
            $this->fieldsByName[$field->getName()] = $field;
        }
    }

    public function getDescribe()
    {
        return $this->describe;
    }

    /**
     * getField()
     *
     * @throws \OutOfBoundsException
     *
     * @param $name
     *
     * @return \CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping\Field
     */
    public function getField($name)
    {
        if(! array_key_exists($name, $this->fieldsByName))
        {
            throw new \OutOfBoundsException(sprintf('Field "%s" does not exist on sobject "%s"', $name, $this->getDescribe()->getName()));
        }

        return $this->fieldsByName[$name];
    }
}
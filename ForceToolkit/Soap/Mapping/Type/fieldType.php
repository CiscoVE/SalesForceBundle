<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping\Type;

use CiscoSystems\SalesForceBundle\Soap\Mapping\Type\GenericType;

/**
 * QueryLocator
 */
class fieldType extends GenericType
{
    const string = 'string';
    const picklist = 'picklist';
    const multipicklist = 'multipicklist';
    const combobox = 'combobox';
    const reference = 'reference';
    const base64 = 'base64';
    const boolean = 'boolean';
    const currency = 'currency';
    const textarea = 'textarea';
    const int = 'int';
    const double = 'double';
    const percent = 'percent';
    const phone = 'phone';
    const id = 'id';
    const date = 'date';
    const datetime = 'datetime';
    const time = 'time';
    const url = 'url';
    const email = 'email';
    const encryptedstring = 'encryptedstring';
    const datacategorygroupreference = 'datacategorygroupreference';
    const anyType = 'anyType';

    /**
     * The target namespace of the type.
     *
     * @return string
     */
    public static function getURI()
    {
        return 'urn:enterprise.soap.sforce.com';
    }
}

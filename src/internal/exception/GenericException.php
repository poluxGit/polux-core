<?php
namespace Polux\Core\Internal\Exception;

/**
 * GenericException exception class
 * 
 * A generic exception generated from a message.
 * 
 * @author PoLuX
 */
class GenericException extends ApplicationException
{
    
    /**
     * Constructor 
     * 
     * @param string $psExceptionMessage    Exception message
     */
    public function __construct(string $psExceptionMessage)
    {
        parent::__construct('GENERIC',$psExceptionMessage);
    }
}//end class


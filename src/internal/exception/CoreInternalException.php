<?php
namespace Polux\Core\Internal\Exception;

use Polux\Core\Internal\Exception\ApplicationException;

/**
 * GenericException exception class
 * 
 * A generic exception generated from a message.
 * 
 * @author PoLuX
 */
class CoreInternalException extends ApplicationException
{
    /**
     * Constructor 
     * 
     * @param string $psExceptionMessage    Exception message
     */
    public function __construct(string $psExceptionMessage)
    {
        parent::__construct('CORE_INTERNAL',$psExceptionMessage);
    }
}//end class


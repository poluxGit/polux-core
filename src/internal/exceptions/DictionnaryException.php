<?php
namespace Polux\Core\Internal\Exceptions;

/**
 * Dictionnary generic exception
 * 
 * @author PoLuX
 */
class DictionnaryException extends ApplicationException
{
    // TODO - Insert your code here
    
    /**
     * Default constructor 
     * 
     * @param string $psExceptionCode
     *            Exception code.
     * @param array $paExceptionParameters
     *            Array of parameters value.
     */
    public function __construct(string $psExceptionCode, array $paExceptionParameters = null)
    {
        parent::__construct($psExceptionCode, $paExceptionParameters = null);
        // TODO - Insert your code here
    }

    /**
     */
    function __destruct()
    {
        
        // TODO - Insert your code here
    }
}


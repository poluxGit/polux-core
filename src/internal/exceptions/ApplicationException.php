<?php

namespace Polux\Core\Internal\Exceptions;

use Polux\Core\Internal\Interfaces\IDictionnary;
use Polux\Core\Internal\Interfaces\IApplication;

/**
 * Application Exception 
 * 
 * Generic Application Exception
 * 
 * @author PoLuX
 *        
 */
class ApplicationException extends \Exception
{
    /**
     * Specific message pattern
     * 
     * @example "%s - %d - %i" - Sprintf syntax
     * 
     * @var string
     */
    protected $sSpecificMessagePattern = null;
   
    /**
     * Exception Internal Code
     * 
     * @var string
     */
    protected $sApplicationExceptionCode = null;
    
    /**
     * Exception Internal Code
     *
     * @var array
     */
    protected $aExceptionParamaters = null;
    
    /**
     * Exception Message registery
     * 
     * @var IDictionnary
     */
    protected static $oExceptionDictionnary = null;
    
    /**
     * Application Object
     * 
     * @var IApplication
     */
    protected static $oApplicationObject = null;
    
    /**
     * Default constructor 
     * 
     * @param string $psExceptionCode       Exception code.
     * @param array $paExceptionParameters  Array of parameters value.
     */
    public function __construct(string $psExceptionCode, array $paExceptionParameters = null)
    {
        $this->sApplicationExceptionCode = $psExceptionCode;
        $this->aExceptionParamaters = $paExceptionParameters;
    }//end __construct()
    
    /**
     * Set specific message pattern
     * 
     * @param string $psMessagePattern  Specific message pattern.
     */
    public function setSpecificMessagePattern(string $psMessagePattern)
    {
        $this->sSpecificMessagePattern = $psMessagePattern;
    }//end setSpecificMessagePattern()
    
    /**
     * Set Static Exception dictionnary
     * 
     * @static
     * @param IDictionnary $poExceptionDictionnary
     */
    public static function setExceptionDictionnary(IDictionnary $poExceptionDictionnary)
    {
        static::$oExceptionDictionnary = $poExceptionDictionnary;
    }//end setExceptionDictionnary()
    
    /**
     * Set Application 
     *
     * @static
     * @param IApplication $poApplicationObject
     */
    public static function setApplication(IApplication $poApplicationObject)
    {
        static::$oApplicationObject = $poApplicationObject;
    }//end setApplication()
    
    /**
     * Generate message with dictionnary 
     * 
     * @param string    $psExceptionCode    Exception code.
     * @param array     $paParam            Array or parameters.
     */
    private function generateMessage(string $psExceptionCode, array $paParam)
    {
        
        
        
    }//end generateMessage()

}//end class


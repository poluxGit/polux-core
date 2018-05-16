<?php

namespace Polux\Core\Internal\Exception;

use Polux\Core\Interfaces\IApplication;


/**
 * Application Exception 
 * 
 * Generic Application Exception
 * 
 * @todo validation des paramètres de l'exception 
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
    
//     /**
//      * Exception Message registery
//      * 
//      * @var IDictionnary
//      */
//     protected static $oExceptionDictionnary = null;
    
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
    
//     /**
//      * Set Static Exception dictionnary
//      * 
//      * @static
//      * @param IDictionnary $poExceptionDictionnary
//      */
//     public static function setExceptionDictionnary(IDictionnary $poExceptionDictionnary)
//     {
//         static::$oExceptionDictionnary = $poExceptionDictionnary;
//     }//end setExceptionDictionnary()
    
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
     * Returns Exception message
     * 
     * Prepare exeception message from dictionnary before returning
     * from parent class method.
     * 
     * {@inheritDoc}
     * @see \Exception::getMessage()
     */
    public function getMessage(){
        $this->generateMessage();
        return parent::getMessage();
    }
    
    /**
     * Generate message from dictionnary 
     * 
     */
    private function generateMessage()
    {
        $lStrMessage = "";
        
        // Developpement Mode !
        if(static::$oApplicationObject->isDevMode())
        {
            $lStrMessage .= sprintf("\n".get_class($this)." - Exception Code : '%s' => \n",$this->sApplicationExceptionCode); 
            $lStrMessage .= sprintf("Exception StackTrace : \n '%s' \n",$this->getTraceAsString()); 
        }
        
        // Specific CASE !
        if($this->sApplicationExceptionCode == 'GENERIC')
        {
            $lStrMessage .= sprintf($this->aExceptionParamaters);
        }
        else
        {
            // Exception Dictionnary exists ? 
            if(static::$oExceptionDictionnary !== NULL)
            {
                $lStrDicoMsg = static::$oExceptionDictionnary->getValueByKey($this->sApplicationExceptionCode);
                $lStrMessage .= sprintf($lStrDicoMsg['message'],$this->aExceptionParamaters);
            }
            else 
            {
                $lStrMessage .= sprintf("Exception dictionnary isn't loaded. Code '%s'/ Params : '%'.",$this->sApplicationExceptionCode,(string) $this->aExceptionParamaters);
            }
        }
        
        $this->message = $lStrMessage;
        
    }//end generateMessage()

}//end class


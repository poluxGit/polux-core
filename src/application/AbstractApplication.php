<?php
namespace Polux\Core\Application;

use Polux\Core\Internal\Interfaces\IApplication;
use Polux\Core\Internal\Interfaces\IDatabaseConnection;
use Polux\Core\Internal\Interfaces\ILoger;
use Polux\Core\Internal\Interfaces\IDictionnary;
use Polux\Core\Internal\Classes\Dictionnary;
use Polux\Core\Internal\Exceptions\ApplicationException;

/**
 * AbstractApplication Class
 * 
 * An application asbtract definition.
 *
 * @author PoLuX
 *        
 */
abstract class AbstractApplication implements IApplication
{
    // ************************************************************
    //                         ATTRIBUTES
    // ************************************************************
    /**
     * Application Name
     * 
     * @example ECM
     * @var string
     */
    private $sApplicationName = null;
    
    /**
     * Application root path
     * 
     * @var string
     */
    private $sApplicationRootpath = null;
    
    /**
     * Application Version 
     * 
     * @var string
     */
    private $sApplicationVersion = null;
    
    /**
     * Application title
     * 
     * @var string
     */
    private $sApplicationTitle = null;
    
    /**
     * Database Connection Object
     * @var IDatabaseConnection;
     */
    private $oDatabaseConnection = null;
    
    /**
     * Logger 
     * 
     * @var ILoger
     */
    private $oLogger = null;
    
    /**
     * Application dictionnary
     *
     * @var IDictionnary
     */
    private $oApplicationDictionnary = null;
    
    /**
     * Default Constructor
     * 
     * @param string $psApplicationName     Application Name
     * @param string $psApplicationTitle    Application title
     * @param string $psApplicationRootPath Application root path
     * @param string $psVersion             Application version
     * 
     * @return AbstractApplication
     */
    public function __construct(string $psApplicationName, string $psApplicationTitle, string $psApplicationRootPath, string $psVersion = "dev"):object
    {   
        $this->sApplicationName = $psApplicationName;
        $this->sApplicationRootpath = $psApplicationRootPath ;
        $this->sApplicationTitle = $psApplicationTitle ;
        $this->sApplicationVersion = $psVersion ;
    }//end __construct()
    
    // ************************************************************
    //                         PUBLIC METHODS
    // ************************************************************
    /**
     * get Application Name
     *
     * @see \Polux\Core\Internal\Interfaces\IApplication::getApplicationName()
     */
    public function getApplicationName()
    {
       return $this->sApplicationName;
    }//end getApplicationName()

    /**
     * get Application Rootpath
     *
     * @see \Polux\Core\Internal\Interfaces\IApplication::getApplicationRootpath()
     */
    public function getApplicationRootpath()
    {
        return $this->sApplicationRootpath;
    }//end getApplicationRootpath()

    /**
     * get Application version
     *
     * @see \Polux\Core\Internal\Interfaces\IApplication::getApplicationVersion()
     */
    public function getApplicationVersion()
    {
        return $this->sApplicationVersion;
    }//end getApplicationVersion()

    /**
     * get Application title
     *
     * @see \Polux\Core\Internal\Interfaces\IApplication::getApplicationTitle()
     */
    public function getApplicationTitle()
    {
        return $this->sApplicationTitle;
    }//end getApplicationTitle()

    /**
     * Set default application DatabaseConnection
     * 
     * @param IDatabaseConnection $poDBConnection
     */
    final function setDatabaseConnection(IDatabaseConnection $poDBConnection){
        $this->oDatabaseConnection = $poDBConnection;
    }//end setDatabaseConnection()

    /**
     * Get default DatabaseConnection Object
     *  
     * @return IDatabaseConnection
     */
    final function getDatabaseConnection():IDatabaseConnection
    {
        return $this->oDatabaseConnection;
    }//end getDatabaseConnection()
    
    /**
     * Load the Application Dictionnary in memory
     * 
     * {@inheritDoc}
     * @see \Polux\Core\Internal\Interfaces\IApplication::loadApplicationDictionnary()
     */
    public function loadApplicationDictionnary(IDictionnary $poApplicationDictionnary)
    {
        $this->oApplicationDictionnary = $poApplicationDictionnary;
    }//end loadApplicationDictionnary()    
    
    /**
     * Load the Exceptions Dictionnary in memory
     * 
     * Define ApplicationException static dictionnary
     * 
     * {@inheritDoc}
     * @see \Polux\Core\Internal\Interfaces\IApplication::loadExceptionDictionnary()
     */
    public function loadExceptionDictionnary(IDictionnary $poExceptionDictionnary)
    {
        ApplicationException::setExceptionDictionnary($poExceptionDictionnary);
    }//end loadExceptionDictionnary()    
    
    /**
     * Default destructor
     * 
     */
    function __destruct()
    {
        
        // TODO - Insert your code here
    }//end __destruct()
}//end class


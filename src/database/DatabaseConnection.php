<?php

/**
 * Database Connection Class file definition
 * 
 * @author PoLuX
 * 
 */
namespace Polux\Core\Database;

use Polux\Core\Internal\Interfaces\IDatabaseConnection;


/**
 * DatabaseConnection Class 
 * 
 * Database Connection management.
 * 
 * @license MIT2
 * @author polux
 */
class DatabaseConnection implements IDatabaseConnection
{
    // ************************************************************
    //                         ATTRIBUTES
    // ************************************************************
    /**
     * Objet connection 
     * 
     * @var \PDO
     */
    private $pdo=null;
    
    /**
     * DSN de la connection
     * 
     * @var string
     */
    private $sDSN = null;
    
    // ************************************************************
    //                         CONSTRUCTOR
    // ************************************************************
    // TODO - Insert your code here
    /**
     * 
     */
    public function __construct()
    {
        
        // TODO - Insert your code here
    }//end __construct()

    /**
     * 
     */
    function __destruct()
    {
        
        // TODO - Insert your code here
    }
    public function query(): int
    {}

    public function exec(): int
    {}
//end __destruct()

}//end class


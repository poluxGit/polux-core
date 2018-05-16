<?php
namespace Polux\Core\Internal\Database;

use Polux\Core\Internal\CoreObject;

/**
 * CoreDatabase
 *
 * A Database Connection / Db Schema
 *
 * @author PoLuX
 */
class CoreDatabase extends CoreObject
{
    private $dsn = null;

    private $login = null;

    private $passwd = null;

    private $oPDO = null;

    /**
     * Default constructor
     *
     * @param string $psDSN       DSN about Database connection
     * @param string $pLogin      Database Account
     * @param string $pPassword   Database Account Password
     */
    public function __construct(string $psDSN,string $pLogin, string $pPassword)
    {
        $this->oPDO = new \PDO($psDSN,$pLogin,$pPassword);
    }//end __construct()

    /**
     * (non-PHPdoc)
     *
     * @see \Polux\Core\Internal\CoreObject::getObjectCount()
     */
    protected function getObjectCount()
    {

        // TODO - Insert your code here
    }

   

    /**
     * (non-PHPdoc)
     *
     * @see \Polux\Core\Internal\CoreObject::genUID()
     */
    protected function genUID()
    {

        // TODO - Insert your code here
    }

    /**
     * (non-PHPdoc)
     *
     * @see \Polux\Core\Internal\CoreObject::incObjectCount()
     */
    protected function incObjectCount()
    {

        // TODO - Insert your code here
    }

    /**
     */
    function __destruct()
    {

        // TODO - Insert your code here
    }
}

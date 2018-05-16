<?php
namespace Polux\Core;

use Polux\Core\Internal\Database\CoreDatabase;
use Polux\Core\Internal\Exception\CoreInternalException;

/**
 * Main Core PHP Framework static class
 *
 * @author PoLuX
 */
final class CoreFramework
{
    /**
     * Database Object
     *
     * @var array
     */
    private static $databases = [];
    /**
     * Default database UID
     *
     * @var string
     */
    private static $defaultDatabaseUID = null;
    /**
     *
     * @var array
     */
    private static $application = [];
    /**
     *
     * @var array
     */
    private static $loggers = [];

    /**
     * Register a Database Object
     *
     * @param CoreDatabase $pObjDatabase    Database Object to register
     * @param bool $pIsDefault              (Optional) Is default Database object ?
     * @param bool $pRaiseException         (Optional) Raise an exception in case UID already defined ?
     *
     * @throws  CoreInternalException   if a db with same UID already register
     * @return bool
     */
    public static function registerDatabase(CoreDatabase $pObjDatabase,bool $pIsDefault=false, bool $pRaiseException=false):bool
    {
        // if db with same UID exists => CoreInternalException
        if(array_key_exists($pObjDatabase->getInternalUID(), static::databases) && $pRaiseException)
        {
            $lsExceptionMessage = sprintf("Internal DB Unique ID '%s' is already defined. Process exited!",$pObjDatabase->getInternalUID());
            throw new CoreInternalException($lsExceptionMessage);
        }

        static::databases[$pObjDatabase->getInternalUID()] = $pObjDatabase;
        if($pIsDefault){
            static::$defaultDatabaseUID = $pObjDatabase->getInternalUID();
        }

    }//end registerDatabase()

    /**
     * Returns default database object
     *
     * @return CoreDatabase
     */
    public static function getDefaultDatabase():CoreDatabase {
        return  static::databases[static::$defaultDatabaseUID];
    }

}

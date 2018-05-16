<?php

namespace Polux\Core\Internal;
use Polux\Core\Interfaces\IApplication;

/**
 * Core Object - Common behaviour of all object of CoreFramework
 *
 * @author PoLuX
 */
abstract class CoreObject
{
    /**
     * Object Unique Identifiers
     *
     * @var string
     */
    protected $UID = null;

    /**
     * Related Application Object
     *
     * @var IApplication
     * @static
     */
    protected static $appInstance = null;

    /**
     * Default Constructor
     */
    public function __construct()
    {

        // TODO - Insert your code here
    }

    /**
     */
    function __destruct()
    {

        // TODO - Insert your code here
    }


    protected function logObject(){

    }

    /**
     * Return Application object
     *
     * @return IApplication
     */
    public static function getApplication():IApplication
    {
      return static::$appInstance;
    }//end getApplication()

    /**
     * set Application object
     *
     * @param IApplication $pObjApplication Applciation Object
     */
    public static function setApplication(IApplication $pObjApplication):
    {
      static::$appInstance = $pObjApplication;
    }//end setApplication()


    public function getInternalUID():string {
        return $this->UID;
    }

    /**
     * Returns Current Object Generated UID
     *
     * @example For A CoreDatabase => DBA
     * @return string
     */
    abstract protected function genUID():string;
    abstract protected static function getObjectCount():int;
    abstract protected static function incObjectCount():int;
}//end class

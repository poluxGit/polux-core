<?php
namespace Polux\Core\Interfaces;

use interfaces\ILogger;

/**
 * Interface IApplication
 *
 * Core Application Framework interface.
 *
 * @author PoLuX
 *
 */
interface IApplication
{
    /**
     * Initialization of Application
     *
     *  @return bool TRUE if OK
     */
    public function initApplication():bool;

    /**
     * Returns Application Title
     *
     * @example "My Application 1"
     *
     * @return string
     */
    public function getTitle():string;

    /**
     * Returns Application internal code
     *
     * @example "APP1"
     * @return string
     */
    public function getInternalCode():string;

    /**
     * Returns Application default Logger
     *
     * @return ILogger
     */
    public function getDefaultLogger():ILogger;
}

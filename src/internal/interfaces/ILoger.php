<?php
namespace Polux\Core\Internal\Interfaces;

/**
 * ILoger
 * @author PoLuX
 *        
 */
interface ILoger
{
    protected function logMessage(string $psMessage):bool;
    protected function setLogerID(string $psMessage):bool;
}


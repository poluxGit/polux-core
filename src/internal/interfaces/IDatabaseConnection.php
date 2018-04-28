<?php
/**
 * Interface représentant une connexion à la base de données
 */
namespace Polux\Core\Internal\Interfaces;

/** 
 * 
 * IDatabaseConnection
 * 
 * Interface de connexion aux bases de données
 * 
 * @author PoLuX
 */
interface IDatabaseConnection
{    
    public function exec():int;
    public function query():int;
}


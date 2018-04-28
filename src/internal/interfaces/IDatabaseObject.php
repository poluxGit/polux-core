<?php
/**
 * Interface représentant un objet persistant 
 */
namespace Polux\Core\Internal\Interfaces;

/**
 * IDatabaseObject 
 * 
 * Objet persisté en base de données.
 * 
 * @author PoLuX
 */
interface IDatabaseObject
{    
    public function save():bool;
    public function load():bool;
    public function setDatabaseConnection(IDatabaseConnection $objDBConnection):bool;
}


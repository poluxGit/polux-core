<?php
namespace Polux\Core\Internal\Interfaces;

/**
 * IDictionnary
 * 
 * Interface represents a Dictionnary Object
 * 
 * @author PoLuX
 *        
 */
interface IDictionnary
{
    /**
     * Load into Dictionnary from a file
     * 
     * @param string $psFilepath
     * @return bool
     */
    public static function loadDictionnaryFromFile(string $psFilepath):object; 
    
    /**
     * Get a value by his Key
     * 
     * @param string $psKey
     */
    public function getValueByKey(string $psKey);
    
    public  function defineValueByKey(string $psKey,$poValue):bool;
    
}//end interface


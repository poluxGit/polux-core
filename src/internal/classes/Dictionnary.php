<?php
namespace Polux\Core\Internal\Classes;

use Polux\Core\Internal\Interfaces\IDictionnary;
use Polux\Core\Internal\Exceptions\DictionnaryException;

/**
 * Dictionnary Class
 * 
 * Represents an indexed dictionnary allowing storage of object.
 * 
 * @author PoLuX
 *        
 */
class Dictionnary implements IDictionnary
{
    /**
     * JSON Content loaded in memory
     * 
     * @var array
     */
    private $sJSONInitialContent = NULL;
    
    /**
     * Dictionnary  
     *  
     * @var array
     */
    private $aDictionnary = NULL;
    
   /**
    * Default Constructor
    * 
    * @param string $pStrJSONContent    [optional] JSON Content
    */
    public function __construct(string $pStrJSONContent = NULL)
    {
        $lStrJSONFinalContent = NULL;
        if($pStrJSONContent !== NULL){
            $this->sJSONInitialContent = $pStrJSONContent;
            $lStrJSONFinalContent = json_decode($pStrJSONContent);
        }
        if($lStrJSONFinalContent !== NULL){
            $this->aDictionnary = $lStrJSONFinalContent;
        }
    }//end __construct()

    /**
     * Load a dictionnary from a json file
     * 
     * @param string $psFilepath
     * @throws DictionnaryException
     * 
     * @return Dictionnary
     */
    public static function loadDictionnaryFromFile(string $psFilepath):Dictionnary
    {
        // File not exists !
        if(!file_exists($psFilepath))
        {
            $laParam = [$psFilepath];
            throw new DictionnaryException('DICO-LOAD_ERR-FILE_NOTEXISTS',$laParam);
        }
        
        // File opening!
        $lStrContent = file_get_contents($psFilepath);
       
        // JSON Decode
        if(json_decode($lStrContent) !== NULL){
            return new Dictionnary($lStrContent);       
        }
        else {
            $laParam = ['JSON_DECODE failed :'.json_last_error_msg()];
            throw new DictionnaryException('DICO-LOAD_ERR-GENERIC',$laParam);            
        }
        
    }//end loadDictionnaryFromFile()

    /**
     * Get value from key
     * 
     * @todo implémenter la gestion plusieurs niveau défini statique
     *  Exemple aDico[Static1(si definie)][static2 (si définie)][$psKey] ....
     * 
     * {@inheritDoc}
     * @see \Polux\Core\Internal\Interfaces\IDictionnary::getValueByKey()
     */
    public function getValueByKey(string $psKey)
    {
        if(!array_key_exists($psKey,$this->aDictionnary))
        {
            $laParam = [$psKey];
            throw new DictionnaryException("DICO-GET_ERR-KEY_NOT_EXISTS");
        }
        
        return $this->aDictionnary[$psKey];
    }//end getValueByKey()

    /**
     * Define Value by Key
     * 
     * @todo implémenter la gestion plusieurs niveau défini statique
     *  Exemple aDico[Static1(si definie)][static2 (si définie)][$psKey] ....
     *  
     * {@inheritDoc}
     * @see \Polux\Core\Internal\Interfaces\IDictionnary::defineValueByKey()
     */
    public function defineValueByKey(string $psKey, $poValue): bool
    {
        $this->aDictionnary[$psKey] = $poValue;
        return true;        
    }//end defineValueByKey()

}//end class


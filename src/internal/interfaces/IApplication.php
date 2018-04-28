<?php
namespace Polux\Core\Internal\Interfaces;

/**
 *
 * @author PoLuX
 *        
 */
interface IApplication
{
    public function getApplicationName():string;
    public function getApplicationVersion():string;
    public function getApplicationTitle():string;
    public function getApplicationRootpath():string;
    public function loadApplicationSettings():bool;
    public function loadExceptionDictionnary(IDictionnary $poExceptionDictionnary):bool;
    public function loadApplicationDictionnary(IDictionnary $poApplicationDictionnary):bool;
}

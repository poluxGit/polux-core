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
}


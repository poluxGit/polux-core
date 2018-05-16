<?php
namespace Polux\Core;

use Polux\Core\Internal\CoreObject;
use Polux\Core\Interfaces\IApplication;
use Polux\Core\Interfaces\ILogger;

/**
 *
 * @author PoLuX
 *
 */
class CoreApplication extends CoreObject implements IApplication
{

    //protected

    /**
     */
    public function __construct(string $pApplicationCode,string $pApplicationTitle)
    {
        parent::__construct();
        // TODO - Insert your code here
    }

    /**
     */
    function __destruct()
    {

        // TODO - Insert your code here
    }

    protected static function getObjectCount(): int
    {}

    protected function genUID(): string
    {}

    protected static function incObjectCount(): int
    {}
    public function getTitle(): string
    {}

    public function initApplication(): bool
    {}

    public function getInternalCode(): string
    {}

    public function getDefaultLogger(): ILogger
    {}


}

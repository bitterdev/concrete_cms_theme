<?php

namespace PortlandLabs\ConcreteCmsTheme\Search\Pagination\View;

use Concrete\Core\Search\Pagination\View\ConcreteCMSView;
use Concrete\Core\Support\Manager as CoreManager;

class Manager extends CoreManager
{

    protected function createApplicationDriver()
    {
        return new ConcreteCMSView();
    }

    protected function createDashboardDriver()
    {
        return new ConcreteCMSView();
    }

    protected function createCmsDriver()
    {
        return new ConcreteCMSView();
    }

    protected function createSimplePaginationDriver()
    {
        return new SimplePaginationView();
    }

}

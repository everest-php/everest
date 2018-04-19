<?php

namespace ViewComponents;

use everest\MVC\ViewComponent;

class NavigationViewComponent extends ViewComponent
{

    public function __construct()
    {
        $this->registeredVariables["app"] = "Everest PHP";
    }


}
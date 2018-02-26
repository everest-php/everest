<?php

namespace ViewComponents;

use hooks\MVC\ViewComponent;

class NavigationViewComponent extends ViewComponent
{

    public function __construct()
    {
        $this->registeredVariables["app"] = "My Hooks App";
    }


}
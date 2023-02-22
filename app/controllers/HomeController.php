<?php

// app/controllers/HomeController.php

class HomeController {
    public function index() {
        // Set the view path
        $view = 'app/views/home/home.php';

        // Set the layout path
        $layout = 'app/views/layouts/application.layout.php';

        // Render the view within the context of the layout
        // Таким чином ми рендеремо home.php всередені шаблону application.layout.php
        include $layout;
    }
}

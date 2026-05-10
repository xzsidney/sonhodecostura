<?php

namespace App\Core;

class Controller
{
    public function view($view, $params = [])
    {
        // Extract params to variables
        foreach ($params as $key => $value) {
            $$key = $value;
        }

        // Buffer the view content
        ob_start();
        include_once __DIR__ . "/../Views/$view.php";
        $content = ob_get_clean();

        // Render the main layout
        if (file_exists(__DIR__ . "/../Views/layouts/main.php")) {
            include_once __DIR__ . "/../Views/layouts/main.php";
        } else {
            echo $content;
        }
    }
}

<?php
function view($viewName, $data = [])
{
    $viewFile = BASE_PATH. '/views/' . $viewName . '.php';

    if (file_exists($viewFile)) {
        extract($data);

    // Include view file
        include $viewFile;
    }

    // Extract data to variables
  
}

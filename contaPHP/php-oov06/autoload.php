<?php
    spl_autoload_register(function(string $classname){
        $fqn = str_replace('cefet\\projeto', 'src', $classname);
        $fqn = str_replace('\\', DIRECTORY_SEPARATOR, $fqn);
        $fileName = $fqn.".php";
        if(file_exists($fileName))
            require_once($fileName);
    });
?>
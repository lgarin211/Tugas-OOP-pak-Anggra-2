<?php
class render 
{
    function ren($file, $data = "")
    {   
        require "views/" . $file . ".php";
    }
}
?>
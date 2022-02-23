<?php 

class view
{
    public static function load($view_name,$view_data=[])
    {
        $file = VIEWS.$view_name.'.php';
        if(file_exists($file))
        {
            //variable=value
          extract($view_data);
            require (VIEWS.'inc/sidebar.php');
            require($file);
            require (VIEWS.'inc/footerdash.php');
        }
        else 
        {
            echo "this view :".$view_name . "does not exist";
        }
    }
}


?>
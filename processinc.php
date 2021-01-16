<?php
    #collect data from the HTML form
    $menu = $_POST['menu'];

    #including the separate php file
    include 'process.php';

    //creation of object
    $englishmenu = new Menu($menu);
    $topicdescription = new Description($menu);
    $types = new Types($menu);
    $examples = new Examples($menu);

    //calling of methods
    echo $englishmenu->menumethod(); echo "<br>";
    echo $topicdescription->descriptionmethod(); echo "<br>";
    echo $types->typesmethod(); echo "<br>";
    echo $examples->examplesmethod();
?>
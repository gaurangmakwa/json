<?php
    $programming=  '{"one":"c","two":"c++","three":"java","four":"php"}';

    $object =  json_decode ($programming);

    print_r($object);

    echo "<hr/>";
    echo $object->one;
    echo $object->two;
    echo $object->three;
    echo $object->four;

?>
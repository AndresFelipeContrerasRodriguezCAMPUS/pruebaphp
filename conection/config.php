<?php


return function(Connection &$connection){
$connection.add(
    "campuslands",
    ["mysql:localhost;","dbname=campuslands","campus","campus2023"]
);
}

?>
<?php

setcookie('derniereVisite', "X", 1);
unset($_COOKIE['derniereVisite']);


var_dump($_COOKIE);

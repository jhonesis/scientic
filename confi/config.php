<?php
/* This PHP code is defining a constant named `RACINE` with the value of the parent directory of the
current directory. The `dirname(__DIR__)` function is used to get the parent directory of the
current directory. So, the constant `RACINE` will hold the absolute path of the parent directory of
the current PHP script. */
    define("RACINE",dirname(__DIR__));
?>
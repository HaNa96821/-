<?php
    echo "hello";

    //Cokkie

    //setcookie("username","hanai");
    setcookie("username","hanai",time()-60*60);

    echo $_COOKIE['username'];
?>
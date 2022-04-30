<?php

if(isset($_SESSION['added'])){
    echo $_SESSION['added'];
    session_destroy();
}

if(isset($_SESSION['updated'])){
    echo $_SESSION['updated'];
    session_destroy();
}

if(isset($_SESSION['deleted'])){
    echo $_SESSION['deleted'];
    session_destroy();
}
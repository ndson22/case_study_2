<?php

session_start();

function isPermissible()
{
    if (!isset($_SESSION['permission'])) {
        return false;
    } else {
        if ($_SESSION['permission'] == 1) {
            return true;
        } else {
            return false;
        }
    }
}
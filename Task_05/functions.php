<?php

namespace Task_05;

function SetLoginSession(array $data)
{
    session_start();

    if (!isset($data["login"]))
        return;

    if (!isset($_SESSION["login"])) {
        $_SESSION["login"] = $data["login"];
    }
}
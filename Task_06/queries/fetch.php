<?php

namespace Task_06;
require_once "../TaskHandler.php";

use Exception;

try {
    TaskHandler::Fetch();
    echo "success";
} catch (Exception $exception) {
    echo "error";
}

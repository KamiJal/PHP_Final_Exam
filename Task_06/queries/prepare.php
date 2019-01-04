<?php

namespace Task_06;
require_once "../TaskHandler.php";

use Exception;

try {
    TaskHandler::Prepare();
    echo "success";
} catch (Exception $exception) {
    echo "error";
}

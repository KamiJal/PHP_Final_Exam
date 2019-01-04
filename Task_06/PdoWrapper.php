<?php

namespace Task_06;

require_once "PdoStatementWrapper.php";

use PDO;
use DateTime;

class PdoWrapper extends PDO
{
    private $logger;
    private $format;

    public function __construct(string $dsn, string $username, string $passwd, array $options, Logger $logger)
    {
        parent::__construct($dsn, $username, $passwd, $options);
        $this->logger = $logger;
        $this->format = "%s action=%s";
    }

    public function prepare($statement, $options = NULL)
    {
        $date = new DateTime();
        $this->logger->Log(sprintf($this->format, $date->format("Y-m-d H:i:s"), "prepare"));

        return new PdoStatementWrapper(parent::prepare($statement, (array)$options), $this->logger);
    }

    public function query($statement, $mode = PDO::ATTR_DEFAULT_FETCH_MODE, $arg3 = null, array $ctorargs = array())
    {
        $date = new DateTime();
        $this->logger->Log(sprintf($this->format, $date->format("Y-m-d H:i:s"), "query"));

        return new PdoStatementWrapper (parent::query($statement), $this->logger);
    }

}
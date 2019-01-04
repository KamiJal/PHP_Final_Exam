<?php

namespace Task_06;

use PDO;
use PDOStatement;
use DateTime;


class PdoStatementWrapper extends PDOStatement
{
    private $pdoStatement;
    private $logger;
    private $format;

    public function __construct(PDOStatement $pdoStatement, Logger $logger)
    {
        $this->pdoStatement = $pdoStatement;
        $this->logger = $logger;
        $this->format = "%s action=%s";
    }

    public function execute($input_parameters = null)
    {
        $date = new DateTime();
        $this->logger->Log(sprintf($this->format, $date->format("Y-m-d H:i:s"), "execute"));

        return $this->pdoStatement->execute($input_parameters);
    }

    public function fetch($fetch_style = null, $cursor_orientation = PDO::FETCH_ORI_NEXT, $cursor_offset = 0)
    {
        $date = new DateTime();
        $this->logger->Log(sprintf($this->format, $date->format("Y-m-d H:i:s"), "fetch"));

        return $this->pdoStatement->fetch($fetch_style, $cursor_orientation, $cursor_offset);
    }

}
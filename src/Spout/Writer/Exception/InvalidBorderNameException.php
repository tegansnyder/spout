<?php

namespace Box\Spout\Writer\Exception;

use Box\Spout\Writer\Style\BorderPart;

class InvalidBorderNameException extends WriterException
{

    public function __construct($name)
    {

        $msg = '%s is not a valid name identifier for a border. Valid identifiers are: %s.';

        parent::__construct(sprintf($msg, $name, implode(',', BorderPart::getAllowedNames())));

    }
}

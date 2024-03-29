<?php

namespace App\Texter;

use App\HasLoggerInterface;
use App\Logger;

class SmsTexter implements TexterInterface, HasLoggerInterface
{
    protected $serviceDsn;
    protected $key;
    protected $logger;

    public function __construct(string $serviceDsn, string $key, string $firstName)
    {
        var_dump("Ca marche dans les sms :$firstName");
        $this->serviceDsn = $serviceDsn;
        $this->key = $key;
    }

    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
        $this->logger->log("Ca marche dans les SMS");
    }

    public function send(Text $text)
    {
        var_dump("ENVOI DE SMS : ", $text);
    }
}

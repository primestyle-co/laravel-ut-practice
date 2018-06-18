<?php

namespace App;

use App\Computer;

class Laptop implements Computer
{
    protected $report;
    public function __construct(Report $rep)
    {
        $this->report = $rep;
    }
    public function run()
    {
        echo "\n\r Inside Laptop::run function";

        if (!$this->report->sendEMail()) {
            return "send Email False";
        }
        return "I am Lap";
    }
}

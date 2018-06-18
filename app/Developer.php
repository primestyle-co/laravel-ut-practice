<?php
namespace App;

use App\Computer;

class Developer
{
    protected $computer;

    public function __construct( Computer $c)
    {
        $this->computer = $c;
    }
    public function work()
    {
        echo "\n\r inside work function";

        return $this->computer->run();
    }
    public function finish()
    {
        echo "\n\r inside finish function";

        return $this->computer->report();
    }
}

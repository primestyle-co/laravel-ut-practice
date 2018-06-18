<?php

namespace Tests;

use App\Computer;
use App\Laptop;
use App\Developer;
use App\Report;
use Tests\TestCase;

class RealObjectTest extends TestCase
{
    public function testDeveloperWorkTest()
    {
        $com = new Laptop(new Report);
        $dev = new Developer($com);

        $this->assertEquals('I am Lap', $dev->work());
    }
    public function testLaptopRunTest()
    {
        $com = new Laptop(new Report);

        $this->assertEquals('I am Lap', $com->run());
    }
}

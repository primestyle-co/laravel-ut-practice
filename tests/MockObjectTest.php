<?php

namespace Tests;

use Tests\TestCase;
use App\Computer;
use App\Laptop;
use App\Report;
use App\Developer;

use Mockery as m;

class MockObjectTest extends TestCase
{
    protected $computer;
    protected $report;

    public function setUp(){
        parent::setUp();

        $this->report = m::mock(Report::class);
        $this->computer = m::mock(new Laptop($this->report));
    }
    public function tearDown()
    {
        parent::tearDown();
        m::close();
    }
    public function testDeveloperWorkTest()
    {
        $dev = new Developer($this->computer);

        $this->computer->shouldReceive('run')
            ->once()
            ->andReturn('I am mock laptop');

        $this->assertEquals('I am mock laptop', $dev->work());
    }
    public function testLaptopRunTest()
    {
        $lap = new Laptop($this->report);

        $this->report->shouldReceive('sendEMail')
            ->once()
            ->andReturn(true);

        $this->assertEquals('I am Lap', $lap->run());
    }
    public function testSendMailFailTest()
    {
        $lap = new Laptop($this->report);

        $this->report->shouldReceive('sendEMail')
            ->once()
            ->andReturn(false);

        $this->assertEquals('send Email False', $lap->run());
    }
}

<?php


namespace Tests\Unit;

use App\Patterns\AbstractFactory\AppleComputerFactory;
use App\Patterns\AbstractFactory\IbmComputerFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testMakingAppleDesktop()
    {
        $computerFactory = new AppleComputerFactory();

        $desktopComputer = $computerFactory->makeDesktopComputer();

        $mac = $desktopComputer->makeMac(1987);

        $this->assertEquals('Macintosh SE', $mac->getModel());
        $this->assertEquals(1024, $mac->getKiloBytesOfRam());
    }

    public function testMakingAppleLaptop()
    {
        $computerFactory = new AppleComputerFactory();

        $desktopComputer = $computerFactory->makeLaptopComputer();

        $mac = $desktopComputer->makeMacBook(2015);

        $this->assertEquals('MacBook Pro 2015', $mac->getModel());
        $this->assertEquals(8000000, $mac->getKiloBytesOfRam());
    }

    public function testMakingIbmDesktop()
    {
        $computerFactory = new IbmComputerFactory();

        $desktopComputer = $computerFactory->makeDesktopComputer();

        $mac = $desktopComputer->makePc(1987);

        $this->assertEquals('Personal System/2', $mac->getModel());
        $this->assertEquals(512, $mac->getKiloBytesOfRam());
    }

    public function testMakingIbmLaptop()
    {
        $computerFactory = new IbmComputerFactory();

        $desktopComputer = $computerFactory->makeLaptopComputer();

        $mac = $desktopComputer->makeLaptop(2015);

        $this->assertEquals('ThinkPad X1 Carbon', $mac->getModel());
        $this->assertEquals(8000000, $mac->getKiloBytesOfRam());
    }
}
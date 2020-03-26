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

        $mac = $desktopComputer->makeMac();

        $this->assertEquals('iMac G3', $mac->getModel());
        $this->assertEquals(32000, $mac->getKiloBytesOfRam());
    }

    public function testMakingAppleLaptop()
    {
        $computerFactory = new AppleComputerFactory();

        $laptopComputer = $computerFactory->makeLaptopComputer();

        $mac = $laptopComputer->makeMacBook();

        $this->assertEquals('MacBook Pro 2019', $mac->getModel());
        $this->assertEquals(16000000, $mac->getKiloBytesOfRam());
    }

    public function testMakingIbmDesktop()
    {
        $computerFactory = new IbmComputerFactory();

        $desktopComputer = $computerFactory->makeDesktopComputer();

        $mac = $desktopComputer->makePc();

        $this->assertEquals('Dell Precision 3630', $mac->getModel());
        $this->assertEquals(8000000, $mac->getKiloBytesOfRam());
    }

    public function testMakingIbmLaptop()
    {
        $computerFactory = new IbmComputerFactory();

        $laptopComputer = $computerFactory->makeLaptopComputer();

        $mac = $laptopComputer->makeLaptop();

        $this->assertEquals('ThinkPad X1 Carbon', $mac->getModel());
        $this->assertEquals(8000000, $mac->getKiloBytesOfRam());
    }

    public function testMakingAppleDesktopForSpecifiedYear()
    {
        $computerFactory = new AppleComputerFactory();

        $desktopComputer = $computerFactory->makeDesktopComputer();

        $mac = $desktopComputer->makeMac(1987);

        $this->assertEquals('Macintosh SE', $mac->getModel());
        $this->assertEquals(1024, $mac->getKiloBytesOfRam());
    }

    public function testMakingAppleLaptopForSpecifiedYear()
    {
        $computerFactory = new AppleComputerFactory();

        $laptopComputer = $computerFactory->makeLaptopComputer();

        $mac = $laptopComputer->makeMacBook(1991);

        $this->assertEquals('PowerBook', $mac->getModel());
        $this->assertEquals(2048, $mac->getKiloBytesOfRam());
    }

    public function testMakingIbmDesktopForSpecifiedYear()
    {
        $computerFactory = new IbmComputerFactory();

        $desktopComputer = $computerFactory->makeDesktopComputer();

        $mac = $desktopComputer->makePc(1987);

        $this->assertEquals('Personal System/2', $mac->getModel());
        $this->assertEquals(512, $mac->getKiloBytesOfRam());
    }

    public function testMakingIbmLaptopForSpecifiedYear()
    {
        $computerFactory = new IbmComputerFactory();

        $laptopComputer = $computerFactory->makeLaptopComputer();

        $mac = $laptopComputer->makeLaptop(2013);

        $this->assertEquals('ThinkPad Yoga', $mac->getModel());
        $this->assertEquals(4000000, $mac->getKiloBytesOfRam());
    }
}

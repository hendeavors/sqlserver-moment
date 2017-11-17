<?php

namespace Endeavors\SqlServer\Moment\Tests;

use Endeavors\SqlServer\Moment\SmallDateTimeConversion;

class SmallDateTimeConversionTest extends \Orchestra\Testbench\TestCase
{
    use SmallDateTimeConversion;

    protected $dt;

    public function setUp()
    {
        $this->dt = new \DateTime("now");

        parent::setUp();
    }

    public function testConversionOfProperDatetime()
    {
        $result = $this->fromDateTime($this->dt);
    }

    public function testConversionLengthIsEqualToDatetime()
    {
        $result = $this->fromDateTime($this->dt);

        $orignalLength = mb_strlen($this->dt->format($this->getDateFormat()));

        $newLength = mb_strlen($result);

        $this->assertTrue($orignalLength == $newLength);

        $this->assertEquals(0, $orignalLength - $newLength);
    }

    public function testConversionCanBeConvertedToDatetime()
    {
        $result = $this->fromDateTime($this->dt);

        $newDt = new \DateTime($result);
    }
}
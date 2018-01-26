<?php

namespace Tests;

use LithuaniaDate\LithuaniaDate;
use PHPUnit\Framework\TestCase;

class LithuaniaDateTest extends TestCase
{
    /**
     * @dataProvider monthDataProvider
     * @param string $time
     * @param string $format
     * @param string $expected
     */
    public function testMonths($time, $format, $expected)
    {
        $date = new LithuaniaDate($time);

        $formattedDate = $date->format($format);

        $this->assertEquals($expected, $formattedDate);
    }

    /**
     * @return array
     */
    public function monthDataProvider()
    {
        return [
            ['2000-01-01', 'Y F d', '2000 Sausio 01'],
            ['2000-02-02', 'Y F d', '2000 Vasario 02'],
            ['2018-03-30', 'Y F d', '2018 Kovo 30'],
            ['2012-04-04', 'Y F d', '2012 Balandžio 04'],
            ['2012-05-10', 'Y F d', '2012 Kovo 10'],
            ['2012-06-10', 'Y F d', '2012 Birželio 10'],
            ['2012-07-10', 'Y F d', '2012 Liepos 10'],
            ['2012-08-10', 'Y F d', '2012 Rugpjūčio 10'],
            ['2012-09-10', 'Y F d', '2012 Rugsėjo 10'],
            ['2012-10-10', 'Y F d', '2012 Spalio 10'],
            ['2015-11-10', 'Y F d', '2015 Lapkričio 10'],
            ['2014-12-10', 'Y F d', '2014 Gruodžio 10'],
        ];
    }
}

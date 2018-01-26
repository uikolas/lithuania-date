<?php

namespace LithuaniaDate;

use DateTimeImmutable;

class LithuaniaDate extends DateTimeImmutable
{
    /**
     * @var array
     */
    private $fullMonths = [
        'January'   => 'Sausio',
        'February'  => 'Vasario',
        'March'     => 'Kovo',
        'April'     => 'Balandžio',
        'May'       => 'Kovo',
        'June'      => 'Birželio',
        'July'      => 'Liepos',
        'August'    => 'Rugpjūčio',
        'September' => 'Rugsėjo',
        'October'   => 'Spalio',
        'November'  => 'Lapkričio',
        'December'  => 'Gruodžio',
    ];

    /*private $days = [
        'Monday'    => 'Pirmadienis',
        'Tuesday'   => 'Antradienis',
        'Wednesday' => 'Trečiadienis',
        'Thursday'  => 'Ketvirtadienis',
        'Friday'    => 'Penktadienis',
        'Saturday'  => 'Šeštadienis',
        'Sunday'    => 'Sekmadienis'
    ];*/

    /**
     * @param string $format
     * @return string
     */
    public function format($format)
    {
        $original = parent::format($format);

        $replaced = $this->replaceMonth($original);

        return $replaced;
    }

    /**
     * @param string $original
     * @return string
     */
    private function replaceMonth($original)
    {
        return str_replace(
            array_keys($this->fullMonths),
            array_values($this->fullMonths),
            $original
        );
    }
}

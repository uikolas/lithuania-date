<?php

namespace LithuaniaDate;

use DateTimeImmutable;

class LithuaniaDate extends DateTimeImmutable
{
    /**
     * @var array
     */
    private $translations = [
        // Months
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
        // Days
        'Monday'    => 'Pirmadienis',
        'Tuesday'   => 'Antradienis',
        'Wednesday' => 'Trečiadienis',
        'Thursday'  => 'Ketvirtadienis',
        'Friday'    => 'Penktadienis',
        'Saturday'  => 'Šeštadienis',
        'Sunday'    => 'Sekmadienis'
    ];

    /**
     * @param string $format
     * @return string
     */
    public function format($format)
    {
        $original = parent::format($format);

        $translate = $this->translate($original);

        return $translate;
    }

    /**
     * @param string $original
     * @return string
     */
    private function translate($original)
    {
        return str_replace(
            array_keys($this->translations),
            array_values($this->translations),
            $original
        );
    }
}

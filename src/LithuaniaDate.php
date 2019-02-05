<?php

namespace LithuaniaDate;

use DateTimeImmutable;

class LithuaniaDate extends DateTimeImmutable
{
    /**
     * @var array
     */
    private $months = [
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

    /**
     * @var array
     */
    private $days = [
        'Monday'    => 'Pirmadienis',
        'Tuesday'   => 'Antradienis',
        'Wednesday' => 'Trečiadienis',
        'Thursday'  => 'Ketvirtadienis',
        'Friday'    => 'Penktadienis',
        'Saturday'  => 'Šeštadienis',
        'Sunday'    => 'Sekmadienis',
    ];

    /**
     * @param string $format
     * @return string
     */
    public function format($format): string
    {
        $parentFormat = parent::format($format);

        $translate = $this->translate($parentFormat);

        return $translate;
    }

    /**
     * @param string $parentFormat
     * @return string
     */
    private function translate(string $parentFormat): string
    {
        $combine = array_merge($this->months, $this->days);

        return str_replace(
            array_keys($combine),
            array_values($combine),
            $parentFormat
        );
    }
}

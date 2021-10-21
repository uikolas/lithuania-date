<?php

namespace LithuaniaDate;

use DateTimeImmutable;

class LithuaniaDate extends DateTimeImmutable
{
    /**
     * @var string[]
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
     * @var string[]
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

    public function format($format): string
    {
        $parentFormat = parent::format($format);

        $translate = $this->translate($parentFormat);

        return $translate;
    }

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

<?php namespace App\Libs\Base;

use Config;
use DateTime;
use DateTimeZone;

/**
 * Always store DateTime in database as UTC
 */
abstract class TimeZoneModel extends \Eloquent
{
    public function getTimezone()
    {
        return Config::get('app.timezone', 'UTC');
    }

    /**
     * Convert a DateTime to a storable string.
     *
     * @param  \DateTime|int $value
     * @return string
     */
    public function fromDateTime($value)
    {
        if ($value instanceof DateTime) {
            $value = clone $value;
            $value->setTimezone($this->getTimezone());
            return $value;
        }
        return parent::fromDateTime($value);
    }
}

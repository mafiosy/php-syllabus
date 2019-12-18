<?php

class Date
{
    private $month;
    private $day;
    private $year;

    public function __construct(int $month, int $day, int $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function setMonth(int $month)
    {
        $this->month = $month;
    }

    public function setDay(int $day)
    {
        $this->day = $day;
    }

    public function setYear(int $year)
    {
        $this->year = $year;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function displayDate()
    {
        if ($this->month < 10 && $this->day < 10){
            return '0' . $this->month . '/' . '0' . $this->day . '/' . $this->year;
        }
        elseif ($this->month < 10)
        {
            return '0' . $this->month . '/' . $this->day . '/' . $this->year;
        }
        elseif ($this->day < 10)
        {
            return $this->month . '/' . '0' . $this->day . '/' . $this->year;
        }
        else
        {
            return $this->month . '/' . $this->day . '/' . $this->year;
        }

    }
}
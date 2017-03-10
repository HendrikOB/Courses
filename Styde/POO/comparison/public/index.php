<?php

class Time
{
    protected $time = null;

    protected $timezone;

    public function __construct($time = null, $timezone = 'Europe/London')
    {
        $this->time = $time ?: time();
        $this->timezone = $timezone;
    }

    public function __toString()
    {
        return date('d/m/Y H:i:s', $this->time);
    }

    public function tomorrow()
    {
        return new Time($this->time + 24*60*60);
    }

    public function yesterday()
    {
        return new Time($this->time - 24*60*60);
    }

}

class MyTime extends Time {

}

$today = new Time();

$today2 = new Time();

//$today2 = $today;

if ($today == $today2){
    echo "VERDADERO";
} else {
    echo "FALSO";
}
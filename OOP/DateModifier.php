<?php

class DateModifier
{
    private $startDate;
    private $endDate;

    public function __construct(string $startDate, string $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    private function setDateFormat($date)
    {
        $parts = explode(' ', $date);
        return join('/', $parts);
    }

    public function getDifference()
    {
        $start = $this->setDateFormat($this->startDate);
        $end = $this->setDateFormat($this->endDate);
        $start = strtotime($start);
        $end = strtotime($end);

        $timeDiff = intval(abs($end - $start)  / 86400);
        return $timeDiff;
    }
}

$start = trim(fgets(STDIN));
$end = trim(fgets(STDIN));
$dateDiff = new DateModifier($start, $end);

echo $dateDiff->getDifference();

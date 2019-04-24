<?php

class TimeTravel {

    public $start;
    public $end;


    public function __construct()
    {
        $this->start = new DateTime('1985-12-31');
        $this->end = new DateTime();
    }

    public function getTravelInfo(){
        $temp = $this->start->diff($this->end);
        return $temp->format("Il y a %Y années, %M mois,  %D jours, %H heures, %I minutes et %S secondes entre les deux dates");
    }

    public function findDate(DateInterval $interval)
    {
        return $this->start->sub($interval)->format('d-m-y');
    }

    public function backToFutureStepByStep($step)
	{
        $tableau = [];
        foreach ($step as $date) {
            $tableau[] = $date->format('M d Y - h:m ') .'<br>';
        }
        return $tableau;
		
	}
}
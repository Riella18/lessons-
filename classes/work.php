<?php
class Work{
    public $jobname = [];
    public $hrsofworking = [];

    public function add($jobname, $hrsofworking){
        $this->jobname[] = $jobname;
        $this->hrsofworking[] = $hrsofworking;
    }

    public function display(){
        echo "Below are shown some job and the hrs that ppl work" ."\n";
        foreach($this->jobname as $index=>$jobname){
            echo "Type of Job: " .$jobname. "\n". "Hrs of working: " .$this->jobname[$index] . "\n";

        }

    }
    
}
$workk = new Work();
$workk -> add("Programming", 8);
$workk -> add("data analyst ", 6);
$workk ->display();
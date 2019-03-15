<?php
namespace MyGreeter;

class Client
{
    private $nowHours;
    public function getGreeting()
    {
        $this->nowHours=date('H');
        if ($this->nowHours>=12 && $this->nowHours<=23) {
            $greetingmessage = "Good morning";
        } elseif ($this->nowHours>=0 && $this->nowHours<6) {
            $greetingmessage = "Good afternoon";
        } elseif ($this->nowHours>=6 && $this->nowHours<12) {
            $greetingmessage = "Good evening";
        }
        return $greetingmessage;
    }
}

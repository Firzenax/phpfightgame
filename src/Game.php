<?php

class Game
{
    protected $Player1;
    protected $Player2;

    /**
     * Game constructor.
     * @param $Player1
     * @param $Player2
     */
    public function __construct()
    {
        $this->Player1 = new Player("Bob",30, 5, 2);
        $this->Player2 = new Player("Jimmy",28,7,4);
    }


    public function run()
    {
        echo $this->Player1->getNAME() + "     "+ $this->Player1->getLIFE() + "   " + $this->Player1->getAD() + "   " + $this->Player1->getDEF();
        echo $this->Player2->getNAME() + "     "+ $this->Player2->getLIFE() + "   " + $this->Player2->getAD() + "   " + $this->Player2->getDEF();
        while ($this->Player1->getLIFE() > 0 || $this->Player2->getLIFE() > 0){
            $this->OneTurn();
            echo $this->Player1->getNAME() + "     "+ $this->Player1->getLIFE() ;
            echo $this->Player2->getNAME() + "     "+ $this->Player2->getLIFE() ;
        }
        if($this->Player1->getLIFE()> 0)
        {
            echo $this->Player1->getNAME() + "has" + $this->Player1->getLIFE() + "left";
        }
        else
        {
            echo $this->Player2->getNAME() + "has" + $this->Player2->getLIFE() + "left";
        }
    }

    public function OneTurn()
    {
        $this->Player1->setLIFE($this->Player1->getLIFE() - ($this->Player2->getAD() - $this->Player1->getDEF()));
        $this->Player2->setLIFE($this->Player2->getLIFE() - ($this->Player1->getAD() - $this->Player2->getDEF()));
    }
}

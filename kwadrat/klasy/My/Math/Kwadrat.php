<?php

namespace My\Math;

class Kwadrat
{

	private $delta;
	private $x1;
	private $x2;
	private $x0;
	private $pierwdelta;
	/*
    private $licznik = 0;
    private $mianownik = 1;
	*/
    
	public function oblicz($a, $b,$c)
    {
	/*
		
        $this->licznik = $this->licznik * $b + $a * $this->mianownik;
        $this->mianownik = $this->mianownik * $b;

        return $this;*/
		
	$this->delta=($b*$b)-(4*$a*$c);
	$this->pierwdelta=bcsqrt($this->delta,3);
	
	if($this->delta<0)
	{
	echo('brak pierwiastkow');
	}
	
	else if($this->delta==0)
	{
	$this->x0=-$b/(2*$a);
	}
	else
	{
	$this->x1=(-$b-$this->pierwdelta)/(2*$a);
	$this->x2=(-$b+$this->pierwdelta)/(2*$a);
	}
	
		
    }

    public function __toString()
    {
		/*
        return $this->licznik . '/' . $this->mianownik;
		*/
		return $this->x1;
		
    }


}
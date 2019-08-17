<?php 
/**
 * 
 */
class Oil implements Product
{
	//from interface
	public function showPrice($price)
	{
		echo  " costs ".$price;
	}
	public function showWeight()
	{
		echo " Oil Weight is now shown ";
	}
}
<?php 

namespace AbdulAziz\Greeting;

class Greeting {
	public function greeting(String $sName)
	{
		return 'Hello ' . $sName . '! How are you ?';
	}
}
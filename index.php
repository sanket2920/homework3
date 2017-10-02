<?php
	$obj = new main();
	class main {
		private $text;
        	public function __construct () {
			$array = array (1,2,3,4,5);
			print('<h2>SANKET PEDNEKAR</h2></br> Week 3 : Strings and Arrays </br> <hr>');
	         	$this->text .= arrayFunction::printThis($array);
		        }

	}
	class arrayFunction {
		static public function printThis ($input) {
			return print_r($input);
			}
	}
?>

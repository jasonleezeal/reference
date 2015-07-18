<?php
	class Address{
		private function privat(){
			return "this is private class";
		}
		protected function protect(){
			return "this is protect class";
		}	
		
		public function publi(){
			return "this is sdsd class";
		}
	}
	
	
	class Customer extends Address{
		public  $CustomerName="Jason";
		public  $CustomerAge;
		
		public function Add(){
			return $this->publi();
			
			//return $this->connectdb('Customer');

		}

		private function connectdb(){
		
			return "hey";
		}
		

	
	}

	$Customer = new Customer();
	echo $Customer->publi();
	//echo $Customer->CustomerName;
	
	//echo $Customer->Address->addaddress;

?>
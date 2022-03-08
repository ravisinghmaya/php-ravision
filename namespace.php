<?php
namespace abc {
	class xyz{
		public function __construct(){
			echo "code in the abc namespace";
		}
	}
	class def{
		public function test(){
			echo "now here";
		}
	}
}
namespace {
	class xyz {
		public function __construct(){
			echo "code in the global namespace";
		}
		
	}
	
	$data = new abc\def();
	$data->test();
}


 
 
<?php 
// 	include_once 'bootstrap/bootstrap.php';
	require_once dirname(__DIR__).'/config/autoload.php';
	$autoloader=new autoloader();
?>

<?php 
class testCart extends  PHPUnit_Framework_TestCase{
	
	
	private $_ob;
	private $_trueAr;
	
	
	
	public function setUp(){
		
			$this->_ob=new HTMLtags();
			$this->_trueAr=array('string');
	}
	//************************************************************************
	public function testAddHTMLtag(){

		$tag='div';

		$div=$this->_ob->addHTMLtag($tag);
		
		foreach ($this->_trueAr as $values){
			$this->assertInternalType($values,$tag);
		}
		
	
// 		print_r($div);
		
	}//end of testAddHTMLtag()
	
	//************************************************************************
	public function testAddHTMLattr(){
		
		$div=$this->_ob->addHTMLtag('div');
		$div->addHTMLattr('id','myid');
		$div->addHTMLtag('form');
		$div->
		
		print_r($div);
		
	}//end of testAddHTMLattr()
	
	
	public function testPrintHTML(){
		
	}
	
	

	
	
}
?>
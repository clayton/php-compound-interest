<?php
			
	require_once(dirname(dirname(__FILE__))."/src/compound_interest.php");

	class CompoundInterestTest extends PHPUnit_Framework_TestCase
	{
		public function testSmallShortTermLowInterestQuarterlyCompoundedLoan()
		{
			$calc = new CompoundInterest(100,2,3,4);
			$this->assertEquals(106.16, $calc->calculate());
		}
		
		public function testLargeShortTermLowInterestQuarterlyCompoundedLoan()
		{
			$calc = new CompoundInterest(1000,2,3,4);
			$this->assertEquals(1061.60, $calc->calculate());
		}
		
		public function testLargeShortTermHighInterestQuarterlyCompoundedLoan()
		{
			$calc = new CompoundInterest(1000,2,50,4);
			$this->assertEquals(2565.78, $calc->calculate());
		}
		
		public function testLargeShortTermHighInterestMonthlyCompoundedLoan()
		{
			$calc = new CompoundInterest(1000,2,50,12);
			$this->assertEquals(2663.73, $calc->calculate());
		}
	}
	

?>
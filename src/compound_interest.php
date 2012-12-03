<?php
	class CompoundInterest
	{
		
		function CompoundInterest($principle, $term, $rate, $compoundings)
		{
			$this->principle = $principle;
			$this->term = $term;
			$this->rate = $rate;
			$this->compoundings = $compoundings;
		}
		
		public function calculate()
		{
			return $this->calculate_annual_compound_interest();
		}
		
		private function rate_as_percentage()
		{
			return $this->rate / 100;
		}
		
		private function exponent(){
			return $this->term * $this->compoundings;
		}
		
		private function rate_over_compoundings(){
			return ($this->rate_as_percentage() / $this->compoundings);
		}
		
		private function interest_calculation(){
			return pow((1 + $this->rate_over_compoundings()), $this->exponent());
		}
		
		private function calculate_annual_compound_interest(){
			$raw = $this->principle * $this->interest_calculation();
			return round($raw, 2);
		}
	}
?>
<?php
/**
 * Class to contain Methods to calculate future value
 *and display the results in a format on a second page
 * 
 * @author Chris Mullins
 */

 require_once('display_results.php');
class FutureValue {
    public $investment;
    private $interest_rate;
    private $years;
    
   
    
    public function __construct($investment, $interest_rate, $years) {
        $this->investment = "investment";
        $this->interest_rate = "interest";
        $this->years= "years";
    }
    
    
    public function getInvestment(){
        return $this->investment;
    }
    
    
    public function getInterest(){
        return $this->interest_rate;
    }
    
    
    public function getYears(){
        return $this->years;
    }
    
   public function validation($investment, $interest_rate, $years){
            // validate investment
    if ($investment === FALSE ) {
        $error_message = 'Investment must be a valid number.'; 
    } else if ( $investment <= 0 ) {$error_message = 'Investment must be greater than zero.'; 
    // validate interest rate
    } else if ( $interest_rate === FALSE )  {
        $error_message = 'Interest rate must be a valid number.'; 
    } else if ( $interest_rate <= 0 ) {
        $error_message = 'Interest rate must be greater than zero.'; 
    // validate years
    } else if ( $years === FALSE ) {
        $error_message = 'Years must be a valid whole number.';
    } else if ( $years <= 0 ) {
        $error_message = 'Years must be greater than zero.';
    } else if ( $years > 30 ) {
        $error_message = 'Years must be less than 31.';
    // set error message to empty string if no invalid entries
    } else {
        $error_message = ''; 
    }
    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit(); }
    }
    
     // function to calculate future_value
function calculateFutureValue($investment, $yearly_rate, $years){

    //calculate future value 
    $future_value = round($investment * pow(1 + ($yearly_rate/100), $years), 2);
    //return future_value
    return $future_value;
}
//function to format in a currency format
public static function getInvestmentFormat(){

    $currencyInvestment = number_format($this->investment, 2);
    //return format
    return $currencyInvestment;
}
// function to format to a percent
function getPercentFormat(){
    // format for decimal
    $yearlyRate = $this->years.'%';
    //return decimal
    return $yearlyRate;
}
}

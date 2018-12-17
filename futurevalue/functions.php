
<?php
/*this file is no longer part of the assignment*/
 // function to calculate future_value
function calculate_future_value($investment, $yearly_rate, $years){

    //calculate future value 
    $future_value = round($investment * pow(1 + ($yearly_rate/100), $years), 2);
    //return future_value
    return $future_value;
}
//function to format in a currency format
function get_currency_format($value){
    // formats to currency with one arg
    $currency_f = '$'.number_format($value, 2);
    //return format
    return $currency_f;
}
// function to format to a percent
function get_percent_format($value){
    // format for decimal
    $yearly_rate_f = $value.'%';
    //return decimal
    return $yearly_rate_f;
}


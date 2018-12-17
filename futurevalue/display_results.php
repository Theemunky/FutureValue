<?php
    // get the data from the form
    $investment = filter_input(INPUT_POST, 'investment',
        FILTER_VALIDATE_FLOAT);
    $interest_rate = filter_input(INPUT_POST, 'interest_rate',
        FILTER_VALIDATE_FLOAT);
    $years = filter_input(INPUT_POST, 'years',
        FILTER_VALIDATE_INT);
    
    $date = date('d/m/y');// format date
    
   //accesses functions 
    require_once('future_value.php');
    
    //calls the function to validate entries
    FutureValue::validation($investment,$interest_rate, $years);
   
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Future Value Calculator</h1>

        <label>Investment Amount:</label>
        <!-- display initial investment in currency format -->
        <span><?php echo $enterInvestment ?></span><br>

        <label>Yearly Interest Rate:</label>
        <!-- display inputted interest rate in percent format -->
        <span><?php echo $enterInterest ?></span><br>

        <label>Number of Years:</label>
        <span><?php echo $enterYear ?></span><br>

        <label>Future Value:</label>
        <!-- display calculations in currency format -->
        <span><?php echo get_currency_format($future_value); ?></span><br>
        <br>
        <?php echo "This calculation was done on ". date("d/m/y"); ?>
    </main>
</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab2 PHP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
            $WrongInfo = array();
            $PrincipalAmount = $_POST["PrincipalAmount"];
            $InterestRate = $_POST["InterestRate"];
            $YearsToDeposit = $_POST["YearsToDeposit"];
            $Name = $_POST["Name"];
            $PostalCode = $_POST["PostalCode"];
            $PhoneNumber = $_POST["PhoneNumber"];
            $EmailAddress = $_POST["EmailAddress"];
            $ContentMethod = $_POST["ContentMethod"];
            $When = $_POST["When"];  //echo var_dump($When);
        ?>
        <div class="container">
            <h1>Thank you, <?php echo"$Name"?>, for using our deposit calculator!</h1>
            <?php
                if (!isset($PrincipalAmount) || !isset($InterestRate) || !isset($YearsToDeposit) || !isset($Name) || !isset($PostalCode) || !isset($PhoneNumber) || !isset($EmailAddress) || !isset($ContentMethod) || !isset($When)) {
                    if (empty($PrincipalAmount) && !is_numeric($PrincipalAmount) && $PrincipalAmount <= 0 && !is_numeric($InterestRate)) {
                        $WrongInfo['pEmpty1'] = "The principal amount must be numeric and greater than 0";
                        $WrongInfo['pEmpty2'] = "The principal amount must be numeric and non-negative";
                    }
                    if (empty($PostalCode)) {
                        $WrongInfo['pEmpty3'] = "Postal code can not be blank";
                    }
                    if (empty($PhoneNumber)) {
                        $WrongInfo['pEmpty4'] = "Phone number can not be blank";
                    }
                    if ($ContentMethod == "phone") {
                        if (!isset($When)) {
                            $WrongInfo['pEmpty5'] = "When preferred contact methods is phone, you have to select one or more contact times";
                        }
                    }
                    echo "<p>However we can not process your request because of the following input errors:</p>";
                    foreach ($WrongInfo as $wInfo) {
                        echo "<ul>";
                        print("<li>$wInfo</li>");
                        echo "</ul>";
                    }
                }
                    else {
                        if ($ContentMethod == "phone"){
                            echo "<p>Our customer service department will call you tomorrow ";
                            echo "$When[0] ";
                            $i = 1;
                            while ($i < count($When)){
                                echo " or $When[$i] ";
                                $i++;
                            }
                            echo "at $PhoneNumber</p>";
                        }
                        else{
                            echo "<p>Our customer service department will mail you tomorrow ";
                            echo "$When[0] ";
                            $i = 1;
                            while ($i < count($When)){
                                echo " or $When[$i] ";
                                $i++;
                            }
                            echo " at $EmailAddress</p>";
                        }
                        echo "<p>The following is the result of the calculation:</p>";
                        echo "<table class=table table-striped>";    
                        echo ("<tr>
                            <td>Year</td>
                            <td>Principal at Year Start</td>
                            <td>Interest for the Year</td>
                        </tr>");
                        for ($i = 1; $i <= $YearsToDeposit; $i++){
                            echo "<tr>";
                            echo "<td>$i</td>";
                            echo "<td>";
                            printf("%1\$.2f", $PrincipalAmount);
                            echo "</td>";
                            $InterestForTheYear = $PrincipalAmount * ($InterestRate/100);
                            echo "<td>";
                            printf("%1\$.2f", $InterestForTheYear);
                            $PrincipalAmount = $PrincipalAmount + $InterestForTheYear;
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
            ?>
        </div>
    </body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bob's Budget</title>
</head>
<body>
<h1>Bob's Budget</h1>
    <table>
        <tr><th>Status</th><th></th><th>Value</th><th></th></tr>
        <?php
    $annualExpenses = [
        'vacations'=>1000,
        'carRepair'=>1000
    ];
    $monthlyExpenses = [
        'rent'=>1500,
        'utilities'=>200,
        'healthInsurance'=>200
    ];
    $grossSalary = 48150;
    $socialSecurity = $grossSalary * .062;
    // echo $socialSecurity;

    $incomeSegments = [[9700,.88], [29775,.78],[8675,.76]];
    $netIncome = ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]) + ($incomeSegments[2][0] * $incomeSegments[2][1]);
    echo "<tr><td>Total Net Income <td><td>$netIncome<td></tr>";

    $netIncome -= $socialSecurity;
    $annualIncome = $netIncome;
    echo "<tr><td>Annual Income before deduct <td><td>$annualIncome<td></tr>";
    

    $annualIncome -= $annualExpenses['vacations'];
    $annualIncome -= $annualExpenses['carRepair'];
    echo "<tr><td>Annual Income after calculate <td><td>$annualIncome<td></tr>";
   
    $monthlyIncome = $annualIncome/12;
    echo "<tr><td>Monthly income before deducting monthly Expense <td><td>$monthlyIncome<td></tr>";

    $monthlyIncome -= $monthlyExpenses['rent'];
    $monthlyIncome -= $monthlyExpenses['utilities'];
    $monthlyIncomeafter=$monthlyIncome - $monthlyExpenses['healthInsurance'];
    echo "<tr><td>Monthly Income After calculate <td><td>$monthlyIncomeafter<td></tr>";

    $weeklyIncome = $monthlyIncomeafter/4.33;
    echo "<tr><td>Weekly Income before calculate <td><td>$weeklyIncome<td></tr>";
   
    $weeklyExpenses = [
        'gas'=>25,
        'food'=>90,
        'entertainment'=>47
    ];

    $weeklyIncome -= $weeklyExpenses['gas'];
    $weeklyIncome -= $weeklyExpenses['food'];
    $weeklyIncome -= $weeklyExpenses['entertainment'];
    echo "<tr><td>Weekly income after calculte <td><td>$weeklyIncome<td></tr>";
   
    $leftoverMoney = $weeklyIncome*52;
    echo "<tr><td>Total money saving in a year <td><td>$leftoverMoney<td></tr>";
   
?>
    </table>
</body>
</html>
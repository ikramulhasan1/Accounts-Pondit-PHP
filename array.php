<?php

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";


// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";


// echo $_SERVER['SERVER_NAME'];

?>


<?php

// echo $_GET['name'];
// echo '<br>';
// echo $_GET['email'];
// echo '<br>';
// echo $_GET['password'];
?>

<?php
// $a = array(12, 45, 8, 89, 64, 'jhh', 85);
// print_r($a);


// $abIndex = $a[1] . '<br>';
// print_r($abIndex);
?>

<?php
// $color = array('red', 'green', 'blue', 'purple', 'yellow');

// $color[0] = 'red';
// $color[1] = 'blue';
// $color[2] = 'green';
// $color[3] = 'yellow';
// $color[4] = 'purple';
// $color[5] = 'skyblue';
// $color[6] = 'gray';
// $color[7] = 'white';

// echo '<ol>';
// for ($i = 0; $i < 7; $i++) {
//     echo '<li>' . $color[$i] . '</li>';
// }
// echo '</ol>';


// echo '<pre>';
// print_r($color);
// echo '</pre><br><br>';

// $red = $color[0];
// echo $red;



// $_age = array(
//     'fahim' => 24,
//     'rakib' => 29,
//     'debo' => 35,
//     'asik' => 22,
// );

// $_age['fahim'] = 55;

// echo '<pre>';
// echo var_dump($_age);
// echo '</pre>';


// echo $_age['fahim'] . '<br><br>';
// echo $_age['rakib'] . '<br><br>';
// echo $_age['debo'] . '<br><br>';
// echo $_age['asik'] . '<br><br>';

?>



<?php

// $friendsAge = [12, 21, 24, 17, 20, 19];

// foreach ($friendsAge as $value) {
//     echo 'Age ' . ' = ' . $value . '<br><br>';
// }

// $Fage = [
//     "fahim" => 24,
//     "Rakib" => 26,
//     "Mahim" => 22,
//     "Asik" => 20,
// ];

// foreach ($Fage as $val => $item) {
//     echo $val . ' = ' . $item . '<br>';
// }

?>


<?php
// $jobTable = [
//     ['Emp No.', 'Name', 'Designation', 'Salary'],
//     [1, 'Krishna', 'Manager', 50000],
//     [2, 'Salman', 'Salesman', 20000],
//     [3, 'Mohan', 'Computer Operator', 12000],
//     [4, 'Amir', 'Driver', 5000],
// ];
// echo '<pre>';
// print_r($jobTable[0]);
// echo '</pre>';

// for ($row = 0; $row <= 4; $row++) {
//     for ($col = 0; $col < 4; $col++) {
//         echo $jobTable[$row][$col] . ' ';
//     }
//     echo '<br>';
// }
// echo '<br><br><br>';

// echo "<table border = '1px solid' cellpadding= 2px>";
// foreach ($jobTable as $v1) {
//     echo "<tr>";
//     foreach ($v1 as $v2) {
//         echo "<td>" . $v2 . "</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";

?>



<?php
// $tableData = array(
//     array('Emp No.', 'Name', 'Designation', 'Salary'),
//     array(1, 'Krishna', 'Manager', 50000),
//     array(2, 'Salman', 'Salsman', 20000),
//     array(3, 'Mohan', 'Computer Oparetor', 12000),
//     array(4, 'Amir', 'Driver', 5000),

// );

// echo $tableData[0][1];

// $tableData = [
//     ['Emp No.', 'Name', 'Designation', 'Salary'],
//     [1, 'Krishna', 'Manager', 50000],
//     [2, 'Salman', 'Salsman', 20000],
//     [3, 'Mohan', 'Computer Oparetor', 12000],
//     [4, 'Amir', 'Driver', 5000],
// ];

// echo '<table border= "1px solid">';

// foreach ($tableData as list($id, $name, $designation, $salary)) {
//     echo '<tr>';
//     echo '<td>' . $id . '</td>', '<td>' . $name . '</td>', '<td>' . $designation . '</td>', '<td>' . $salary . '</td>';
//     echo '</tr>';
// }
// echo '</table>';
?>


<?php
// $food = ['apple', 'banana', 'mango', 'cummber', 'lichi'];
// echo count($food);

// $foods = array(
//     'frutes' => array(
//         'mango',
//         'banana',
//         'apple',
//         'lichi'
//     ),
//     'vagitable' => array('cummber', 'poteto', 'begun'),
// );

// // echo count($foods, 1);
// echo sizeof($foods['frutes'], 1);
?>



<!-- lenth -->
<?php
// $food = ['banana', 'mango', 'amoloki', 'kathal', 'lichi'];

// $lenth = count($food);
// for ($i = 0; $i < $lenth; $i++) {

//     echo $food[$i] . '<br>';
// }

?>



<?php
// $food = array('banana', 'mango', 'orange', '55', 'apple');
// // echo in_array('mango', $food);

// if (in_array(55, $food, true)) {
//     echo 'Find Successfuly.';

// } else {
//     echo "Can't Find.";
// }


// $food = array('banana', 'mango', 'orange', '55', 'apple');
// // echo in_array('mango', $food);

// echo array_search('orange', $food);
?>



<?php

// $food = array('banana', 'mango', 'red', 'blue', 'green');

// $color = array('black', 'white');

// $replace = array_replace($food, $color);

// echo '<pre>';
// print_r($replace);
// echo '</pre>';
?>





<?php
// $food = array('banana', 'mango', 'red', 'blue');

// array_pop($food);
// // array_push($food, 'green', 'purple');


// echo '<pre>';
// print_r($food);
// echo '</pre>';
?>
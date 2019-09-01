

/* Question 1 : Write a PHP script to display names and the salaries amounts, within a table. ou should use `echo ` to generate your table. */
//////////////////////// Your Code Here /////////////////////
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <div className="names"> 
  <ul>
  <li>Ahmad</li>
  <li>khaled</li>
  <li>m7md</li>
  </ul>
  <div>
    <div className="salary">
  <ul>
  <li>100</li>
  <li>200</li>
  <li>300</li>
  </ul>
    </div>
</head>
<body>
<?php
echo ""
?>

</body>
</html>



/*Question 2 : Write a PHP script which displays the capital and country name from the below array $c. as unordered list after sorting the array list by countries names  */
//////////////////////// Your Code Here /////////////////////
<?php
$countries = array( "Italy"=>"Rome",
              "Luxembourg"=>"Luxembourg",
               "Belgium"=> "Brussels",
               "Denmark"=>"Copenhagen",
               "Finland"=>"Helsinki",
               "France" => "Paris",
               "Slovakia"=>"Bratislava" ) ;
               ?>
               function capital (){
<?php
foreach($countries as $value =>$city){
    echo "countries is".$countries ;
?>

}

               }

/*Question 3 : Write a script to build the following stars pattern, using a nested for loop.

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*

*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
//for number of line     
for($i=1 ; $i<=5; $i++)
{
// num of stars     
for($s=1;$s<=i;$s++);
echo"*";
$s-- ;

}


    ?>
</body>
</html>

/*Question 4 : Write a PHP script to calculate the difference between two dates.
Input : 1981-11-04, 2013-09-04
Output : 31 years, 10 months, 11 days
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    function birthday($date_birth,$your_age){
    echo"($your_age-$date_birth)";


    }
    return birthday();

    ?>
</body>
</html>



/*Question 5 : Create a simple HTML form that accept the user name after submitting display the name using PHP echo statement under the form. */
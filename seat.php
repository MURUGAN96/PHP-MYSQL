<html>
    <head>
        <title>SEATING ARRANGEMENT</title>

        </head>
        <body style="background-color: cornflowerblue">
            <center>
<h3>Seating Arrangement</h3>
<form method="post"> 
Enter number of Test Cases <input type="number"/><br><br>   
Enter seat number 1 <input style="margin-left: 48px;" type="number" name="value1"/><br><br>
Enter seat number 2  <input style="margin-left: 48px;" type="number" name="value2"/><br><br>
<input  style="padding: 1%; margin-left: 14%;" type="submit" name="seating" value="Find"/>  
</form>
<?php  
function seat($num)  
{  
$rem=$num%12;  
    switch($rem){
        case 0:
        $face=$num-11;
        echo ("$face WS");
        break;
        case 1:
        $face=$num+11;
        echo ("$face WS");
        break;
        case 2:
        $face=$num+9;
        echo ("$face MS");
        break;
        case 3:
        $face=$num+7;
        echo ("$face AS");
        break;
        case 4:
        $face=$num+5;
        echo ("$face AS");
        break;
        case 5:
        $face=$num+3;
        echo ("$face MS");
        break;
        case 6:
        $face=$num+1;
        echo ("$face WS");
        break;
        case 7:
        $face=$num-1;
        echo ("$face WS");
        break;
        case 8:
        $face=$num-3;
        echo ("$face MS");
        break;
        case 9:
        $face=$num-5;
        echo ("$face AS");
        break;
        case 10:
        $face=$num-7;
        echo ("$face AS");
        break;
        case 11:
        $face=$num-9;
        echo ("$face MS");
        break;

    }
return 0;
}
if(isset($_POST['seating']))  
{  
seat($_POST['value1']);
echo"<br>";
seat($_POST['value2']);  
}
?>
</center>

            </body>
</html>
<html>

<head>
    <title>MagicalWell</title>

</head>

<body style="margin-top: 16%;
    background-color: cornflowerblue">
    <center>
        <h3>Magical Well</h3>
        <form method="post">
            Enter a
            <input style="margin-left:132px" type="number" name="a" />
            <br>
            <br> Enter b
            <input style="margin-left:132px" type="number" name="b" />
            <br>
            <br> Enter number of marbels (n)
            <input type="number" name="n" />
            <br>
            <br>
            <input style="padding: 1%; margin-left: 14%;" type="submit" name="magic" value="Find" />
        </form>
        <?php
        function Magical_Well($a,$b,$n){
        $sum=0;
        for ( $i=0; $i<$n; $i++ ){
           $sum=$sum+($a+$i)*($b+$i);
        }
    
        echo ("<h3>MagicalWell (a, b, n) =$sum </h3>");
    }
    if(isset($_POST['magic']))  
    {  
        Magical_Well ($_POST['a'],$_POST['b'],$_POST['n']);
    }
?>
    </center>
</body>

</html>
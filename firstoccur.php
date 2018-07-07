<html>

<head>
    <title>First Occurance</title>
</head>

<body style="margin-left: 40%;margin-top: 15%;
background-color: cornflowerblue">
    <h2 style="margin-left: 71px">First Occurance </h2>
    <form method="post">
        Enter the string
        <input type="text" name="DuplicateString" />
        <br>
        <br>
        <input style="margin-left: 21%" type="submit" name="string" value="Enter" />
    </form>
    <?php
        function unique_string($value)
        {
        for($i=0;$i<strlen($value);$i++)
        {
           
            $result[$value[$i]]=$value[$i];
        }
        echo("<h2 style='margin-left:22%'>");
        echo implode("",$result);
        }
        if(isset($_POST['string']))  
        {  
        unique_string(strtolower($_POST['DuplicateString']));  
         
        }
        
        ?>
</body>

</html>
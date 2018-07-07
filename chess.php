<html>

<head>
    <title>CHESS BOARD</title>
</head>

<body>
    <center>
        <h1>CHESS BOARD</h1>
        <table border="1px" style="border-collapse: collapse">
            <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $sum=$row+$col;
          if($sum%2==0)
		  {
          echo "<td height=60px width=60px bgcolor=black></td>";
          }
		  else
		  {
          echo "<td height=60px width=60px bgcolor=white></td>";
          }
          }
          echo "</tr>";
    }
          ?>
        </table>
    </center>
</body>

</html>
<html>

<head>
    <title>word2digit</title>

    <body style="margin-top: 16%;
    background-color: cornflowerblue">
        <center>
            <?php
echo word2digit("zero;three;five;six;eight;one");
echo "<br>";
function word2digit($word) {
    $value1 = explode(';',$word);
    $result = "<h2> The word2digit converted is </h2> " ;
    foreach($value1 as $value2){
        switch($value2){
            case 'zero':
                $result .= '0';
                break;
            case 'one':
                $result .= '1';
                break;
            case 'two':
                $result .= '2';
                break;
            case 'three':
                $result .= '3';
                break;
            case 'four':
                $result .= '4';
                break;
            case 'five':
                $result .= '5';
                break;
            case 'six':
                $result .= '6';
                break;
            case 'seven':
                $result .= '7';
                break;
            case 'eight':
                $result .= '8';
                break;
            case 'nine':
                $result .= '9';
                break;    
        }
    }
    return $result;
}
?>
        </center>
    </body>

</html>

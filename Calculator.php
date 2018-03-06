<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <style>
        #container {
            width: 180px;
            margin-left: auto;
            margin-right: auto;
        }
        .input {
            width:100%
        }
        .center{
            text-align:center;  
        }
    </style>

</head>
<body>
<div class="center">
    <h2>计算器</h2>
</div>
<div id = "container">
    <form method = 'post'>
            <input type="text" name = 'a'>
            <select name="ch">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
            </select>
            <input type="text" name = 'b'>
            <p>answer:</p>
            <input type="submit" value="等于">
    </form>
</div>
    <?php
    if (! empty($_POST['a'])) {
        $a = $_POST['a'];
    }
    if (! empty($_POST['b'])) {
        $b = $_POST['b'];
    }
    if (! empty($_POST['ch'])) {
        $ch = $_POST['ch'];
    }
   

    function add($a,$b) {
        return $a + $b;
    }
    function sub($a,$b) {
        return $a - $b;
    }

    function mul($a,$b) {
        return $a * $b;
    }
    function div($a,$b) {
        return $a / $b;
    }
    $fun;
    switch ($ch) {
        case "+":
            $fun = 'add';
            break;
        case "-":
            $fun = 'sub';
            break;
        case "*":
            $fun = "mul";
            break;
        case "/":
            $fun = "div";
            break;
        default:
            break;
    }
    function getAnswer($t1,$t2,$callback) {
        return $callback($t1, $t2);
    }

    $res = getAnswer($a, $b, $fun); 
    echo "<div>$res<div/>";
?>
</body>
</html>

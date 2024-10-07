<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="css/main.css" rel="stylesheet">
    <title>calculartor</title>
</head>
<body>

<!---------------- PHP------------------>
<?php
session_start();
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
            
        if(!$operation || (!$num1 && $num1 !='0') || (!$num2 && $num2 !='0')){
            $error_result ="not all fields are filled in";
        }else{
            if(!is_numeric($num1) || !is_numeric($num2)){
                $error_result = "operands must be number";
            
            }else{

            switch($operation){

            case 'plus':
            $result = $num1 + $num2;
            break;

            case 'minus':
            $result = $num1 - $num2;
            break;

            case 'multiply':
            $result = $num1 * $num2;
            break;
            
            case 'divide':
            if($num2 == '0'){
                $error_result = "can't divide by zero";
                }else{
                $result = $num1 / $num2;
                break;}

            default:
            $result = 7;
            break;  

            }

        }    

    }

}

?>
<!---------------- PHP------------------>
    <div class = "wrapper">
        <div class = "header">
            <div class = "container">
              <h1 class = "title">Calc</h1><small class = "title">by bless</small>
            </div>
        </div>
        <div class = "main">
            <div class ="content">
                <div class = "content_center">
            <div class = "info_container">
                        <p class = "info">example of a simple non-programmable calculator</p>
                    </div>
                <div class = "form">
                    <form action = "#" method ="post" class="form-calc">
                        <input type = "text" name = "num1" id = "num1" class = "numbers" placeholder="first number">
                        <select class = "operations"  name = "operation" id = "operation">
                            <option value='plus'>+</option>
                            <option value='minus'>-</option>
                            <option value='multiply'>×</option>
                            <option value='divide'>÷</option>
                        </select>
                        <input type = "text" name = "num2" id = "num2" class = "numbers" placeholder="second number">
                        <div class = "sub">
                        <input type = "submit" class = "submit_button" name = "submit" value = "answer">
                        </div>
                        <div class = "message">
                            <?php
                        if(isset($error_result)){
                        echo "<div class = 'error_message'>$error_result</div>";
                        unset($error_result);
                        }else{
                        echo "<div class = 'answer_message'>$result</div>";
                        }

                        ?>
                        </div>
                    </form>  
                </div>
                <div class = "info_container">
                        <a href = "https://drive.google.com/uc?export=download&id=11Roh_aGPMdEFjOxgeg-ALugsDa9LgQiU"><p class = "info">source code link</p></a>
                </div>
            </div>
            </div>
        </div>
        <div class = "footer">
            <div class = "footer_content">
                <div class = "icons">
                    <ul class = "icons_list">
                       <li class = "icon_item"><a href="https://github.com/bleassed"><img class = "img" src = "image/free-icon-font-github.png"></a></li> 
                       <li class = "icon_item"><a href="https://t.me/Buuuu_naxuy"><img class = "img" src = "image/free-icon-font-telegram.png"></a></li> 
                       <li class = "icon_item"><a href="https://vk.com/buuu_naxuy"><img class = "img" src = "image/free-icon-font-vk.png"></a></li> 
                    </ul>
                </div>
                <div class = "info_container"><p class = "info">social networks where you can contact me</p></div>
        </div>
    </div>
</body>
</html>
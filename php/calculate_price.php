<?php 
function loadInDB($hostname, $db, $username, $pass, $table, array $tableColumns, array $values){
    try{
        $conn = mysqli_connect($hostname, $username, $pass, $db);
        if(mysqli_connect_errno($conn)){
            throw new Exception('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
        }
        
        if(count($tableColumns) != count($values)){
            throw new Exception('Error of count values');
        }
        else{
           $tc = $tableColumns[0];
            for ($i = 1; $i < count($tableColumns); $i++){
                $tc = $tc.', '.$tableColumns[$i];
            }
        
            $v = '\''.$values[0].'\'';
            for ($i = 1; $i < count($values); $i++){
                $v = $v.', \''.$values[$i].'\'';
            }
        
            $sql = "INSERT INTO ".$table." (".$tc.") VALUES (".$v.")";

            mysqli_query($conn, $sql);
            echo "Entry added successfully"; 
        }        
    }
    catch(Exception $ex){
        echo $ex;
    }
    finally{
        mysqli_close($conn); 
    }
}
function getPOST(&$variable, $variableName){ // & нужен для обращения по ссылке, т.е. в данном случае переменная, передаваемая в функцию, будет изменена
    // и использовать return  в функции, а затем присваивать значение переменной не потребуется
    if(isset($_POST[$variableName])){ //  isset() позволяет определить, инициализирована ли переменная или нет
        $variable = strip_tags($_POST[$variableName]);//strip_tags исключает теги html
    }

}

$type = "не указано";
$brand = "не указано";
$model = "не указано";
$comment = "не указано";
$email = "не указано";
$call = "не указано";
$messenger = "не указано";
$messengerType = "не указано";
$date = date("d-m-Y");

$all = [$type, $brand, $model, $email, $call, $messenger, $messengerType];
$allNames = ["type", "brand", "model", "email", "call", "messenger", "messengerType"];

for($i = 0; $i < count($all); $i++){
    getPOST($all[$i], $allNames[$i]);
}

$all[]= $date;
$allNames[]= "date";

// TODO: для следующих ниже переменных нужно создать БД, таблицу 'calc_price', определить в ней необходимые поля ($allNames), а также определить роль для пользователя, задать ей логин и пароль
$hostname = 'localhost';
$db = 'multi';
$username = '';
$pass = '';
$table = 'calc_price';

loadInDB($hostname, $db, $username, $pass, $table, $allNames, $all);
?>
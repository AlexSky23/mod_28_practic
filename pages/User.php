<?php
class User {
    public $user = [];
    public function h1(){
        echo "<h1> Пользователь. </h1>";
    }
    public function form(){
        echo "<h4> Для заказа зарегистрируйтесь </h4><br>";
        echo '<form method="POST" name="reg" action="/pages/reg.php">
        Логин <input name="login" type="text" required><br><br>
        Пароль <input name="password" type="password" required><br><br>
        <input name="submit" type="submit" value="Войти">
        </form>';
    }
    public function Hello(){
        print_r("<h3>Hello User!</h3><br>");
    }
    public function setuser($log, $pass){
        array_push($this->user, array("user_id"=>$log, "password"=>$pass, "zakaz"=>""));
    }
    public function logout(){
        echo '<form method="POST" name="regout" action="/pages/regout.php">
        <input name="submit" type="submit" value="Выйти">
        </form>';
    }
    public function home(){
        echo '<form method="POST" name="regout" action="/index.php">
        <input name="submit" type="submit" value="На главную">
        </form>';
    }
}

$usr = new User();

$usr->user = array(
array("user_id"=>"QWE", "password"=>"qwe", "zakaz"=>""));

//$usr->home();
$usr->h1();
//проверка юзера
if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    $usr->Hello();
    echo "<br>";
    $usr->logout();
}
 else
 {
    $usr->form();
    $log = htmlspecialchars($_POST["login"]);
    $pass = htmlspecialchars($_POST["password"]);
    
    if(isset($_POST['submit']))
    {
        $usr->setuser($log, $pass);
    }
}

//print_r($usr->user);
?>




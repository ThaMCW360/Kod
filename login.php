<!DOCTYPE html>
<html>
<head>
<title>TheGamesAmongUs</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="theme.css">
<link rel="shortcut icon" href="favicon.ico" />
</head>
<body>

<header name="top">
<menu>
<a href="index.html">Mój Profil</a>
<a href="index.html">Artykuły</a>
<a href="index.html">Lista Gier</a>
<a href="index.html">O Nas</a>
<a href="index.html">Kontakt</a>
</menu>
<logpan>
<a href="login.php">Zaloguj</a>
<a href="login.php">Zarejestruj Się</a>
</logpan>
</header>
<searchpan>
<logo>
<img src="img/logo.png"></img>
</logo>
<search>
<form>
<input type="text" value="Wpisz szukaną frazę..." class="searchbar" onclick=" var tmp=this.value; this.value=null;"></input>
<input type="button" value="Szukaj" class="btn"></input>
</form>
</search>
</searchpan>
<main>
<topper>
<div class="login-panel">
<div id="l1">
Masz już konto? Zaloguj się.</br>
<hr id="hrf2">
<form  action="zaloguj.php"  method="POST">
<input type="text" value="Wpisz swój login lub adres email..." name="login" class="logbar_d" onclick=" var tmp=this.value; this.value=null;"></input></br>
<input type="password" value="Wpisz swoje hasło..." name="haslo" class="logbar_d" onclick=" var tmp=this.value; this.value=null;"></input></br>
<div class="remember">
<input type="checkbox" name="remember" value="true">Zapamiętaj hasło</input>
</div>
<div class="remind">
<a href="#">Reset hasła</a>
</div>
<div align="right">
<input type="submit" value="Wyślij" name="ok" class="btnlog"></input>
</div>
</form>

</div>
<div id="l2">
<l2head>Nie masz konta? Zarejestruj się.</br>
<hr id="hrf2h">
</l2head>
<form action="login.php" method="POST">
<input type="text" value="Twój adres email..." name="mail" class="logbar_d" onclick=" var tmp=this.value; this.value=null;"></input></br>

<input type="text" value="Wpisz swój nick..." name="login" class="logbar_k" onclick=" var tmp=this.value; this.value=null;"></input></br>
<input type="text" value="Wpisz swoje hasło..." name="haslo" class="logbar_k" onclick=" var tmp=this.value; this.value=null;"></input>

<hr id="hrreg">
<div class="register">
<input type="text" value="Nazwisko..." name="lname" class="logbar_d" onclick=" var tmp=this.value; this.value=null;"></input></br>

<input type="text" value="Imię..." name="imie" class="logbar_d" onclick=" var tmp=this.value; this.value=null;"></input></br>
Wybierz płeć
<input type="radio" name="sex" value="0">kobieta</input>

<input type="radio" name="sex" value="1">mężczyzna</input></br></br>
Data urodzenia 
  <input type="date" name="bday" max="2000-01-02""><br>

<hr id="hrreg">

<input type="checkbox" value="1">Zapoznałem się i akceptuję regulamin</input>

<div align="right">
<input type="submit" value="Wyślij" class="btnlog"></input>

<input type=hidden value='1' name='send'>
</div>
</div>

</form>

<?php
if($_SESSION['logged']) echo 'Już jestes zalogowany!';

$nick = $_POST['login'];
$haslo = $_POST['haslo'];
$mail = $_POST['mail']; 
$plec = $_POST['sex'];
$uro = $_POST['bday'];
$sent =$_POST['send'];


$user_reg_pass = "INSERT INTO GRACZ (HASLO) VALUES ('".addslashes($haslo)."')";
$user_reg_login = "INSERT INTO GRACZ (LOGIN) VALUES ('".addslashes($nick)."')";

 

if ($sent == 1){

    $connection = @mysql_connect('sql112.000a.biz', 'a000b_16095898', 'gamesamongus') 
    or die('Brak połączenia z serwerem MySQL'); 
  
    $db = @mysql_select_db('a000b_16095898_tgas', $connection) 
    or die('Nie mogę połączyć się z bazą danych'); 



$result = mysql_query("SELECT * FROM GRACZ WHERE LOGIN='$nick'") ;
 
        // jeśli już istnieje
        if(mysql_num_rows($result)!=0) echo 'Już istnieje konto z takim loginem!';
        // jeśli nie...
        else
        {

$haslo = md5($haslo);

     
    // dodajemy rekord do bazy 
    $ins = @mysql_query("INSERT INTO GRACZ SET LOGIN='$nick', HASLO='$haslo'"); 
     
    if($ins) echo "Rekord został dodany poprawnie"; 
    else echo "Błąd nie udało się dodać nowego rekordu"; 
     
    mysql_close($connection);
}

}


?>


</div>

</div>
</topper>
<div class="gry" align="center">
<h4 align="left">Lista Gier<hr id="hrf2" align="left"></h4>
<table><tr><td><a href="#"><img src="img/bf4.jpg"></img></a></td><td><a href="#"><img src="img/cod.jpg"></img></a></td><td> <a href="#"><img src="img/cs.jpg"></img></a></td></tr><tr><td>Battlefield 4</td><td>Call of Duty: Ghost</td><td>Counter Strike GO</td></tr><tr><td><a href="#"><img src="img/bf4.jpg"></img></a></td><td><a href="#"><img src="img/cod.jpg"></img></a></td><td> <a href="#"><img src="img/cs.jpg"></img></a></td></tr><tr><td>Battlefield 4</td><td>Call of Duty: Ghost</td><td>Counter Strike GO</td></tr></table>

</div>

<div class="trailers" align="center">
<h4 align="left">Zwiastuny<hr id="hrf2" align="left"></h4>
<table><tr></tr><tr><td><a href="#"><img src="img/bf4.jpg"></img></a></td><td><a href="#"><img src="img/cod.jpg"></img></a></td><td> <a href="#"><img src="img/cs.jpg"></img></a></td></tr><tr><td>Battlefield 4</td><td>Call of Duty: Ghost</td><td>Counter Strike GO</td></tr></table>

</div>


</main>


<footer id="f2">
<up>
<a href="#"><img src="img/up.png"></img></a>
</up>
<div id="z1">
TheGamesAmongUs</br>
<hr id="hrf2">
<a href="#">O nas</a></br>
<a href="#">Polityka prywatności</a></br>
<a href="#">Polityka cookies</a></br>
<a href="#">Kontakt</a></br>
<a href="#">Regulamin</a>
</div>
<div id="z2">
Mój Profil</br>
<hr id="hrf2">
<a href="#">Profil</a></br>
<a href="#">Zapamiętane Gry</a></br>
<a href="#">Ocenione Gry</a></br>
<a href="#">Wyloguj Się</a></br>
</div>
<div id="z3">
Kontakt</br>
<hr id="hrf2">
<a href="#">O nas</a></br>
<a href="#">Polityka prywatności</a></br>
<a href="#">Polityka cookies</a></br>
<a href="#">Kontakt</a></br>
</div>
<div id="z4">
Zapisz Się Do Newslettera</br>
<hr id="hrf2">
<div id="newsbar" align="right">
<form>
<input type="text" value="Wpisz swój adres email..." class="newslet"></input><br><br>
<input type="button" value="Wyślij" class="btn"></input>
</form>
</div>
</div>
</footer>
<footer id="f1"> <hr id="hrf1">TheGamesAmongUs 2015 | All rigths reserved</footer>
</body>

</html>

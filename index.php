<?php
header('Content-Type: text/html; charset=UTF-8');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!empty($_GET['save'])) {
        print('Rezyltat otpravlen.');
    }
    include('web3/form.php');
    exit();
}
include('web3.3/form.php');
$errors = FALSE;
if (empty($_POST['Name'])) {
    print('Name.<br/>');
    $errors = TRUE;
}
if (empty($_POST['Name'])) {
    print('email.<br/>');
    $errors = TRUE;
}
if (empty($_POST['Year'])) {
    print('Year.<br/>');
    $errors = TRUE;
}
if (empty($_POST['Sex'])) {
    print('Viberi pol.<br/>');
    $errors = TRUE;
}
if (empty($_POST['KolKon'])) {
    print('Konechnosti.<br/>');
    $errors = TRUE;
}
if (count($_POST['Sposobnosti']) == 0) {
    print('Sposobnosti.<br/>');
    $errors = TRUE;
}
if (empty($_POST['Biog'])) {
    print('Biografia.<br/>');
    $errors = TRUE;
}
if(isset($_POST['Checkbox']) && $_POST['Checkbox'] == 'Yes')
{
    $ch='Oznakomlen';
}
else
{
    print('Look at checkbox');
    $errors = TRUE;
}
if ($errors) {
    // При наличии ошибок завершаем работу скрипта.
    exit();
}
$sposobnosti='';

for($i=0;$i<count($_POST['Sposobnosti']);$i++){
    $sposobnosti .= $_POST['Sposobnosti'][$i] . ' ';
}

$user = 'u20399';
$pass = '2132705';
$db = new PDO('mysql:host=localhost;dbname=u20399', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

try {
    $stmt = $db->prepare("INSERT INTO form (Name,Year,EMail,Sex,KolKon,Sposobnosti,Biog,Checkbox) VALUES (:Name,:Year,:EMail,:Sex,:KolKon,:Sposobnosti,:Biog,:Checkbox)");
    $stmt -> execute(array('Name'=>$_POST['Name'],'Year'=>$_POST['Year'],'EMail'=>$_POST['EMail'],'Sex'=>$_POST['Sex'],'KolKon'=>$_POST['KolKon'],'Sposobnosti'=>$sposobnosti, 'Biog'=>$_POST['Biog'],'Checkbox'=>$ch));
}
catch(PDOException $e){
    print('Error : ' . $e->getMessage());
    exit();
}

header('Location: ?save=1');
?>
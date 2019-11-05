<?php


function comprova_usuari($username, $password) {
  $claus = array ('enric'=>"z67yeeui", 'carles'=>"sdfe3sdf",'Manel'=>"axeeeldds23",'prova'=>"prova");
  if(isset($claus[$username]) && $claus[$username]==$password) return true;
  else return false;  
}

if(isset($_POST['username']) && isset($_POST['password'])) { 	// Han enviat dades via POST
    $usuari = $_POST['username'];
    $password = $_POST['password'];
    
    if(comprova_usuari($usuari,$password)) {    // i dades són correctes
        
        session_start();
        // registrem el nom d'usuari a la sessió
        $_SESSION['username'] = $usuari;               
        // carreguem aplicació
        header('Location: index.php');
        
        
    } else {   // Username/Password incorrectes
       header('Location: formLogin.php?error=1');
    }
   
} else {     // 'Dades no enviades
    header('Location: formLogin.php?error=2');
}

?>

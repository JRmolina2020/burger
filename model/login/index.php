
  <?php
  include '../conexion/index.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $user = $con->real_escape_string(htmlentities($_POST['usuario']));
  $pass = $con->real_escape_string(htmlentities($_POST['contra']));
  $candado = ' ';
  $str_u = strpos($user, $candado);
  $str_p = strpos($pass, $candado);
  if (is_int($str_u)) {
  $user = '';
  }else{
  $usuario = $user;
  }
  if (is_int($str_p)) {
  $pass = '';
  }else{
  $pass2 = md5($pass);
  }
  if ($user == null && $pass == null) {
  header('location:../extend/alerta.php?msj=El formato no es correcto&c=salir&p=salir&t=error');
  }else{
  $sel = $con ->query("SELECT nick, nombre_usuario, nivel, correo_usuario, foto, pass FROM usuarios WHERE nick = '$usuario' AND pass = '$pass2' AND bloqueo = 1 ");
  $row = mysqli_num_rows($sel);
  if ($row == 1) {
  if($var = $sel-> fetch_assoc() ){
  $nick = $var['nick'];
  $contra = $var['pass'];
  $nivel = $var['nivel'];
  $correo = $var['correo_usuario'];
  $foto = $var['foto'];
  $nombre = $var['nombre_usuario'];
  }
  if($nick == $usuario && $contra == $pass2 && $nivel == 'ASISTENTE'){
  $_SESSION["nick"] = $nick;
  $_SESSION["nombre_usuario"] = $nombre;
  $_SESSION["nivel"] = $nivel;
  $_SESSION["correo_usuario"] = $correo;
  $_SESSION["foto"] = $foto;
  header('location:../../view/home/');
  }
  elseif($nick == $usuario && $contra == $pass2 && $nivel == 'ADMINISTRADOR'){
  $_SESSION["nick"] = $nick;
  $_SESSION["nombre_usuario"] = $nombre;
  $_SESSION["nivel"] = $nivel;
  $_SESSION["correo_usuario"] = $correo;
  $_SESSION["foto"] = $foto;
  header('location:../../view/home/');
  }
  
  else  {
  header('location:../../');
  }
  }else
  {
  header('location:../../');
  }
  }
  // cierra method
  }else{
  header('location:../../view/src/404.html');
  }
  ?>
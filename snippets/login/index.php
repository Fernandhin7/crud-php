<?php 
@session_start();
if(isset($_SESSION['user'])){
    header('location:../principal');
}
include "../includes/header.php"; 
?>

    <div class="container center">
        <div class="row" style="margin:0,auto;width:50%;">
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                    <span class="card-title">Iniciar Sesión</span>
                    <form autocomplete="off" @submit.prevent="login" id="inicioSesión">
                        <input type="email" name="email" placeholder="Correo Electrónico" require>
                        <input type="password" name="pass" placeholder="Contraseña" require pattern="[A-Za-z0-9]{8,15}">
                        <input type="submit" value="Entrar" class="btn blue">
                    </form>
                    </div>
                    <div class="card-action">
                        <a href="registro.php">Registrarse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "../includes/footerLogin.php"; ?>
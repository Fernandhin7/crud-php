<?php include "../includes/header.php"; ?>

    <div class="container center">
        <div class="row" style="margin:0,auto;width:50%;">
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                    <span class="card-title">Registro</span>
                    <form autocomplete="off" @submit.prevent="registro" id="formRegistro" enctype="multipart/form-data">
                        <input type="text" name="usuario" placeholder="Nombre de usuario" require pattern="[A-Za-z]{5-30}">
                        <input type="password" v-model="pass" name="pass" placeholder="Contraseña" require pattern="[A-Za-z0-9]{8,15}">
                        <input type="password" v-model="passC" placeholder="Confirmar Contraseña" require pattern="[A-Za-z0-9]{8,15}">
                        <input type="email" v-model="correo" name="email" placeholder="Correo Electrónico" @blur="validarCorreo" require>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Imagen de Perfil</span>
                                <input type="file" name="foto">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                        <input type="submit" value="Registrarse" :class="boton">
                    </form>
                    </div>
                    <div class="card-action">
                        <a href="index.php">Iniciar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "../includes/footerLogin.php"; ?>
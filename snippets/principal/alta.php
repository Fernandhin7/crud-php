<?php
include "../includes/header.php"; 
?>

    <div class="container center">
        <div class="row" style="margin:0,auto;width:80%;">
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Postea tu codigo</span>
                        <form autocomplete="off" @submit.prevent="alta" id="altaPost">
                            <input type="text" name="titulo" placeholder="Titulo" require>
                            <textarea name="codigo" class="materialize-textarea" placeholder="Escribe tu codigo"></textarea>
                            <textarea name="descripcion" class="materialize-textarea" placeholder="Escribe tu descripción"></textarea>
                            <select name="categoria" class="browser-default" require >
                                <option value=""disabled selected>Escoge una opción</option>
                                <option value="php">PHP</option>
                                <option value="css">CSS</option>
                                <option value="html5">HTML5</option>
                                <option value="mysql">MYSQL</option>
                                <option value="vue">VUE</option>
                            </select><br>
                            <input type="submit" value="Guardar" class="btn blue">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h5>RES {{respuesta}}</h5>

<?php include "../includes/footer.php"; ?>
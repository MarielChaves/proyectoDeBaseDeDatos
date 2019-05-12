<h1>Login</h1>
<style>
    h1{
    text-align: center;
    }
</style>
<?php
if (isset($_GET['error'])) {
    echo "<script language='JavaScript'>alert('El Usuario o Contraseña ingresados son incorrectos."
    . " Intente Nuevamente');</script>";
}
?>
<form class="col-md-4 mx-auto" id="frm-login" action="?c=Login&a=Autenticar" method="post" enctype="multipart/form-data" onsubmit="return enviar()">
<i onclick="toggle()" class="icon icon-tab"></i>
<div id="contenedorSocial">
            <div class="social-bar">
                <a href="https://www.facebook.com/clinicabiblica/" class="icon icon-facebook" target="_blank"></a>
                <a href="https://twitter.com/clinicabiblica?lang=es" class="icon icon-twitter" target="_blank"></a>
                <a href="https://www.youtube.com" class="icon icon-youtube" target="_blank"></a>
                <a href="https://www.instagram.com/?hl=es-la" class="icon icon-instagram" target="_blank"></a>
            </div>
        </div>
    <div class="form-group">
        <label>Identificacion</label>
        <input type="text" name="Identificacion" value="" class="form-control" placeholder="Ingrese un nombre de usuario" data-validacion-tipo="requerido|min:3" />
    </div>
    <div class="form-group">
        <label>Clave</label>
        <input type="password" name="Clave" value="" class="form-control" placeholder="Ingrese su clave" data-validacion-tipo="requerido|min:4" />
    </div>
    <div class="text-right">
       <br><br>
        <button class="btn btn-success btn-dark">INICIAR SESION</button>
    </div>
</form>

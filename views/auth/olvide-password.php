<h2 class="nombre-pagina">Olvide Password</h2>
<p class="descripcion-pagina">Restablece tu password escribiendo tu email a continuación</p>

<?php 
    include_once __DIR__."/../templates/alertas.php";
?>

<form method="POST" action="/olvide" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu Email"
        >
    </div>

    <input type="submit" class="boton" value="Enviar Instrucciones">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear Una?</a>
</div>
<form method="post" action="controller/controller_post_repo.php">
            <label for="user">Usuario</label>
            <input type="text" id="user" name="user" placeholder="Ingresa tu usuario">

            <label for="pass">Contraseña</label>
            <input type="password" id="pass" name="pass" placeholder="Ingresa tu contraseña">

            <label for="keywords">Palabras clave</label>
            <input type="text" id="keywords" name="keywords" placeholder="Ingresa tu contraseña">

            <label for="tittle">Título</label>
            <input type="text" id="tittle" name="tittle" placeholder="Ingresa tu contraseña">

            <label for="type">Tipo de dato</label>
            <input type="text" id="type" name="type" placeholder="Ingresa tu contraseña">

            
            <label for="value">Link</label>
            <input type="text" id="value" name="value" placeholder="Ingresa tu contraseña">

            <label for="public">Público/privado</label>
<select id="public" name="public">
  <option value="public">Público</option>
  <option value="private">Privado</option>
</select>

            <input type="submit" value="Ingresar">
          </form>
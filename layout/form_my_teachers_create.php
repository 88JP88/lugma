<form method="post" action="controller/controller_post_teachers.php">
            <label for="nombre">Nombres</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingresa nombre de estudiante">

            <label for="apellido">Apellidos</label>
            <input type="text" id="apellido" name="apellido" placeholder="Ingresa apellido de estudiante">

            <label for="type">Tipo de creación</label>
<select id="type" name="type">
  
  <option value="invite">Creación de perfil y Recurso</option>
   <option value="resource">Creación de recurso</option>
</select>

            <input type="submit" value="Crear Usuario">
          </form>
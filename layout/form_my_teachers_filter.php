<form method="post" action="controller/controller_filter_teachers.php" target="_blank" >
            <label for="word">Palabra de busqueda</label>
            <input type="text" id="word" name="word" placeholder="Ingresa palabra clave">

            <label for="type">Buscar por:</label>
<select id="type" name="type">
  
  <option value="name">Nombre</option>
   <option value="lname">Apellido</option>
   <option value="idown">ID Dueño</option>
   <option value="idres">ID Estudiante</option>
</select>

            <input type="submit" value="Buscar">
          </form>
<form method="post" action="controller/controller_post_task.php?profile=">
            

            <label for="task">Tarea</label>
            <input type="text" id="task" name="task" placeholder="Ingresa tu contraseña">

            <label for="sdate">Fecha Inicio:</label>
<input type="date" id="sdate" name="sdate">
<label for="fdate">Fecha Fin:</label>
<input type="date" id="fdate" name="fdate">

           
            <label for="prior">Prioridad</label>
<select id="prior" name="prior">
  <option value="1">Bajo</option>
  <option value="2">Medio</option>
  <option value="3">Alto</option>
  <option value="4">Urgente</option>
</select>

            <input type="submit" value="Agregar">
          </form>

          
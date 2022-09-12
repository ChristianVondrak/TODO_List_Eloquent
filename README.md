# TODO_List_Eloquent
Practicando con Eloquent y Composer

El projecto trata sobre una aplicacion web que debe gestionar una lista de tareas, dentro de ella puedes
-Agregar tarea.
-Modificar tarea.
-Eliminar tarea.
-Tildar una tarea como realizada.

La database de la aplicacion esta en App/database/todo_list.sql (Si deseas probar con una base de datos propia o configurar
la conexion actual esta misma se encuentra en App/database/database.php)


Proyecto realizado con HTML,CSS,PHP,JavaScript,AJAAX.
Librerias: https://packagist.org/packages/illuminate/database (ORM DATABASE)
           https://packagist.org/packages/nesbot/carbon (Manejo de fechas)
           https://packagist.org/packages/raveren/kint (Debugger)

**PARA DESPLEGAR EL PROYECTO**

- Abrir el Bash de Git o CMD
- Dirigirte al directorio del proyecto
- $ git clone https://github.com/ChristianVondrak/TODO_List_Eloquent.git
- Dirigirse a App/database/todo_list.sql dentro de su proyecto local
- Ejecutar tu servidor local, XAMP, WAMP, etc. Luego iniciar los servicios de Apache y MySQL
- Dirigirse a http://localhost/phpmyadmin/index.php
- Importar la base de datos (todo_list.sql) mencionado en los pasos anteriores
- Desde localholst abrir la ruta del archivo y listo.

# TODO_List_Eloquent
Practicando con Eloquent y Composer

El projecto trata sobre una aplicacion web que debe gestionar una lista de tareas, dentro de ella puedes
-Agregar tarea.
-Modificar tarea.
-Eliminar tarea.
-Tildar una tarea como realizada.

La database de la aplicacion esta en App/database/todo_list.sql (Si deseas probar con una base de datos propia o configurar
la conexion actual esta misma se encuentra en App/database/database.php)


Proyecto realizado con HTML,CSS,PHP,JavaScript.
Librerias:

- https://packagist.org/packages/illuminate/database (ORM DATABASE).
- https://packagist.org/packages/nesbot/carbon (Manejo de fechas).
- https://packagist.org/packages/raveren/kint (Debugger).
           
**REQUISITOS PARA DESPLEGAR**    

- Composer
- Git

**PARA DESPLEGAR EL PROYECTO**

- Dirigirte al directorio del proyecto
- $ git clone https://github.com/ChristianVondrak/TODO_List_Eloquent.git
- Ejecutar el comando composer install.
- Iniciar servidor local o externo.
- editar conexion para la base de datos en app/database/config.php.example
- Guardar config.php.example como config.php
- SQL de ejemplo app/database/todo_list.sql

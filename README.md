# REPORTERO WEB // JAVA BACKEND + SQLCMD + MYSQL + SQL SERVER + PHP + CSS + HTML
Página de inicio
![Login](https://github.com/LEOBAINI/REPORTERO/blob/master/images/IMG_login.JPG)
Página principal
![Login](https://github.com/LEOBAINI/REPORTERO/blob/master/images/principal.JPG)
Obtener query con detalles de incidentes
![Login](https://github.com/LEOBAINI/REPORTERO/blob/master/images/detalle.JPG)
Ejemplo de descarga de datos
![Login](https://github.com/LEOBAINI/REPORTERO/blob/master/images/datos_preview.JPG)
Log de queries ejecutadas
![Login](https://github.com/LEOBAINI/REPORTERO/blob/master/images/query_historicas.JPG)
Aplicativo web que permite emitir reportes mediante archivos.sql con queries precargadas.

El sistema toma como paramétros de ingreso los códigos de conexión, vía php se ingresan los reportes solicitados en MySql, al finalizar la carga, se ejecuta un proceso
Java MASTERQUERY.jar, que ingresa a la base de datos MySql, obtiene os reportes a ejecutar, y ejecuta el comando correspondiente de SQLCmd contra SqlServer
utilizando las credenciales provistas en el login, ejecuta el reporte, deja constancia del reporte ejecutado en la carpeta QUERY_OUTPUTS y registros en la base de datos MySql
como auditoria.
Luego con cada ejecución se llama al comando robocopy que borra los reportes zipeados cada 7 días, y una task programada en MySql limpia los registros mas antiguos de 30 días.

El sistema no requiere mantenimiento de ningún tipo, solo debe estar en ejecución php y MySql.
Cada pais tiene su propia carpeta de descargas, y muchos usuarios usan la misma carpeta de cada pais, no es una carpeta por usuario.
Si usuario a,b y c entran a Colombia por ejemplo, todos verán los reportes ejecutados por otros usuarios del mismo pais.

Si llegase a fallar en algún momento, se puede ejecutar de forma manual en el servidor, el archivo start.bat, que ejecutará manualmente MASTERQUERY.jar viendo lo que ocurre por consola
dandoindicios de la falla en caso de haber alguna.



/*Instalación*/
Para ser instalado, requiere.
Tener instalado MySql, crear el user admin/admin, luego importar la estructura de la base usando https://github.com/LEOBAINI/REPORTERO/tree/master/EstructuraMySql
Instalar SqlCmd
Instalar 7Zip
Descargar el repositorio completo, y colocarlo en la carpeta pública httdocs de php.


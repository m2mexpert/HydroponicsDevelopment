<?php
/**
* Web based SQLite management
* @package SQLiteManager
* @version $Id: spanish.inc.php,v 1.24 2006/04/14 15:16:52 freddy78 Exp $ $Revision: 1.24 $
*/
$charset = 'iso-8859-1';
$langSuffix = 'ca';
/**
* Fichier d'internationnalisation
*/
$itemTranslated = array(	"Table"		=> "Tabla",
							"View"		=> "Vista",
							"Trigger"	=> "Disparador",
							"Function"	=> "Funci�n");

$langueTranslated = array(	1=>"Franc�s", 2=>"Ingl�s", 3=>"Polaco",
							4=>"Alem�n", 5=>"Japon�s", 6=>"Italiano",
							7=>"Croata", 8=>"Portugu�s", 9=>"Netherlands", 
							10=>"Espa�ol", 11=>"Dan�s", 12=>"Chinese traditional", 
              				13=>"Chinese simplified");

$themeTranslated = array("default"=>"Default",  "PMA"=>"PMA", "jall"=>"JALL", "green"=>"Green");

$TEXT[1]	=	"Principal";
$TEXT[2]	=	"Bienvenido a <a href=\"http://www.sqlitemanager.org\" target=\"_blank\">SQLiteManager</a> versi�n";
$TEXT[3]	=	"Versi�n SQLite";
$TEXT[4]	=	"Documentaci�n SQLite";
$TEXT[5]	=	"Lenguaje SQL";
$TEXT[6]	=	"No se pudo cargar la extensi�n SQLite.";
$TEXT[7]	=	"No se pudo abrir la base de datos de configuraci�n de 'SQLite'.<br>Mensaje de error";
$TEXT[8]	=	"�La configuraci�n de la base de datos no tiene derechos de 'Escritura'!";
$TEXT[9]	=	"Error";
$TEXT[10]	=	"Funci�n";
$TEXT[11]	=	"Agregado";
$TEXT[12]	=	"Funci�n final";
$TEXT[13]	=	"N� Args";
$TEXT[14]	=	"Modificar";
$TEXT[15]	=	"Borrar";
$TEXT[16]	=	"Propiedades de nueva funci�n";
$TEXT[17]	=	"Propiedades de funci�n";
$TEXT[18]	=	"Error : Se deben rellenar todos los campos.";
$TEXT[19]	=	"Nombre";
$TEXT[20]	=	"Tipo";
$TEXT[21]	=	"Propiedades de Paso";
$TEXT[22]	=	"Propiedades Finales";
$TEXT[23]	=	"N� Args";
$TEXT[24]	=	"Atribuir esta funci�n a todas las bases de datos.";
$TEXT[25]	=	"Propiedades de tabla nueva";
$TEXT[26]	=	"Propiedades de tabla";
$TEXT[27]	=	"Campo";
$TEXT[28]	=	"Tipo";
$TEXT[29]	=	"Longitud";
$TEXT[30]	=	"Nulo";
$TEXT[31]	=	"Defecto";
$TEXT[32]	=	"Primaria";
$TEXT[33]	=	"Acci�n";
$TEXT[34]	=	"Seleccionar todas";
$TEXT[35]	=	"Deseleccionar todas";
$TEXT[36]	=	"Para la selecci�n";
$TEXT[37]	=	"�Est�s seguro que quieres borrar este/os campo/s?";
$TEXT[38]	=	"Administraci�n de �ndice(s)";
$TEXT[39]	=	"�Borrar el campo seleccionado?";
$TEXT[40]	=	"S�";
$TEXT[41]	=	"No";
$TEXT[42]	=	"Primario";
$TEXT[43]	=	"A�adir";
$TEXT[44]	=	"Campo(s)";
$TEXT[45]	=	"Al final de la tabla";
$TEXT[46]	=	"Al comienzo de la tabla";
$TEXT[47]	=	"Detr�s";
$TEXT[48]	=	"Insertar fila nueva";
$TEXT[49]	=	"Modificar fila";
$TEXT[50]	=	"Valor";
$TEXT[51]	=	"Guardar";
$TEXT[52]	=	"Insertar datos desde un fichero.";
$TEXT[53]	=	"Disparador";
$TEXT[54]	=	"Propiedades de nuevo disparador";
$TEXT[55]	=	"Propiedades de disparador";
$TEXT[56]	=	"Moment";
$TEXT[57]	=	"Evento";
$TEXT[58]	=	"En";
$TEXT[59]	=	"Condici�n";
$TEXT[60]	=	"Paso";
$TEXT[61]	=	"Propiedades";
$TEXT[62]	=	"Propiedades de nueva vista";
$TEXT[63]	=	"Propiedades de vista";
$TEXT[64]	=	"�No se ha ejecutado ninguna query!";
$TEXT[65]	=	"�Recurso de conexi�n err�neo!";
$TEXT[66]	=	"Ejecutar una o mas <b>petici�n(es)";
$TEXT[67]	=	"<i>O</i> desde un fichero sql";
$TEXT[68]	=	"Formato de Query : Est�ndar (sqlite)";
$TEXT[69]	=	"Ejecutar";
$TEXT[70]	=	"la query ha sido ejecutada.";
$TEXT[71]	=	"La l�nea ha sido modificada.";
$TEXT[72]	=	"Estructura";
$TEXT[73]	=	"Examinar";
$TEXT[74]	=	"SQL";
$TEXT[75]	=	"Insertar";
$TEXT[76]	=	"Exportar";
$TEXT[77]	=	"Vaciar";
$TEXT[78]	=	"�Borrar funci�n?";
$TEXT[79]	=	"�Vaciar tabla?";
$TEXT[80]	=	"�Borrar tabla?";
$TEXT[81]	=	"A�adir";
$TEXT[82]	=	"�Borrar vista?";
$TEXT[83]	=	"�Borrar disparador?";
$TEXT[84]	=	"Opciones";
$TEXT[85]	=	"�Borrar base de datos? S�lo se eliminar� la suscripci�n, el fichero de base de datos no se borrar�.";
$TEXT[86]	=	"Borrar";
$TEXT[87]	=	"A�adir nueva Vista";
$TEXT[88]	=	"A�adir nuevo Disparador";
$TEXT[89]	=	"A�adir nueva funci�n";
$TEXT[90]	=	"query SQL";
$TEXT[91]	=	"Nombre de Clave";
$TEXT[92]	=	"�Borrar �ndice?";
$TEXT[93]	=	"A�adir un �ndice en";
$TEXT[94]	=	"columna(s)";
$TEXT[95]	=	"Ignorar";
$TEXT[96]	=	"A�adir en la clave";
$TEXT[97]	=	"Crear una Vista con nombre ";
$TEXT[98]	=	"desde esta query.";
$TEXT[99]	=	"Error l�nea(s)";
$TEXT[100]	=	"Probablemente sea un problema de derechos de escritura de la configuraci�n de la base de datos";
$TEXT[101]	=	"Imposible crear o leer esta base de datos";
$TEXT[102]	=	"�Se deben rellenar todos los campos!";
$TEXT[103]	=	"A�adir nueva base de datos";
$TEXT[104]	=	"Direcci�n";
$TEXT[105]	=	"El array de datos no tiene un numero constante de elementos";
$TEXT[106]	=	"Los par�metros de la clase constructora 'Grid' deben ser arrays";
$TEXT[107]	=	"La array de alineaci�n de columna no tiene un n�mero correcto de elementos.";
$TEXT[108]	=	"La alineaci�n de celdas debe ser : 'izquierda', 'derecha' o 'centro'";
$TEXT[109]	=	"Los par�metros para la alineaci�n de columnas debe ser un array";
$TEXT[110]	=	"Los par�metros para el formato de columnas debe ser un array";
$TEXT[111]	=	"La array de orden de columnas no tiene un numero correcto de elementos.";
$TEXT[112]	=	"Los par�metros de orden deben ser 0=sin orden, O 1=ordenado.";
$TEXT[113]	=	"Los par�metros para el orden de columnas debe ser un array";
$TEXT[114]	=	"La cadena de formato para el c�lculo de columna est� vac�o.";
$TEXT[115]	=	"El t�tulo es obligatorio para un c�lculo de columnas.";
$TEXT[116]	=	"Los par�metros de la clase constructora 'ArrayToGrid' deben ser arrays.";
$TEXT[117]	=	"Imposible contar el n�mero de filas";
$TEXT[118]	=	"N� filas";
$TEXT[119]	=	"A�adir";
$TEXT[120]	=	"Seguro que desea borrar";
$TEXT[121]	=	"el";
$TEXT[122]	=	"la";
$TEXT[123]	=	"�Vaciar tabla?";
$TEXT[124]	=	"Solo Estructura";
$TEXT[125]	=	"Estructura y Datos";
$TEXT[126]	=	"Solo Datos";
$TEXT[127]	=	"Completar inserts";
$TEXT[128]	=	"enviar";
$TEXT[129]	=	"Host";
$TEXT[130]	=	"Tiempo de Generaci�n";
$TEXT[131]	=	"Base de datos";
$TEXT[132]	=	"Table structure for table";
$TEXT[133]	=	"Volgado de datos para la tabla";
$TEXT[134]	=	"Ver estructura para vista";
$TEXT[135]	=	"User Defined Function properties";
$TEXT[136]	=	"Filas";
$TEXT[137]	=	"Fichero";
$TEXT[138]	=	"Remplazar contenido";
$TEXT[139]	=	"Separador";
$TEXT[140]	=	"Inserci�n de datos desde un fichero de texto formateado";
$TEXT[141]	=	"Idioma";
$TEXT[142]	=	"Tema";
$TEXT[143]	=	"Subir Base de datos";
$TEXT[144]	=	"No se puede acceder al directorio de Subida.<br>(Modifica la constante 'DEFAULT_DB_PATH' en el fichero 'include/user_defined.inc.php')";
$TEXT[145]	=	"Explicar SQL";
$TEXT[146]	=	"Administraci�n las bases de datos anexadas";
$TEXT[147]	=	"No tienes permiso para acceder aqu�.Debes introducir un login y una contrase�a v�lidos.";
$TEXT[148]	=	"Login incorrecto.";
$TEXT[149]	=	"La contrase�a no corresponde con el login.";
$TEXT[150]	=	"Versi�n de PHP";
$TEXT[151] = 	"Despues de grabar";
$TEXT[152] = 	"Volver a la p�gina anterior";
$TEXT[153] = 	"Insertar otra fila";
$TEXT[154] = 	"The configuration database is in read only.<br>Some feature of SQLiteManager can't work correctly.";
$TEXT[155] = 	"La base de datos es de solo escritura.";
$TEXT[156] = 	"Privilegios";
$TEXT[157] = 	"Cambiar contrase�a";
$TEXT[158] = 	"Desconexi�n";
$TEXT[159] = 	"A�adir usuario";
$TEXT[160] = 	"A�adir grupo";
$TEXT[161] = 	"Vista de Usuarios";
$TEXT[162] = 	"Vista de Grupos";
$TEXT[163] = 	"Nombre";
$TEXT[164] = 	"Login";
$TEXT[165] = 	"Grupo";
$TEXT[166] = 	"execSQL";
$TEXT[167] = 	"data";
$TEXT[168] = 	"exportar";
$TEXT[169] = 	"vaciar";
$TEXT[170] = 	"borrar";
$TEXT[171] = 	"Contrase�a Antigua incorrecta.";
$TEXT[172] = 	"La contrase�a y la configuraci�n son diferentes.";
$TEXT[173] = 	"La contrase�a ha sido cambiada";
$TEXT[174] = 	"Click aqu� para re-entrar";
$TEXT[175] = 	"Vieja :";
$TEXT[176] = 	"Nueva :";
$TEXT[177] = 	"Confirmaci�n :";
$TEXT[178] = 	"Informaci�n";
$TEXT[179] = 	"Localizaci�n :";
$TEXT[180] = 	"Tama�o :";
$TEXT[181] = 	"Derechos :";
$TEXT[182] = 	"�ltima modificaci�n :";
$TEXT[183] = 	"Comprobaci�n de Integridad";
$TEXT[184] = 	"Limpiar";
$TEXT[185] = 	"Sincronizaci�n por Defecto :";
$TEXT[186] = 	"Tama�o de cache por defecto (cache_size) :";
$TEXT[187] = 	"APAGADO ";
$TEXT[188] = 	"NORMAL ";
$TEXT[189] = 	"COMPLETO ";
$TEXT[190]	= 	"Acceso al panel de control";
$TEXT[191]	= 	"Nombre";
$TEXT[192]	= 	"Login";
$TEXT[193]	= 	"";
$TEXT[194]	= 	"S�";
$TEXT[195]	= 	"No";
$TEXT[193]	= 	"Almacenamiento Temporal por Defecto";
$TEXT[194]	= 	"DEFECTO";
$TEXT[195]	= 	"MEM�RIA";
$TEXT[196]	= 	"FICHERO";
$TEXT[197]	= 	"�nico";
$TEXT[198]	= 	"�ndice";
$TEXT[197]	= 	"�nico";
$TEXT[198]	= 	"�ndice";
$TEXT[199]	= 	"Datos";
$TEXT[200]	= 	"Aplicar";
$TEXT[201]	=	"Selecci�n";
$TEXT[202]	=	"Operador";
$TEXT[203]	=	"condici�n adicional :";
$TEXT[204]	=	"Y";
$TEXT[205]	=	"O";
$TEXT[206]	=	"Seleccionar";
$TEXT[207]	=	"Buscar";
$TEXT[208]	=	"Renombrar";
$TEXT[209]	=	"Mover";
$TEXT[210]	=	"Copiar";
$TEXT[211]	=	"Plugins";
$TEXT[212]	=	"Mantenimiento";
$TEXT[213]	=	"Tiempo de petici�n :";
$TEXT[214]	=	"mseg.";
$TEXT[215]	=	"Renombrar tabla a :";
$TEXT[216]	=	"Mover tabla a (database.table) :";
$TEXT[217]	=	"Copiar tabla a (database.table) :";
$TEXT[218]	=	"A�adir DROP TABLE";
$TEXT[219]	=	"Guardar como Nueva Fila";
$TEXT[220]	=	"Guardar";
$TEXT[221]	=	"Tipo de Guardar";
$TEXT[222]  =   "Operation";
$TEXT[223]  =   "Update";
$TEXT[224]  =   "Tip : You can use internal PHP functions in your queries !";
$TEXT[225]  =   "Truncated text";
$TEXT[226]  =   "Full text";
$TEXT[227]  =   "-- select --";
$TEXT[228]  =   "(s)";
$TEXT[229]  =   "Version";
$TEXT[230]  =   "(new database)";
$TEXT[231]  =   "Official SQliteManager Homepage";
$TEXT[232]  =   "The database can't be attain";
$TEXT[233]  =   "Trigger structure";
?>
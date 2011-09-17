<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'backup', language 'es', branch 'MOODLE_21_STABLE'
 *
 * @package   backup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['autoactivedescription'] = 'Escoja si desea o no hacer copias de seguridad automáticas. Si selecciona el modo manual las copias de seguridad automáticas  sólo serán posibles mediante el "script" CLI. También se pueden hacer manualmente medinate la línea de comandos o a través de cron.';
$string['autoactivedisabled'] = 'Desactivado';
$string['autoactiveenabled'] = 'Activado';
$string['autoactivemanual'] = 'Manual';
$string['automatedbackupschedule'] = 'Programación';
$string['automatedbackupschedulehelp'] = 'Decida en qué días de la semana se realizarán las copias de seguridad automatizadas';
$string['automatedbackupsinactive'] = 'Las copias de seguridad programadas han sido habilitadas por el administrador del sitio';
$string['automatedbackupstatus'] = 'Estado de la Copia de Seguridad programada';
$string['automatedsettings'] = 'Configuración de la copia de seguridad automática.';
$string['automatedsetup'] = 'Copia de seguridad programada';
$string['automatedstorage'] = 'Almacén de copias de seguridad automáticas';
$string['automatedstoragehelp'] = 'Elija la ubicación donde desea almacenar las copias de seguridad automáticas';
$string['backupactivity'] = 'Copia de seguridad actividad: {$a}';
$string['backupcourse'] = 'Copia de seguridad curso: {$a}';
$string['backupcoursedetails'] = 'Detalles del curso';
$string['backupcoursesection'] = 'Sección: {$a}';
$string['backupcoursesections'] = 'Secciones del curso';
$string['backupdate'] = 'Fecha realización';
$string['backupdetails'] = 'Detalles de la copia de seguridad';
$string['backupdetailsnonstandardinfo'] = 'El archivo seleccionado no es un archivo de copia de seguridad estándar de Moodle. El proceso de restauración intentará convertir el archivo de copia de seguridad en el formato estándar y luego restaurarlo.';
$string['backupformat'] = 'Formato';
$string['backupformatimscc'] = 'IMS Common Cartridge';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Formato desconocido';
$string['backupmode'] = 'Modo';
$string['backupmode10'] = 'General';
$string['backupmode20'] = 'Importar';
$string['backupmode30'] = 'Central de cursos';
$string['backupmode40'] = 'Mismo sitio';
$string['backupmode50'] = 'Automatizado';
$string['backupmode60'] = 'Convertido';
$string['backupsection'] = 'Copia de seguridad sección de curso: Copia de seguridad curso: {$a}';
$string['backupsettings'] = 'Copia de seguridad de parámetros de configuración';
$string['backupsitedetails'] = 'Detalles del sitio';
$string['backupstage16action'] = 'Continuar';
$string['backupstage1action'] = 'Siguiente';
$string['backupstage2action'] = 'Siguiente';
$string['backupstage4action'] = 'Ejecutar copia de seguridad';
$string['backupstage8action'] = 'Continuar';
$string['backuptype'] = 'Tipo';
$string['backuptypeactivity'] = 'Actividad';
$string['backuptypecourse'] = 'Curso';
$string['backupversion'] = 'Copia de seguridad versión';
$string['cannotfindassignablerole'] = 'El rol {$a} en el archivo de copia de seguridad no se puede mapear a ninguno de los roles que usted puede asignar.';
$string['choosefilefromactivitybackup'] = 'Zona de actividad de la copia de seguridad';
$string['choosefilefromactivitybackup_help'] = 'Cuando se realiza una copia de seguridad de las actividades utilizando los valores preestablecidos, los archivos de la copia se guardan aquí.';
$string['choosefilefromautomatedbackup'] = 'Copias de seguridad automáticas';
$string['choosefilefromautomatedbackup_help'] = 'Contiene las copias de seguridad automáticas';
$string['choosefilefromcoursebackup'] = 'Zona de copia de seguridad de curso';
$string['choosefilefromcoursebackup_help'] = 'Cuando se realiza una copia de seguridad de un curso utilizando los valores preestablecidos, los archivos de la copia se guardan aquí.';
$string['choosefilefromuserbackup'] = 'Zona de copia de seguridad privada de usuario';
$string['choosefilefromuserbackup_help'] = 'Cuando la copia de seguridad de los cursos tiene marcada la opción "Hacer anónima la información de usuario", los archivos de copia de seguridad se guardan aquí';
$string['configgeneralactivities'] = 'Ajusta los valores por defecto para incluir actividades en una copia de seguridad.';
$string['configgeneralanonymize'] = 'Si se activa, toda la información relativa a los usuarios será anónima por defecto.';
$string['configgeneralblocks'] = 'Ajusta los valores por defecto para incluir bloques en la copia de seguridad.';
$string['configgeneralcomments'] = 'Ajusta los valores por defecto para incluir comentarios en la copia de seguridad.';
$string['configgeneralfilters'] = 'Ajusta los valores por defecto para incluir filtros en la copia de seguridad.';
$string['configgeneralhistories'] = 'Ajusta los valores por defecto para incluir el historial del usuario dentro de una copia de seguridad.';
$string['configgenerallogs'] = 'Si se activa, se incluirán por defecto registros en las copias de seguridad.';
$string['configgeneralroleassignments'] = 'Si se activa, los roles asignados por defecto serán también copiados.';
$string['configgeneraluserfiles'] = 'Ajusta los valores por defecto para incluir los archivos de usuario en las copias de seguridad.';
$string['configgeneralusers'] = 'Ajusta los valores por defecto para incluir a los usuarios en las copias de seguridad.';
$string['configgeneraluserscompletion'] = 'Si se activa, la información del grado de avance de los usuarios se incluirá por defecto en las copias de seguridad.';
$string['confirmcancel'] = 'Cancelar copia de seguridad';
$string['confirmcancelno'] = 'Permanecer';
$string['confirmcancelquestion'] = '¿Está seguro de que desea cancelar?
Cualquier información que haya introducido se perderá.';
$string['confirmcancelyes'] = 'Cancelar';
$string['coursecategory'] = 'Categoría en la que se restaurará el curso';
$string['courseid'] = 'ID original';
$string['coursesettings'] = 'Ajustes del curso';
$string['coursetitle'] = 'Título';
$string['currentstage1'] = 'Ajustes iniciales';
$string['currentstage16'] = 'Completar';
$string['currentstage2'] = 'Ajustes del esquema';
$string['currentstage4'] = 'Confirmación y revisión';
$string['currentstage8'] = 'Ejecutar copia de seguridad';
$string['dependenciesenforced'] = 'Su configuración ha sido modificada debido a dependencias incumplidas';
$string['enterasearch'] = 'Introduzca un criterio de búsqueda';
$string['errorfilenamemustbezip'] = 'El nombre que se introduzca debe ser un archivo ZIP y con la extensión MBZ';
$string['errorfilenamerequired'] = 'Debe introducir un nombre de archivo válido para esta copia de seguridad';
$string['errorinvalidformat'] = 'Formato de backup desconocido';
$string['errorinvalidformatinfo'] = 'El archivo seleccionado no es un archivo de copia de seguridad de Moodle válido y no puede ser restaurado.';
$string['errorminbackup20version'] = 'Este archivo de copia de seguridad ha sido creado con una versión de desarrollo de copia de seguridad de Moodle ({$a->backup}) y se requiere al menos la versión {$a->min}. Por lo tanto, no puede ser restaurado.';
$string['errorrestorefrontpage'] = 'No está permitido restaurar en la página principal.';
$string['executionsuccess'] = 'El archivo de copia de seguridad se creó con éxito';
$string['filename'] = 'Nombre de archivo';
$string['generalactivities'] = 'Incluir actividades';
$string['generalanonymize'] = 'Información anónima';
$string['generalbackdefaults'] = 'Configuración por defecto de la copia de seguridad';
$string['generalblocks'] = 'Incluir bloques';
$string['generalcomments'] = 'Incluir comentarios';
$string['generalfilters'] = 'Incluir filtros';
$string['generalgradehistories'] = 'Incluir historiales';
$string['generalhistories'] = 'Incluir historiales';
$string['generallogs'] = 'Incluir archivos de \'log"';
$string['generalroleassignments'] = 'Incluir asignaciones de rol';
$string['generaluserfiles'] = 'Incluir archivos de usuario';
$string['generalusers'] = 'Incluir usuarios';
$string['generaluserscompletion'] = 'Incluir información del grado de avance del usuario';
$string['importbackupstage16action'] = 'Continuar';
$string['importbackupstage1action'] = 'Siguiente';
$string['importbackupstage2action'] = 'Siguiente';
$string['importbackupstage4action'] = 'Realizar la importación';
$string['importbackupstage8action'] = 'Continuar';
$string['importcurrentstage0'] = 'Selección de cursos';
$string['importcurrentstage1'] = 'Configuración inicial';
$string['importcurrentstage16'] = 'Completo';
$string['importcurrentstage2'] = 'Configuración del esquema';
$string['importcurrentstage4'] = 'Confirmación y revisión';
$string['importcurrentstage8'] = 'Realizar la importación';
$string['importfile'] = 'Importar un archivo de copia de seguridad';
$string['importsuccess'] = 'Importación completada. Pulse para volver al curso.';
$string['includeactivities'] = 'Incluido:';
$string['includeditems'] = 'Elementos incluidos:';
$string['includesection'] = 'Sección {$a}';
$string['includeuserinfo'] = 'Datos de usuario';
$string['locked'] = 'Bloqueado';
$string['lockedbyconfig'] = 'Este ajuste ha sido bloqueado por la configuración predeterminada de la copia de seguridad';
$string['lockedbyhierarchy'] = 'Bloqueado por las dependencias';
$string['lockedbypermission'] = 'Usted no tiene permisos suficientes para cambiar esta configuración';
$string['managefiles'] = 'Gestionar archivos de copia de seguridad';
$string['moodleversion'] = 'Versión de Moodle';
$string['moreresults'] = 'Hay demasiados resultados, escriba una búsqueda más específica.';
$string['nomatchingcourses'] = 'No hay cursos para mostrar';
$string['norestoreoptions'] = 'No hay categorías o cursos que pueda restaurar';
$string['originalwwwroot'] = 'URL de la copia de seguridad';
$string['previousstage'] = 'Anterior';
$string['qcategory2coursefallback'] = 'La categoría de preguntas "{$a->name", originalmente el contexto de caegoría sistema/curso, serán creadas en el contexto curso al ser restauradas.';
$string['qcategorycannotberestored'] = 'La categoría de preguntas "{$a-> name}" no puede ser creada por restauración';
$string['question2coursefallback'] = 'La categoría de preguntas "{$a->name}", originalmente en la categoría de contesto sistema/curso dentro del archivo de copia de seguridad, se creará en el contexto del curso al ser restaurada';
$string['questionegorycannotberestored'] = 'Las preguntas "{$a->name}" no pueden crearse por restauración';
$string['restoreactivity'] = 'Actividad de la restauración';
$string['restorecourse'] = 'Restaurar curso';
$string['restorecoursesettings'] = 'Configuración del curso';
$string['restoreexecutionsuccess'] = 'Se ha restaurado el curso con éxito. Si pulsa en el botón \'Continuar\' podrá ver el curso que ha restaurado.';
$string['restorenewcoursefullname'] = 'Nombre del nuevo curso';
$string['restorenewcourseshortname'] = 'Nombre corto del nuevo curso';
$string['restorenewcoursestartdate'] = 'Nueva fecha de inicio';
$string['restorerolemappings'] = 'Restaurar mapeos de rol';
$string['restorerootsettings'] = 'Restaurar ajustes';
$string['restoresection'] = 'Restaurar sección';
$string['restorestage1'] = 'Confirmar';
$string['restorestage16'] = 'Revisar';
$string['restorestage16action'] = 'Ejecutar restauración';
$string['restorestage1action'] = 'Siguiente';
$string['restorestage2'] = 'Destino';
$string['restorestage2action'] = 'Siguiente';
$string['restorestage32'] = 'Proceso';
$string['restorestage32action'] = 'Continuar';
$string['restorestage4'] = 'Ajustes';
$string['restorestage4action'] = 'Siguiente';
$string['restorestage64'] = 'Completar';
$string['restorestage64action'] = 'Continuar';
$string['restorestage8'] = 'Esquema';
$string['restorestage8action'] = 'Siguiente';
$string['restoretarget'] = 'Destino de la restauración';
$string['restoretocourse'] = 'Restaurar al curso:';
$string['restoretocurrentcourse'] = 'Restaurar en este curso';
$string['restoretocurrentcourseadding'] = 'Fusionar la copia de segurida con este curso';
$string['restoretocurrentcoursedeleting'] = 'Borrar el contenido del curso actual y despúes restaurar';
$string['restoretoexistingcourse'] = 'Restaurar en un curso existente';
$string['restoretoexistingcourseadding'] = 'Fusionar la copia de seguridad del curso con el curso existente';
$string['restoretoexistingcoursedeleting'] = 'Borrar el contenidodel curso actual y después restaurar';
$string['restoretonewcourse'] = 'Restaurar como curso nuevo';
$string['restoringcourse'] = 'Restauración del curso iniciada';
$string['restoringcourseshortname'] = 'restaurando';
$string['rootsettingactivities'] = 'Incluir actividades';
$string['rootsettinganonymize'] = 'Hacer anónima la información de usuario';
$string['rootsettingblocks'] = 'Incluir bloques';
$string['rootsettingcomments'] = 'Incluir comentarios';
$string['rootsettingfilters'] = 'Incluir filtros';
$string['rootsettinggradehistories'] = 'Incluir historial de calificaciones';
$string['rootsettinglogs'] = 'Incluir archivos "log" de cursos';
$string['rootsettingroleassignments'] = 'Incluir asignaciones de rol de usuario';
$string['rootsettings'] = 'Configuración de la copia de seguridad';
$string['rootsettinguserfiles'] = 'Incluir archivos de usuario';
$string['rootsettingusers'] = 'Incluir usuarios matriculados';
$string['rootsettinguserscompletion'] = 'Incluir detalles del grado de avance del usuario';
$string['sectionactivities'] = 'Actividades';
$string['sectioninc'] = 'Incluido en la copia de seguridad (sin información de usuario)';
$string['sectionincanduser'] = 'Incluido en la copia de seguridad junto con la información del usuario';
$string['selectacategory'] = 'Seleccione una categoría';
$string['selectacourse'] = 'Seleccione un curso';
$string['setting_course_fullname'] = 'Nombre del curso';
$string['setting_course_shortname'] = 'Nombre corto del curso';
$string['setting_course_startdate'] = 'Fecha de comienzo del curso';
$string['setting_overwriteconf'] = 'Sobreescribir la configuración del curso';
$string['storagecourseandexternal'] = 'Área de ficheros de copia de seguridad y carpeta específica';
$string['storagecourseonly'] = 'Área de archivos de copia de seguridad';
$string['storageexternalonly'] = 'Especifique directorio para las copias de seguridad automáticas';
$string['totalcategorysearchresults'] = 'Total de categorías: {$a}';
$string['totalcoursesearchresults'] = 'Cursos totales: {$a}';

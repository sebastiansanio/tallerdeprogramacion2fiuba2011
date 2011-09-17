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
 * Strings for component 'role', language 'es', branch 'MOODLE_21_STABLE'
 *
 * @package   role
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addinganewrole'] = 'Agregando nuevo rol';
$string['addingrolebycopying'] = 'Agregando nuevo rol basado en {$a}';
$string['addrole'] = 'Añadir un nuevo rol';
$string['advancedoverride'] = 'Anular rol avanzado';
$string['allow'] = 'Permitir';
$string['allowassign'] = 'Permitir asignar roles';
$string['allowed'] = 'Permitido';
$string['allowoverride'] = 'Permitir anular roles';
$string['allowroletoassign'] = 'Permitir a los usuarios con el rol {$a->fromrole} asignar el rol {$a->targetrole}';
$string['allowroletooverride'] = 'Permitir a los usuarios con el rol {$a->fromrole} anular el rol {$a->targetrole}';
$string['allowroletoswitch'] = 'Permitir a los usuarios con el rol {$a->fromrole} cambiar al rol {$a->targetrole}';
$string['allowswitch'] = 'Permitir cambios de rol';
$string['allsiteusers'] = 'Todos los usuarios del sitio';
$string['archetype'] = 'Arquetipo de rol';
$string['archetypecoursecreator'] = 'ARQUETIPO: Creador de cursos';
$string['archetypeeditingteacher'] = 'ARQUETIPO: Profesor con permiso de edición';
$string['archetypefrontpage'] = 'ARQUETIPO: Usuario identificado en la página principal';
$string['archetypeguest'] = 'ARQUETIPO: Invitado';
$string['archetype_help'] = 'El rol arquetipo determina los permisos cuando un se restablece un rol a su valor por defecto. También determina los permisos nuevos para el papel cuando el sitio se actualiza.';
$string['archetypemanager'] = 'ARQUETIPO: Gestor';
$string['archetypestudent'] = 'ARQUETIPO: Estudiante';
$string['archetypeteacher'] = 'ARQUETIPO: Profesor sin permiso de edición';
$string['archetypeuser'] = 'ARQUETIPO: Usuario identificado';
$string['assignanotherrole'] = 'Asignar otro rol';
$string['assignedroles'] = 'Roles asignados';
$string['assignerror'] = 'Error al asignar el rol {$a->role} al usuario {$a->user}.';
$string['assignglobalroles'] = 'Asignar roles globales';
$string['assignmentcontext'] = 'Contexto de asignación';
$string['assignmentoptions'] = 'Opciones de asignación';
$string['assignrole'] = 'Asignar rol';
$string['assignrolenameincontext'] = 'Asignar rol \'{$a->role}\' en {$a->context}';
$string['assignroles'] = 'Asignar roles';
$string['assignroles_help'] = '<p>
Al asignar un rol a un usuario en un contexto, usted
le está garantizando los permisos propios de ese rol
en el contexto actual y en todos los contextos de
rango \'inferior\'.
</p>

<p>
Contextos:
<ol>
<li>Sitio/Sistema</li>
<li>Categorías de cursos</li>
<li>Cursos</li>
<li>Bloques y Actividades</li>
</ol>
</p>

<p>
Así, si le da a un estudiante el rol de usuario de un
curso, tendrá ese rol para ese curso, pero también para
todos los bloques y actividades dentro del curso. Sus
permisos reales dependerán de otros roles y anularán
los que han sido definidos.
</p>

<p>
Vea también
<a href="help.php?file=roles.html">Roles</a>,
<a href="help.php?file=contexts.html">Contextos</a>,
<a href="help.php?file=permissions.html">Permisos</a> y
<a href="help.php?file=overrides.html">Anulaciones</a>.
</p>';
$string['assignrolesin'] = 'Asignar roles en {$a}';
$string['assignrolesrelativetothisuser'] = 'Asignar roles relativos a este usuario';
$string['backtoallroles'] = 'Regresar a la lista de todos los roles';
$string['backup:anonymise'] = 'Hacer anónimos los datos de usuario en la copia de seguridad';
$string['backup:backupactivity'] = 'Copia de seguridad de las actividades';
$string['backup:backupcourse'] = 'Copia de seguridad de los cursos';
$string['backup:backupsection'] = 'Copia de seguridad de las secciones';
$string['backup:backuptargethub'] = 'Copia de seguridad del hub';
$string['backup:backuptargetimport'] = 'Copia de seguridad de las importaciones';
$string['backup:configure'] = 'Configurar las opciones de la copia de seguridad';
$string['backup:downloadfile'] = 'Descargar archivos de las áreas de copia de seguridad';
$string['backup:userinfo'] = 'Copia de seguridad de los datos de usuario';
$string['block:edit'] = 'Editar la configuración de un bloque';
$string['block:view'] = 'Ver bloque';
$string['blog:associatecourse'] = 'Asociar entradas de blog con cursos';
$string['blog:associatemodule'] = 'Asociar entradas de blog con módulos de actividad';
$string['blog:create'] = 'Crear nuevas entradas de blog';
$string['blog:manageentries'] = 'Editar y gestionar entradas';
$string['blog:manageexternal'] = 'Editar y gestionar blogs externos';
$string['blog:manageofficialtags'] = 'Gestionar marcas oficiales';
$string['blog:managepersonaltags'] = 'Gestionar marcas personales';
$string['blog:search'] = 'Buscar entradas de blog';
$string['blog:view'] = 'Ver entradas de blog';
$string['blog:viewdrafts'] = 'Ver entradas de blog en borrador ';
$string['calendar:manageentries'] = 'Gestionar cualquier entrada de calendario';
$string['calendar:managegroupentries'] = 'Gestionar entradas de calendario de grupo';
$string['calendar:manageownentries'] = 'Gestionar entradas de calendario propias';
$string['capabilities'] = 'Habilidades';
$string['capability'] = 'Habilidad';
$string['category:create'] = 'Crear categorías';
$string['category:delete'] = 'Eliminar categorías';
$string['category:manage'] = 'Gestionar categorías';
$string['category:update'] = 'Actualizar categorías';
$string['category:viewhiddencategories'] = 'Ver categorías ocultas';
$string['category:visibility'] = 'Ver categorías ocultas';
$string['checkglobalpermissions'] = 'Compruebe los permisos del sistema';
$string['checkpermissions'] = 'Compruebe los permisos';
$string['checkpermissionsin'] = 'Compruebe los permisos en {$a}';
$string['checksystempermissionsfor'] = 'Compruebe los permisos de {$a->fullname}';
$string['checkuserspermissionshere'] = 'Compruebe los permisos que tiene {$a->fullname} in este {$a->contextlevel}';
$string['chooseroletoassign'] = 'Por favor, seleccione un rol a asignar';
$string['cohort:assign'] = 'Agregar y eliminar miembros de cohorte';
$string['cohort:manage'] = 'Crear, eliminar y mover cohortes';
$string['cohort:view'] = 'Ver cohortes de todo el sitio';
$string['comment:delete'] = 'Eliminar comentarios';
$string['comment:post'] = 'Enviar comentarios';
$string['comment:view'] = 'Leer comentarios';
$string['community:add'] = 'Usar el bloque comunidad para buscar hubs y encontrar cursos';
$string['community:download'] = 'Descargar un curso del bloque comunidad';
$string['confirmaddadmin'] = '¿Realmente desea agregar al usuario <strong>{$a}</strong> como nuevo administrador del sitio?';
$string['confirmdeladmin'] = '¿Realmente desea eliminar al usuario <strong>{$a}</strong> de la lista de administradores del sitio?';
$string['confirmroleprevent'] = '¿Realmente desea eliminar <strong>{$a->role}</strong> de la lista de roles con la capadidad de {$a->cap} en el contexto {$a->context}?';
$string['confirmroleunprohibit'] = '¿Realmente desea eliminar <strong>{$a->role}</strong> de la lista de roles a los que se prohibe el privilegio de {$a->cap} en el contexto {$a->context}?';
$string['confirmunassign'] = '¿Está seguro de que quiere eliminar este rol a este usuario?';
$string['confirmunassignno'] = 'Cancelar';
$string['confirmunassigntitle'] = 'Confirmar cambio de rol';
$string['confirmunassignyes'] = 'Eliminar';
$string['context'] = 'Contexto';
$string['course:activityvisibility'] = 'Ocultar/mostrar actividades';
$string['course:bulkmessaging'] = 'Enviar un mensaje a mucha gente';
$string['course:changecategory'] = 'Cambiar la categoría del curso';
$string['course:changefullname'] = 'Cambiar el nombre completo del curso';
$string['course:changeidnumber'] = 'Cambiar el número ID del curso';
$string['course:changeshortname'] = 'Cambiar el nombre corto del curso';
$string['course:changesummary'] = 'Cambiar el resumen del curso';
$string['course:create'] = 'Crear cursos';
$string['course:delete'] = 'Eliminar cursos';
$string['course:enrolconfig'] = 'Configurar ejemplos de matriculación en cursos';
$string['course:enrolreview'] = 'Revisar matriculaciones del curso';
$string['course:manageactivities'] = 'Gestionar actividades';
$string['course:managefiles'] = 'Gestionar archivos';
$string['course:managegrades'] = 'Gestionar calificaciones';
$string['course:managegroups'] = 'Gestionar grupos';
$string['course:managescales'] = 'Gestionar escalas';
$string['course:markcomplete'] = 'Marcar los usuarios como completos al completar un curso';
$string['course:publish'] = 'Publicar un curso en el hub';
$string['course:request'] = 'Solicitar nuevos cursos';
$string['course:reset'] = 'Reiniciar curso';
$string['course:sectionvisibility'] = 'Controlar visibilidad de sección';
$string['course:setcurrentsection'] = 'Ajustar sección actual';
$string['course:update'] = 'Actualizar ajustes de curso';
$string['course:useremail'] = 'Habilitar/deshabilitar dirección email';
$string['course:view'] = 'Ver cursos sin participación';
$string['course:viewcoursegrades'] = 'Ver calificaciones de curso';
$string['course:viewhiddenactivities'] = 'Ver actividades ocultas';
$string['course:viewhiddencourses'] = 'Ver cursos ocultos';
$string['course:viewhiddensections'] = 'Ver secciones ocultas';
$string['course:viewhiddenuserfields'] = 'Ver campos de usuario ocultos';
$string['course:viewparticipants'] = 'Ver participantes';
$string['course:viewscales'] = 'Ver escalas';
$string['course:visibility'] = 'Ocultar/mostrar cursos';
$string['createrolebycopying'] = 'Crear un nuevo rol copiando {$a}';
$string['createthisrole'] = 'Crear este rol';
$string['currentcontext'] = 'Contexto actual';
$string['currentrole'] = 'Rol actual';
$string['defaultrole'] = 'Rol por defecto';
$string['defaultx'] = 'Valor predeterminado: {$a}';
$string['defineroles'] = 'Definir roles';
$string['deletecourseoverrides'] = 'Eliminar todas las anulaciones del curso';
$string['deletelocalroles'] = 'Eliminar todas las asignaciones de rol locales';
$string['deleterolesure'] = '¿Está seguro de que quiere eliminar el rol "{$a->name} ({$a->shortname})"?</p><p>Actualmente este rol está asignado a {$a->count} usuarios.';
$string['deletexrole'] = 'Eliminar el rol {$a}';
$string['duplicaterole'] = 'Duplicar este rol';
$string['duplicaterolesure'] = '¿Está seguro de que quiere duplicar el rol "{$a->name} ({$a->shortname})"?</p>';
$string['editingrolex'] = 'Editando el rol \'{$a}\'';
$string['editrole'] = 'Editar rol';
$string['editxrole'] = 'Editar el rol \'{$a}\'';
$string['errorbadrolename'] = 'Nombre de rol incorrecto';
$string['errorbadroleshortname'] = 'Nombre corto de rol incorrecto';
$string['errorexistsrolename'] = 'El nombre de este rol ya existe';
$string['errorexistsroleshortname'] = 'El nombre de este rol ya existe';
$string['existingadmins'] = 'Administradores actuales del sitio';
$string['existingusers'] = '{$a} usuarios existentes';
$string['explanation'] = 'Explicación';
$string['extusers'] = 'Usuarios existentes';
$string['extusersmatching'] = 'Usuarios existentes que coinciden con \'{$a}\'';
$string['filter:manage'] = 'Gestionar configuración de filtros locales';
$string['frontpageuser'] = 'Usuario identificado en la página principal';
$string['frontpageuserdescription'] = 'Todos los usuarios identificados en el curso de la página principal';
$string['globalrole'] = 'Rol del sistema';
$string['globalroleswarning'] = '¡ATENCIÓN! Cualquier rol que asigne desde esta página se aplicará a los usuarios asignados en todo el sitio, incluyendo la página principal y todos los cursos.';
$string['gotoassignroles'] = 'Ir a Asignar roles en este {$a->contextlevel}';
$string['gotoassignsystemroles'] = 'Ir a Asignar roles del sistema';
$string['grade:edit'] = 'Editar calificaciones';
$string['grade:export'] = 'Exportar calificaciones';
$string['grade:hide'] = 'Ocultar/mostrar calificaciones de los ítems';
$string['grade:import'] = 'Importar calificaciones';
$string['grade:lock'] = 'Bloquear calificaciones de los ítems';
$string['grade:manage'] = 'Gestionar elementos de calificación';
$string['grade:manageletters'] = 'Gestionar calificaciones con letra';
$string['grade:manageoutcomes'] = 'Gestionar resultados de calificaciones';
$string['grade:override'] = 'Pasar calificaciones por alto';
$string['grade:unlock'] = 'Desbloquear calificaciones o elementos';
$string['grade:view'] = 'Ver calificaciones propias';
$string['grade:viewall'] = 'Ver calificaciones de otros usuarios';
$string['grade:viewhidden'] = 'Ver calificaciones ocultas al usuario';
$string['hidden'] = 'Ocultas';
$string['highlightedcellsshowdefault'] = 'Las celdas marcadas en la siguiente tabla muestran los permisos predeterminados para cada tipo de rol, en base al \'tipo de rol heredado del nivel superior\'.';
$string['highlightedcellsshowinherit'] = 'Las celdas marcadas en la siguiente tabla muestra el permiso (si lo hay) que se hereda. Además de los permisos que realmente desea cambiar, debe dejar todo listo para los permisos a heredar.';
$string['inactiveformorethan'] = 'inactivo durante más de {$a->timeperiod}';
$string['ingroup'] = 'en el grupo "{$a->group}"';
$string['inherit'] = 'Heredar';
$string['legacy:admin'] = 'ROL HEREDADO: Administrador';
$string['legacy:coursecreator'] = 'ROL HEREDADO: Creador de cursos';
$string['legacy:editingteacher'] = 'ROL HEREDADO: Profesor (editor)';
$string['legacy:guest'] = 'ROL HEREDADO: Invitado';
$string['legacy:student'] = 'ROL  HEREDADO: Estudiante';
$string['legacy:teacher'] = 'ROL HEREDADO: Profesor (no editor)';
$string['legacytype'] = 'Tipo de rol heredado';
$string['legacy:user'] = 'ROL HEREDADO: Usuario identificado';
$string['listallroles'] = 'Listar todos los roles';
$string['localroles'] = 'Roles asignados localmente';
$string['manageadmins'] = 'Gestionar los administradores del sitio';
$string['manager'] = 'Gestor';
$string['managerdescription'] = 'Los gestores pueden acceder a los cursos y modificarlos, por lo general no participan en los cursos.';
$string['manageroles'] = 'Gestionar roles';
$string['maybeassignedin'] = 'Tipos de contexto en que puede asignarse este rol';
$string['morethan'] = 'Más de {$a}';
$string['multipleroles'] = 'Roles múltiples';
$string['my:configsyspages'] = 'Configurar plantillas del sistema para las páginas de Mi Moodle';
$string['my:manageblocks'] = 'Gestionar bloques de página Mi Moodle';
$string['neededroles'] = 'Roles con permiso';
$string['nocapabilitiesincontext'] = 'Permisos no disponibles en este contexto';
$string['noneinthisx'] = 'Nombre en este {$a}';
$string['noneinthisxmatching'] = 'No hay usuarios coincidentes con \'{$a->search}\' en este {$a->contexttype}';
$string['noroleassignments'] = 'Este usuario no tiene ninguna tarea de rol en ningún lugar de este sitio';
$string['noroles'] = 'No hay roles';
$string['notabletoassignroleshere'] = 'Usted no puede asignar ningún rol aquí';
$string['notabletooverrideroleshere'] = 'No tiene privilegios para anular los permisos de ningún rol aquí';
$string['notes:manage'] = 'Gestionar calificaciones';
$string['notes:view'] = 'Ver notas';
$string['notset'] = 'No ajustado';
$string['overrideanotherrole'] = 'Anular otro rol';
$string['overridecontext'] = 'Anular contexto';
$string['overridepermissions'] = 'Anular permisos';
$string['overridepermissionsforrole'] = 'Reemplazar los permisos del rol \'{$a->role}\' en el contexto \'{$a->context}\'';
$string['overridepermissions_help'] = 'Las anulaciones de permisos posibilitan permitir o impedir los privilegios seleccionados en un contexto específico.
';
$string['overridepermissionsin'] = 'Anular permisos en {$a}';
$string['overrideroles'] = 'Anular roles';
$string['overriderolesin'] = 'Anular roles en {$a}';
$string['overrides'] = 'Anulaciones';
$string['overridesbycontext'] = 'Anulaciones (por contexto)';
$string['permission'] = 'Permiso';
$string['permission_help'] = 'Los permisos son los ajustes con los que usted otorga la posibilidad de llevar a cabo determinadas acciones.
Hay 4 opciones:

* No ajustado
* Permitir: se concede el permiso para actuar.
* Prevenir: se retira el permiso, incluso aunque se admita en un contexto más alto.
* Prohibir: se retira por completo el permiso y no se puede anular en ningún nivel más bajo (más específico).';
$string['permissions'] = 'Permisos';
$string['permissionsforuser'] = 'Permisos para {$a}';
$string['permissions_help'] = '<p>
Los permisos son los ajustes con los que usted otorga la posibilidad de llevar a cabo determinadas acciones.
</p>

<p>
Por ejemplo, una de ellas es "Comenzar nuevos debates" (en los foros).
</p>

<p>
En cada rol, usted puede decidir si da permiso para hacer algo o no optando por uno de los cuatro valores siguientes:
</p>

<dl>
<dt>HEREDAR</dt>
<dd>Éste es generalmente el ajuste por defecto. Se trata de un ajuste neutro que significa "usar cualquier ajuste que el usuario ya tenga". Si alguien tiene un rol asignado (e.g., en un curso) que tiene permiso para una determinada acción, entonces el permiso real será el mismo que tenía en contextos de nivel más alto (e.g., nivel de categoría, nivel de sitio). En última instancia, si el permiso no se concede en ningún nivel, el usuario no tendrá permiso para ejecutar esa acción.</dd>

<dt>PERMITIR</dt>
<dd>Si selecciona esta opción, estará otorgando permiso para llevar a cabo la acción a las personas a las que asigne el rol. Este permiso se aplica al contexto al que el rol está asignado, además de cualesquiera otros contextos "inferiores". Por ejemplo, si el rol corresponde a un estudiante asignado a un curso, el estudiante podrá "iniciar nuevos debates" en todos los foros del curso, A MENOS QUE algún foro contenga una anulación o una nueva tarea para la que se haya seleccionado PREVENIR o PROHIBIR.</dd>

<dt>PREVENIR</dt>
<dd>Cuando elige esta opción, usted está retirando el permiso para ejecutar la acción, aun cuando los usuarios con ese rol tuvieran tal permiso en un contexto superior.</dd>

<dt>PROHIBIR</dt>
<dd>Raramente es necesario acudir a esta opción, pero en ocasiones quizás usted desee denegar completamente los permisos a un rol de suerte que NO pueda ser anulado en ningún contexto inferior. Un buen ejemplo podría ser que el administrador quisiera prohibir a alguien iniciar nuevos debates en cualquier foro de todo el sitio. En este caso puede crear un rol, seleccionar PROHIBIR y asignar luego el rol a dicho usuario en el contexto del sitio.
  </dd>

</dl>



<p> Los permisos de un contexto "inferior" anulan por lo general a cualquier otro que esté en un contexto "superior" (esto se aplica a las anulaciones y a los roles asignados). La excepción es PROHIBIR, que no puede ser anulado por niveles más bajos.</p>

<p> Si una persona tiene asignados dos roles en el mismo contexto, uno con PERMITIR y otro con PREVENIR, ¿cuál prevalece? En este caso, Moodle consultará el árbol contextual para tomar una decisión.</p>

<p> Por ejemplo, un estudiante tiene dos roles en un curso; uno le permite comenzar nuevos debates, otro previene de tal acción. En este caso, comprobamos los contextos de las categorías y del sitio, buscando otro permiso que nos ayude a decidir. Si no encontramos ninguno, el permiso por defecto será PREVENIR, toda vez que los dos ajustes se anulan mutuamente y, por consiguiente, el estudiante no tendrá permiso.
</p>



<p> Advierta que los invitados en general no tendrán permiso para enviar contenidos (e.g., foros, entradas de calendario, blogs) incluso si se les diera permiso para hacerlo.
</p>

<p>
Vea también
<a href="help.php?file=roles.html">Roles</a>,
<a href="help.php?file=contexts.html">Contextos</a>,
<a href="help.php?file=assignroles.html">Assignación de Roles</a> y
<a href="help.php?file=overrides.html">Anulaciones</a>.
</p>';
$string['permissionsincontext'] = 'Permissos en {$a}';
$string['portfolio:export'] = 'Exportar a portafolios';
$string['potentialusers'] = '{$a} usuarios potenciales';
$string['potusers'] = 'Usuarios potenciales';
$string['potusersmatching'] = 'Usuarios potenciales que coinciden con \'{$a}\'';
$string['prevent'] = 'Prevenir';
$string['prohibit'] = 'Prohibir';
$string['prohibitedroles'] = 'Prohibido';
$string['question:add'] = 'Agregar nuevas preguntas';
$string['question:config'] = 'Configurar tipos de pregunta';
$string['question:editall'] = 'Editar todas las preguntas';
$string['question:editmine'] = 'Editar sus propias preguntas';
$string['question:flag'] = 'Marcar preguntas mientras se intentan';
$string['question:managecategory'] = 'Editar categorías de preguntas';
$string['question:moveall'] = 'Mover todas las preguntas';
$string['question:movemine'] = 'Mover sus propias preguntas';
$string['question:useall'] = 'Usar todas las preguntas';
$string['question:usemine'] = 'Usar sus propias preguntas';
$string['question:viewall'] = 'Ver todas las preguntas';
$string['question:viewmine'] = 'Ver sus propias preguntas';
$string['rating:rate'] = 'Añada las calificaciones a los elementos';
$string['rating:view'] = 'Ver la calificación total recibida';
$string['rating:viewall'] = 'Ver todas las calificaciones emitidas por los usuarios
';
$string['rating:viewany'] = 'Ver el total de calificaciones que alguien recibió';
$string['resetrole'] = 'Reajustar a valores por defecto';
$string['resetrolenolegacy'] = 'Limpiar permisos';
$string['resetrolesure'] = '¿Está seguro de que quiere reajustar el rol "{$a->name} ({$a->shortname})" a los valores predeterminados?<p></p>Los valores predeterminados se toman del arquetipo seleccionado ({$a->legacytype}).';
$string['resetrolesurenolegacy'] = '¿Está seguro de que quiere eliminar todos los permisos definidos en este rol "{$a->name} ({$a->shortname})"?';
$string['restore:configure'] = 'Configurar opciones de restauración';
$string['restore:createuser'] = 'Crear usuarios en la restauración';
$string['restore:restoreactivity'] = 'Restaurar actividades';
$string['restore:restorecourse'] = 'Restaurar cursos';
$string['restore:restoresection'] = 'Restaurar secciones';
$string['restore:restoretargethub'] = 'Restaurar de archivos señalados como hub';
$string['restore:restoretargetimport'] = 'Restaurar archivos señalados como importación';
$string['restore:rolldates'] = 'Está permitido contemplar fechas de configuración de la actividad en la restauración';
$string['restore:uploadfile'] = 'Subir archivos a las áreas de copia de seguridad';
$string['restore:userinfo'] = 'Restaurar datos de usuario';
$string['restore:viewautomatedfilearea'] = 'Restaurar los cursos de copias de seguridad automatizadas';
$string['risks'] = 'Riesgos';
$string['roleallowheader'] = 'Permitir rol:';
$string['role:assign'] = 'Asignar roles a los usuarios';
$string['roleassignments'] = 'Asignaciones de rol';
$string['roledefinitions'] = 'Definiciones de rol';
$string['rolefullname'] = 'Nombre';
$string['role:manage'] = 'Crear y gestionar roles';
$string['role:override'] = 'Anular permisos para otros';
$string['roleprohibitheader'] = 'Prohibir rol';
$string['roleprohibitinfo'] = 'Seleccione un rol para añadir a la lista de roles prohibidos en el contexto {$a->context}, permiso {$a-> cap}:';
$string['role:review'] = 'Revisión de permisos para los demás';
$string['roles'] = 'Roles';
$string['role:safeoverride'] = 'Anular permisos seguros para otros';
$string['roleselect'] = 'Seleccionar rol';
$string['roles_help'] = '<p>
Un rol es un conjunto de permisos definidos para todo el sitio que usted puede asignar a usuarios específicos en contextos específicos.
</p>

<p>
Por ejemplo, puede tener un rol denominado "Profesor" que se ajusta para permitir que los profesores (y no otros usuarios) puedan hacer ciertas cosas. Una vez que dicho rol existe, usted puede asignarlo a algún usuario del curso y convertirlo en "Profesor" de ese curso. Usted podría asimismo asignar el rol a un usuario en la categoría de cursos y convertirlo en "Profesor" de todos los cursos pertenecientes a tal categoría, o asignar el rol a un usuario simplemente en un foro, restringiendo las posibilidades a ese foro en concreto.
</p>

<p>
Un rol debe tener un <strong>nombre</strong>.  Si necesita denominar el rol en varios idiomas, puede utilizar la sintaxis multi-idioma (\'multilang\') si así lo desea, como, por ejemplo <pre>
  &lt;span lang="en">Maestro&lt;/span>
  &lt;span lang="es_es">Profesor&lt;/span>
  </pre>Si lo hace así, asegúrese de que las "cadenas de filtro" ("filter strings") están activadas en su insstalación.
</p>

<p>
El <strong>nombre corto</strong> es necesario para otros conectores (\'plugins\') de Moodle que puedan necesitar referirse a sus Roles (e.g., cuando se cargan usuarios desde un archivo o cuando se llevan a cabo matriculaciones a través de un conector -\'plugin\'- de matriculación).
</p>

<p>
La <strong>descripción</strong> consiste en describir el rol con sus propias palabras, de forma que cualquiera entienda en qué consiste.
</p>

<p>
Vea también
<a href="help.php?file=contexts.html">Contextos</a>,
<a href="help.php?file=permissions.html">Permisos</a>,
<a href="help.php?file=assignroles.html">Asignación de Roles</a> y
<a href="help.php?file=overrides.html">Anulaciones</a>.
</p>';
$string['roleshortname'] = 'Nombre corto';
$string['role:switchroles'] = 'Cambiar a otros roles';
$string['roletoassign'] = 'Rol a asignar';
$string['roletooverride'] = 'Rol a anular';
$string['safeoverridenotice'] = 'Nota: Los permisos con riesgo más elevado están bloqueados porque usted únicamente puede anular permisos seguros.';
$string['selectanotheruser'] = 'Seleccionar otro rol';
$string['selectauser'] = 'Seleccionar un usuario';
$string['selectrole'] = 'Seleccionar un rol';
$string['showallroles'] = 'Mostrar todos los roles';
$string['showthisuserspermissions'] = 'Mostrar los permisos de este usuario';
$string['site:accessallgroups'] = 'Acceder a todos los grupos';
$string['siteadministrators'] = 'Administradores del sitio';
$string['site:approvecourse'] = 'Aprobar la creación de cursos';
$string['site:backup'] = 'Hacer copia de seguridad de los cursos';
$string['site:config'] = 'Cambiar configuración del sitio';
$string['site:doanything'] = 'Permiso para todo';
$string['site:doclinks'] = 'Mostrar enlaces a documentos fuera del sitio';
$string['site:import'] = 'Importar otros cursos a un curso';
$string['site:manageblocks'] = 'Gestionar bloques en una página';
$string['site:mnetloginfromremote'] = 'Acceso desde una aplicación remota vía MNet';
$string['site:mnetlogintoremote'] = 'Acceder a una aplicación remota vía MNet';
$string['site:readallmessages'] = 'Leer todos los mensajes del sitio';
$string['site:restore'] = 'Restaurar cursos';
$string['site:sendmessage'] = 'Enviar mensajes a cualquier usuario';
$string['site:trustcontent'] = 'Confiar en contenidos enviados';
$string['site:uploadusers'] = 'Subir nuevos usuarios desde un archivo';
$string['site:viewfullnames'] = 'Ver siempre nombres completos de los usuarios';
$string['site:viewparticipants'] = 'Ver a los participantes';
$string['site:viewreports'] = 'Ver informes';
$string['tag:create'] = 'Crear nuevas marcas';
$string['tag:edit'] = 'Editar marcas existentes';
$string['tag:editblocks'] = 'Editar bloques en páginas de margas';
$string['tag:manage'] = 'Gestionar todas las marcas';
$string['thisusersroles'] = 'Tareas de rol de este usuario';
$string['unassignarole'] = 'Desasignar rol {$a}';
$string['unassignconfirm'] = '¿Realmente desea desasignar el rol "{$a->role}" del usuario "{$a->user}"?';
$string['unassignerror'] = 'Error al desasignar el rol {$a->role} del usuario {$a->user}.';
$string['user:changeownpassword'] = 'Cambiar la contraseña propia';
$string['user:create'] = 'Crear usuarios';
$string['user:delete'] = 'Eliminar usuarios';
$string['user:editmessageprofile'] = 'Editar perfil de mensajería de usuario';
$string['user:editownmessageprofile'] = 'Editar el propio perfil de mensajería de usuario';
$string['user:editownprofile'] = 'Editar el perfil de usuario propio';
$string['user:editprofile'] = 'Editar perfil de usuario';
$string['user:loginas'] = 'Entrar como otro usuario';
$string['user:manageblocks'] = 'Gestionar bloques en el perfil de usuario de otros usuarios';
$string['user:manageownblocks'] = 'Gestionar bloques en el perfil de usuario público propio';
$string['user:manageownfiles'] = 'Gestionar archivos en las áreas de archivos privados propios';
$string['user:managesyspages'] = 'Configurar el diseño de página predeterminado para los perfiles de usuario públicos';
$string['user:readuserblogs'] = 'Ver todos los blogs de usuario';
$string['user:readuserposts'] = 'Ver todos los mensajes de los usuarios';
$string['usersfrom'] = 'Usuarios de {$a}';
$string['usersfrommatching'] = 'Usuarios de {$a->contextname} que coinciden con \'{$a->search}\'';
$string['usersinthisx'] = 'Usuarios en este {$a}';
$string['usersinthisxmatching'] = 'Usuarios en este {$a->contexttype} que coinciden con \'{$a->search}\'';
$string['userswithrole'] = 'Todos los usuarios con rol';
$string['userswiththisrole'] = 'Usuarios con rol';
$string['user:update'] = 'Actualizar perfiles de usuario';
$string['user:viewalldetails'] = 'Ver información completa del usuario';
$string['user:viewdetails'] = 'Ver perfiles de usuario';
$string['user:viewhiddendetails'] = 'Ver detalles ocultos de los usuarios';
$string['user:viewuseractivitiesreport'] = 'Ver informes de actividad de los usuarios';
$string['user:viewusergrades'] = 'Ver calificaciones de los usuarios';
$string['useshowadvancedtochange'] = 'Usar "Mostrar avanzadas" para cambiar';
$string['viewingdefinitionofrolex'] = 'Viendo la definición del rol \'{$a}\'';
$string['viewrole'] = 'Ver detalles del rol';
$string['webservice:createtoken'] = 'Crear una ficha de servicio web';
$string['whydoesuserhavecap'] = '¿Por qué {$a->fullname} tiene el permiso de {$a->capability} en el contexto {$a->context}?';
$string['whydoesusernothavecap'] = '¿Por qué {$a->fullname} no tiene el permiso de {$a->capability} en el contexto {$a->context}?';
$string['xroleassignments'] = 'Tareas del rol {$a}';
$string['xuserswiththerole'] = 'Usuarios con el rol "{$a->role}"';

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
 * Strings for component 'enrol_self', language 'es', branch 'MOODLE_21_STABLE'
 *
 * @package   enrol_self
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['customwelcomemessage'] = 'Mensaje de bienvenida personalizado';
$string['defaultrole'] = 'Asignación de rol por defecto';
$string['defaultrole_desc'] = 'Seleccione el rol que debe asignarse a los usuarios con auto-matriculación';
$string['editenrolment'] = 'Editar matricula';
$string['enrolenddate'] = 'Fecha límite';
$string['enrolenddaterror'] = 'La fecha final de matriculación no puede ser anterior a la fecha inicial';
$string['enrolme'] = 'Matricularme';
$string['enrolperiod'] = 'Período de matriculación';
$string['enrolperiod_desc'] = 'Duración por defecto del período de matriculación (en segundos).';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['groupkey'] = 'Clave de matriculación del grupo de usuarios';
$string['groupkey_desc'] = 'Por defecto, utilice claves de matriculación de grupo.';
$string['groupkey_help'] = '<p>Además de restringir el acceso al curso a sólo aquellos que conocen la clave, el uso de una clave de acceso de grupo significa que los usuarios se agregan automáticamente al grupo cuando se inscriben en el curso. </p>
<p>Para utilizar una clave de acceso de grupo, se debe especificar que se precisa clave en la configuración de los cursos, y también en la configuración del grupo.</p>';
$string['longtimenosee'] = 'Dar de baja los inactivos después de';
$string['longtimenosee_help'] = 'Si los usuarios no acceden a un curso durante mucho tiempo, entonces se les da de baja automáticamente. Este parámetro especifica este plazo de tiempo.';
$string['maxenrolled'] = 'Número máximo de usuarios matriculados';
$string['maxenrolled_help'] = 'Especifique el número máximo de usuarios que pueden auto-matricularse.El 0 significa sin límite.';
$string['maxenrolledreached'] = 'Se alcanzó el número máximo de usuarios permitidos para auto-matriculación.';
$string['password'] = 'Clave de matriculación';
$string['password_help'] = '<p>Una clave de acceso permite que el acceso al curso esté limitado sólo a aquellos que conocen dichala clave. </p>
<p>Si el campo se deja en blanco, cualquier usuario puede matricularse en el curso.</p>
<p>Si se especifica una clave de acceso, cualquier usuario que intenta matricularse en el curso deberá proporcionar la clave. Tenga en cuenta que un usuario sólo tiene que proporcionar la clave de acceso una vez, cuando se matricule en el curso.</p>';
$string['passwordinvalid'] = 'Contraseña de acceso incorrecta, pruebe de nuevo';
$string['passwordinvalidhint'] = 'La contraseña de matriculación es incorrecta. Por favor, inténtelo de nuevo<br />
(Una pista: comienza con \'{$a}\')';
$string['pluginname'] = 'Auto-matriculación';
$string['pluginname_desc'] = '<p>La extensión para matrícula libre permite a los usuarios elegir los cursos en los que quieren participar.</p>
<p>Los cursos pueden estar protegidos por una contraseña de acceso.</p>
<p> Internamente, la matriculación se realiza a través de la extensión para la matriculación manual, que debe estar habilitada en el mismo curso.</p>';
$string['requirepassword'] = 'Se precisa clave de matriculación';
$string['requirepassword_desc'] = 'Se precisa clave de matriculación en nuevos cursos y se evita la eliminación de la clave de matriculación de los cursos existentes.';
$string['role'] = 'Asignar rol';
$string['self:config'] = 'Configure la auto-matriculación';
$string['self:manage'] = 'Gestionar usuarios matriculados';
$string['self:unenrol'] = 'Dart de baja usuarios del curso';
$string['self:unenrolself'] = 'Darse de baja del curso';
$string['sendcoursewelcomemessage'] = 'Enviar mensaje de bienvenida al curso';
$string['sendcoursewelcomemessage_help'] = 'Si esta opción está activada, los usuarios recibirán un mensaje de bienvenida por email cuando se automatriculen en un curso.';
$string['showhint'] = 'Mostrar pista';
$string['showhint_desc'] = 'Mostrar la primera letra de la contraseña de acceso de invitados.';
$string['status'] = 'Permitir la auto-matrículación';
$string['status_desc'] = 'Permitir, por defecto, que los usuarios puedan auto-inscribirse en un curso.';
$string['status_help'] = 'Esta opción determina si un usuario puede inscribirse a un curso (y también darse de baja si tienen el permiso adecuado) por si mismo.';
$string['unenrolselfconfirm'] = '¿Está seguro que quiere darse de baja del curso "{$a}"?';
$string['usepasswordpolicy'] = 'Utilice la directiva de contraseñas';
$string['usepasswordpolicy_desc'] = 'Utilice la directiva de contraseñas estándar para las claves de matriculación.';
$string['welcometocourse'] = 'Bienvenido a {$a}';
$string['welcometocoursetext'] = 'Bienvenido a {$a->coursename}

Lo primero que debe hacer es actualizar su información personal: así podremos saber algo más sobre usted.
No olvide colocar su foto u otra imagen que lo identifique.

  {$a->profileurl}';

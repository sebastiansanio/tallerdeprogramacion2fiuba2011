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
 * Strings for component 'simpletest', language 'es', branch 'MOODLE_21_STABLE'
 *
 * @package   simpletest
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addconfigprefix'] = 'Agregar prefijo al archivo config';
$string['all'] = 'TODAS';
$string['codecoverageanalysis'] = 'Realizar un análisis de cobertura de código.';
$string['codecoveragecompletereport'] = '(ver informe completo de cobertura de código)';
$string['codecoveragedisabled'] = 'No se puede habilitar la cobertura de código en este servidor (falta la extensión Xdebug).';
$string['codecoveragelatestdetails'] = 'En fecha {$a->date}, con los ficheros {$a->files}, {$a->percentage} cubierto';
$string['codecoveragelatestreport'] = 'ver el último informe completo de cobertura de código';
$string['coveredlines'] = 'Líneas cubiertas';
$string['coveredpercentage'] = 'Cobertura de código global';
$string['deletingnoninsertedrecord'] = 'Intentanto eliminar un registro que no fue introducido por estas pruebas unitarias (id {$a->id} en la tabla {$a->table}).';
$string['droptesttables'] = 'Pasar por alto tablas de prueba';
$string['exception'] = 'Excepción';
$string['executablelines'] = 'Líneas ejecutables';
$string['fail'] = 'Fallo';
$string['ignorefile'] = 'Pasar por alto los tests de este archivo';
$string['ignorethisfile'] = 'Volver a ejecutar los tests pasando por alto este archivo.';
$string['installtesttables'] = 'Instalar tablas de test';
$string['moodleunittests'] = 'Tests unitarios de Moodle: {$a}';
$string['notice'] = 'Aviso';
$string['onlytest'] = 'Ejecutar tests sólo en';
$string['pass'] = 'Contraseña';
$string['pathdoesnotexist'] = 'La ruta \'{$a}\' no existe.';
$string['prefix'] = 'Prefijo de tablas de prueba unitaria';
$string['prefixnotset'] = 'La tabla de prefijos de pruebas unitarias de la base de datos no está configurada. Complete y envíe este formulario para añadirlo a config.php';
$string['reinstalltesttables'] = 'Volver a instalar tablas de prueba';
$string['retest'] = 'Volver a ejecutar los tests';
$string['retestonlythisfile'] = 'Volver a ejecutar sólo este archivo de test.';
$string['runall'] = 'Ejecutar los tests de todos los archivos.';
$string['runat'] = 'Ejecutar en {$a}.';
$string['runonlyfile'] = 'Ejecutar sólo los tests de este archivo';
$string['runonlyfolder'] = 'Ejecutar sólo los tests de esta carpeta';
$string['runtests'] = 'Ejecutar tests';
$string['rununittests'] = 'Ejecutar los tests unitarios';
$string['showpasses'] = 'Mostrar correctos y fallos.';
$string['showsearch'] = 'Mostrar búsqueda de archivos de test.';
$string['skip'] = 'Saltar';
$string['stacktrace'] = 'Rastrear pila:';
$string['summary'] = '{$a->run}/{$a->total} casos de test completados: <strong>{$a->passes}</strong> correctos, <strong>{$a->fails}</strong> fallos y <strong>{$a->exceptions}</strong> excepciones.';
$string['tablesnotsetup'] = 'Las tablas de pruebas unitarias aún no están construidas. ¿Desea construirlas?.';
$string['testtablescsvfileunwritable'] = 'Las tablas de prueba del fichero CVS no se puede escribir {$a->filename})';
$string['thorough'] = 'Ejecutar un test minucioso (puede ser lento).';
$string['timetakes'] = 'Tiempo empleado: {$a}.';
$string['totallines'] = 'Líneas totales';
$string['uncaughtexception'] = 'Excepción no detectada [{$a->getMessage()}] in [{$a->getFile()}:{$a->getLine()}] TESTS ABORTADOS.';
$string['uncoveredlines'] = 'Líneas no cubiertas';
$string['unittests'] = 'Tests unitarios';
$string['updatingnoninsertedrecord'] = 'Intentando actualizar un registro que no se insertó por estas pruebas unitarias (id {$a->id} en la tabla {$a->table}).';
$string['version'] = 'Usando <a href="http://sourceforge.net/projects/simpletest/">SimpleTest</a> versión {$a}.';

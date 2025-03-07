<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_multichoice', language 'gl', version '4.1'.
 *
 * @package     qtype_multichoice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerhowmany'] = 'Unha ou varias respostas?';
$string['answerhowmany_desc'] = 'Se o valor predeterminado debe ser unha resposta (é dicir, botóns de opción) ou varias respostas (isto é, caixas de selección).';
$string['answernumbering'] = 'Numerar as escollas?';
$string['answernumbering123'] = '1., 2., 3., ...';
$string['answernumberingABCD'] = 'A., B., C., ...';
$string['answernumberingIIII'] = 'I., II., III., ...';
$string['answernumbering_desc'] = 'O estilo de numeración predeterminado.';
$string['answernumberingabc'] = 'a., b., c., ...';
$string['answernumberingiii'] = 'i., ii., iii., ...';
$string['answernumberingnone'] = 'Sen numeración';
$string['answersingleno'] = 'Múltiples respostas permitidas';
$string['answersingleyes'] = 'Só unha resposta';
$string['choiceno'] = 'Escolla {$a}';
$string['choices'] = 'Escollas dispoñíbeis';
$string['clearchoice'] = 'Limpar a miña escolla';
$string['clozeaid'] = 'Introduza a palabra que falta';
$string['correctansweris'] = 'A resposta correcta é: {$a}';
$string['correctanswersare'] = 'As respostas correctas son: {$a}';
$string['correctfeedback'] = 'Para calquera resposta correcta';
$string['deletedchoice'] = 'Esta escolla foi eliminada após iniciar o intento.';
$string['errfractionsaddwrong'] = 'As cualificacións positivas que escolleu non suman 100%<br />senón {$a}%';
$string['errfractionsnomax'] = 'Unha das respostas ten que ser 100% para <br />poder obter unha cualificación total nesta pregunta.';
$string['errgradesetanswerblank'] = 'Estabeleceuse cualificación, mais a resposta está en branco';
$string['feedback'] = 'Comentarios';
$string['fillouttwochoices'] = 'Ten que encher polo menos dúas escollas. Non se utilizarán as escollas en branco.';
$string['fractionsaddwrong'] = 'As cualificacións positivas que escolleu non suman 100%<br />senón, {$a}%<br />Desexa volver atrás e corrixir esta pregunta?';
$string['fractionsnomax'] = 'Unha das respostas ten que ser 100% para <br />poder obter unha cualificación total nesta pregunta.<br />Desexa volver atrás e corrixir esta pregunta?';
$string['incorrectfeedback'] = 'Para calquera resposta incorrecta';
$string['notenoughanswers'] = 'Este tipo de pregunta require polo menos {$a} respostas';
$string['overallcorrectfeedback'] = 'Avaliación de calquera resposta correcta';
$string['overallfeedback'] = 'Comentarios xerais';
$string['overallincorrectfeedback'] = 'Avaliación de calquera resposta incorrecta';
$string['overallpartiallycorrectfeedback'] = 'Avaliación de calquera resposta parcialmente correcta';
$string['partiallycorrectfeedback'] = 'Para calquera resposta parcialmente correcta';
$string['pleaseselectananswer'] = 'Seleccione unha resposta.';
$string['pleaseselectatleastoneanswer'] = 'Seleccione polo menos unha resposta.';
$string['pluginname'] = 'Escolla múltiple';
$string['pluginname_help'] = 'En resposta a unha pregunta (que pode incluír unha imaxe) o alumno escolle a resposta entre varias respostas posíbeis. Hai dous tipos de preguntas con resposta múltiple: con unha e con máis dunha resposta correcta.';
$string['pluginname_link'] = 'question/type/multichoice';
$string['pluginnameadding'] = 'Engadindo unha pregunta de escolla múltiple';
$string['pluginnameediting'] = 'Editando unha pregunta de escolla múltiple';
$string['pluginnamesummary'] = 'Permite seleccionar unha ou varias respostas dunha lista predefinida.';
$string['privacy:metadata'] = 'O complemento de tipo de pregunta de escolla múltiple permite aos autores de preguntas estabelecer opcións predeterminadas como preferencias do usuario.';
$string['privacy:preference:answernumbering'] = 'Que estilo de numeración se debe utilizar («1, 2, 3, ...», «a, b, c, ...» etc.).';
$string['privacy:preference:defaultmark'] = 'A marca predeterminada estabelecida para unha determinada pregunta.';
$string['privacy:preference:penalty'] = 'A penalización por cada intento incorrecto cando se executan preguntas mediante o comportamento «Interactivo con intentos múltiples» ou «Modo adaptativo».';
$string['privacy:preference:showstandardinstruction'] = 'Indica se amosa instrucións estándar.';
$string['privacy:preference:shuffleanswers'] = 'Indica se as respostas deben ser baralladas automaticamente.';
$string['privacy:preference:single'] = 'Indica se a resposta é única con botóns de escolla ou múltiple con caixas de verificación.';
$string['selectmulti'] = 'Seleccione unha ou máis:';
$string['selectone'] = 'Seleccione unha:';
$string['showstandardinstruction'] = 'Amosar instrucións estándar.';
$string['showstandardinstruction_help'] = 'Indica se amosar as instrucións «Seleccione unha:» ou «Seleccione unha ou máis:» antes das respostas de opción múltiple.';
$string['shuffleanswers'] = 'Barallar respostas';
$string['shuffleanswers_desc'] = 'Indica se as opcións deben ser baralladas para cada intento como predeterminado.';
$string['shuffleanswers_help'] = 'De estar activado, a orde das escollas varía ao chou para cadanseu intento, sempre que «Barallar dentro das preguntas» tamén estea activado na configuración da actividade.';
$string['singleanswer'] = 'Escoller unha resposta.';
$string['toomanyselected'] = 'Seleccionou respostas de máis.';

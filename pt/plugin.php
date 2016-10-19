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
 * Strings for component 'plugin', language 'pt', branch 'MOODLE_31_STABLE'
 *
 * @package   plugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['availability'] = 'Disponibilidade';
$string['cancelinstallall'] = 'Cancelar as novas instalações ({$a})';
$string['cancelinstallhead'] = 'A cancelar as instalações dos módulos';
$string['cancelinstallinfo'] = 'Os seguintes módulos ainda não se encontram totalmente instalados pelo que a sua instalação poderá ser cancelada. Para o fazer deverá remover do servidor a pasta referente ao módulo. Verifique se tem mesmo a certeza que pretende fazer isto, de modo a evitar perdas acidentais de dados (tais como os seus códigos pessoais de modificação).';
$string['cancelinstallinfodir'] = 'Pasta a ser apagada: {$a}';
$string['cancelinstallone'] = 'Cancelar esta instalação';
$string['cancelupgradeall'] = 'Cancelar atualizações ({$a})';
$string['cancelupgradehead'] = 'Restaurar versões anteriores dos módulos';
$string['cancelupgradeone'] = 'Cancelar esta atualização';
$string['checkforupdates'] = 'Verificar atualizações disponíveis';
$string['checkforupdateslast'] = 'Última verificação em {$a}';
$string['dependencyavailable'] = 'Disponível';
$string['dependencyfails'] = 'Falhas';
$string['dependencyinstall'] = 'Instalar';
$string['dependencyinstallhead'] = 'A instalar as dependências em falta';
$string['dependencyinstallmissing'] = 'Instalar dependências em falta ({$a})';
$string['dependencymissing'] = 'A faltar';
$string['dependencyunavailable'] = 'Indisponível';
$string['dependencyupload'] = 'Carregar ficheiros';
$string['dependencyuploadmissing'] = 'Carregar ficheiros ZIP';
$string['detectedmisplacedplugin'] = 'O módulo "{$a->component}" está instalado numa localização incorreta "{$a->current}", a localização esperada é "{$a->expected}"';
$string['displayname'] = 'Nome do módulo';
$string['err_response_curl'] = 'Não é possível descarregar dados de atualizações disponíveis - erro cURL inesperado.';
$string['err_response_format_version'] = 'Versão inesperada do formato de resposta. Por favor, verifique novamente se existem atualizações disponíveis.';
$string['err_response_http_code'] = 'Não é possível descarregar dados de atualizações disponíveis - código de resposta HTTP inesperado.';
$string['filterall'] = 'Mostrar tudo';
$string['filtercontribonly'] = 'Mostrar apenas módulos adicionais';
$string['filterupdatesonly'] = 'Mostrar apenas o que está disponível para atualizar';
$string['misdepinfoplugin'] = 'Informação do módulo';
$string['misdepinfoversion'] = 'Informação da versão';
$string['misdepsavail'] = 'Dependências em falta disponíveis';
$string['misdepsunavail'] = 'Dependências em falta indisponíveis';
$string['misdepsunavaillist'] = 'Não foi encontrada nenhuma versão para preencher os pré-requisitos: {$a}.';
$string['misdepsunknownlist'] = 'Não se encontra no diretório de módulos: <strong>{$a}</strong>.';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Não foram instalados módulos desse tipo';
$string['notdownloadable'] = 'Não é possível descarregar o pacote';
$string['notdownloadable_help'] = 'O pacote ZIP com a atualização não pode ser descarregado automaticamente. Por favor, consulte a página de documentação para obter mais ajuda.';
$string['notes'] = 'Notas';
$string['notwritable'] = 'Os ficheiros do módulo não permitem escrita';
$string['notwritable_help'] = 'O servidor web não tem permissões de escrita nos ficheiros do módulo.  O servidor web tem de ter acesso de escrita à pasta do módulo e a todos os seus conteúdos. Poderá também ser necessário acesso de escrita à pasta de raiz do tipo de módulo.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Todos os módulos';
$string['overviewext'] = 'Módulos adicionais';
$string['overviewupdatable'] = 'Atualizações disponíveis';
$string['packagesdebug'] = 'Mostrar mensagens de erro ativado';
$string['packagesdownloading'] = 'A descarregar {$a}';
$string['packagesextracting'] = 'A extrair {$a}';
$string['packagesvalidating'] = 'A validar {$a}';
$string['packagesvalidatingfailed'] = 'Instalação interrompida devido a falha de validação';
$string['packagesvalidatingok'] = 'Validação bem sucedida, a instalação pode continuar';
$string['plugincheckall'] = 'Todos os módulos';
$string['plugincheckattention'] = 'Módulos que requerem atenção';
$string['pluginchecknone'] = 'De momento, nenhum módulo necessita de atenção';
$string['pluginchecknotice'] = 'Esta página exibe os módulos que podem exigir a sua atenção durante a atualização, tais como novos módulos que estão prestes a ser instalados, os módulos que estão prestes a ser atualizados e quaisquer módulos em falta. Os módulos adicionais serão exibidos se houver uma atualização disponível para eles. É recomendado que verifique se existem versões mais recentes dos módulos instalados e atualize o seu código-fonte antes de continuar com esta atualização do Moodle.';
$string['plugindisable'] = 'Desativar';
$string['plugindisabled'] = 'Desativado';
$string['pluginenable'] = 'Ativar';
$string['pluginenabled'] = 'Ativado';
$string['release'] = 'Lançamento';
$string['requiredby'] = 'Pedido por: {$a}';
$string['requires'] = 'Requer';
$string['rootdir'] = 'Diretorio';
$string['settings'] = 'Configurações';
$string['source'] = 'Fonte';
$string['sourceext'] = 'Módulo adicional';
$string['sourcestd'] = 'Padrão';
$string['status'] = 'Estado';
$string['status_delete'] = 'Para apagar';
$string['status_downgrade'] = 'A versão mais recente já foi instalada!';
$string['status_missing'] = 'Em falta no disco';
$string['status_new'] = 'Pronto para ser instalado';
$string['status_nodb'] = 'Não existe base de dados';
$string['status_upgrade'] = 'A ser atualizado';
$string['status_uptodate'] = 'Atualizado';
$string['supportedmoodleversions'] = 'Versões Moodle suportadas';
$string['systemname'] = 'Identificador';
$string['type_antivirus'] = 'Módulo Antivírus';
$string['type_antivirus_plural'] = 'Módulos Antivírus';
$string['type_auth'] = 'Método de autenticação';
$string['type_auth_plural'] = 'Métodos de autenticação';
$string['type_availability'] = 'Restrição de disponibilidade';
$string['type_availability_plural'] = 'Restrições de disponibilidade';
$string['type_block'] = 'Bloco';
$string['type_block_plural'] = 'Blocos';
$string['type_cachelock'] = 'Gestor de bloqueio da cache';
$string['type_cachelock_plural'] = 'Gestores de bloqueio da cache';
$string['type_cachestore'] = 'Unidade de armazenamento da cache';
$string['type_cachestore_plural'] = 'Unidades de armazenamento da cache';
$string['type_calendartype'] = 'Tipo de calendário';
$string['type_calendartype_plural'] = 'Tipos de calendário';
$string['type_coursereport'] = 'Relatório da disciplina';
$string['type_coursereport_plural'] = 'Relatórios da disciplina';
$string['type_dataformat'] = 'Formato de dados';
$string['type_dataformat_plural'] = 'Formatos de dados';
$string['type_editor'] = 'Editor';
$string['type_editor_plural'] = 'Editores';
$string['type_enrol'] = 'Método de inscrição';
$string['type_enrol_plural'] = 'Métodos de inscrição';
$string['type_filter'] = 'Filtro';
$string['type_filter_plural'] = 'Filtros de texto';
$string['type_format'] = 'Formato da disciplina';
$string['type_format_plural'] = 'Formatos da disciplina';
$string['type_gradeexport'] = 'Método de exportação de notas';
$string['type_gradeexport_plural'] = 'Métodos de exportação de notas';
$string['type_gradeimport'] = 'Método de importação de notas';
$string['type_gradeimport_plural'] = 'Métodos de importação de notas';
$string['type_gradereport'] = 'Relatório da pauta';
$string['type_gradereport_plural'] = 'Relatórios da pauta';
$string['type_gradingform'] = 'Método de avaliação avançada';
$string['type_gradingform_plural'] = 'Métodos de avaliação avançada';
$string['type_local'] = 'Módulo local';
$string['type_local_plural'] = 'Módulos locais';
$string['type_message'] = 'Destino de mensagens';
$string['type_message_plural'] = 'Destinos de mensagens';
$string['type_mnetservice'] = 'MNet service';
$string['type_mnetservice_plural'] = 'MNet services';
$string['type_mod'] = 'Módulo de atividade';
$string['type_mod_plural'] = 'Módulos de atividade';
$string['type_plagiarism'] = 'Módulo de prevenção de plágio';
$string['type_plagiarism_plural'] = 'Módulos de prevenção de plágio';
$string['type_portfolio'] = 'Portefólio';
$string['type_portfolio_plural'] = 'Portefólios';
$string['type_profilefield'] = 'Tipo de campo do perfil';
$string['type_profilefield_plural'] = 'Tipos de campos do perfil';
$string['type_qbehaviour'] = 'Comportamento da pergunta';
$string['type_qbehaviour_plural'] = 'Comportamentos das perguntas';
$string['type_qformat'] = 'Formato de importação/exportação de perguntas';
$string['type_qformat_plural'] = 'Formatos de importação/exportação de perguntas';
$string['type_qtype'] = 'Tipo de pergunta';
$string['type_qtype_plural'] = 'Tipos de perguntas';
$string['type_report'] = 'Relatório do site';
$string['type_report_plural'] = 'Relatórios';
$string['type_repository'] = 'Repositório';
$string['type_repository_plural'] = 'Repositórios';
$string['type_search'] = 'Motor de busca';
$string['type_search_plural'] = 'Motores de busca';
$string['type_theme'] = 'Tema';
$string['type_theme_plural'] = 'Temas';
$string['type_tool'] = 'Ferramenta do admin';
$string['type_tool_plural'] = 'Ferramentas de administração';
$string['type_webservice'] = 'Protocolo Webservice';
$string['type_webservice_plural'] = 'Protocolos Webservice';
$string['uninstall'] = 'Desinstalar';
$string['uninstallconfirm'] = 'Está prestes a desinstalar o módulo <em>{$a->name}</em>. Isto irá apagar completamente tudo o que existe na base de dados associado a este módulo, incluindo a sua configuração, registos de atividade, ficheiros do utilizador geridos pelo módulo, etc. Esta operação é irreversível e o Moodle não cria qualquer cópia de segurança para recuperação. Tem a certeza de que deseja continuar?';
$string['uninstalldelete'] = 'Todos os dados associados ao módulo \'<em>{$a->name}</em>\' foram eliminados da base de dados. Para evitar que o módulo se reinstale, a respetiva pasta [<em>{$a->rootdir}</em>] deve ser agora removida manualmente a partir do seu servidor. O Moodle por si só não pode remover a pasta devido a permissões de escrita.';
$string['uninstalldeleteconfirm'] = 'Todos os dados associados ao módulo \'<em>{$a->name}</em>\' foram eliminados da base de dados. Para evitar que o módulo se reinstale, a respetiva pasta [<em>{$a->rootdir}</em>] tem de ser removida do seu servidor. Pretende remover a pasta do módulo agora?';
$string['uninstalldeleteconfirmexternal'] = 'Aparentemente, a versão atual do módulo foi obtida através de um sistema de gestão do código fonte ({$a}). Se remover a pasta do módulo, pode perder importantes modificações locais do código. Certifique-se de que deseja remover definitivamente a pasta do módulo antes de continuar.';
$string['uninstallextraconfirmblock'] = 'Existem {$a->instances} instâncias deste bloco.';
$string['uninstallextraconfirmenrol'] = 'Existem {$a->enrolments} inscrições do utilizador.';
$string['uninstallextraconfirmmod'] = 'Existem {$a->instances} instâncias deste módulo em {$a->courses} disciplinas.';
$string['uninstalling'] = 'A desinstalar {$a->name}';
$string['updateavailable'] = 'Existe uma nova versão {$a} disponível!';
$string['updateavailable_moreinfo'] = 'Mais informação...';
$string['updateavailable_release'] = 'Lançamento {$a}';
$string['updatepluginconfirm'] = 'Confirmação da atualização do módulo';
$string['updatepluginconfirmexternal'] = 'Aparentemente, a versão atual do módulo foi obtida através do sistema de gestão de verificação do código-fonte ({$a}). Se instalar esta atualização, não será possível obter atualizações de módulos do sistema de gestão do código fonte. Certifique-se que pretende mesmo atualizar o módulo antes de continuar.';
$string['updatepluginconfirminfo'] = 'Está prestes a instalar uma nova versão do módulo <strong>{$a->name}</strong>. Um pacote ZIP com a versão {$a->version} do módulo será descarregada de <a href="{$a->url}">{$a->url}</a> e extraída para a sua instalação Moodle para a atualizar.';
$string['updatepluginconfirmwarning'] = 'Por favor, note que o Moodle não fará uma cópia de segurança da sua base de dados antes da atualização. Recomendamos que faça uma cópia completa de segurança instantânea, para evitar que eventuais bugs do novo código tornem o seu site indisponível ou até corromper a sua base de dados. Prossiga por sua conta e risco.';
$string['validationmsg_componentmatch'] = 'Nome completo do componente';
$string['validationmsg_componentmismatchname'] = 'Incompatibilidade de nome do módulo';
$string['validationmsg_componentmismatchname_help'] = 'Alguns pacotes ZIP, tais como os gerados pelo Github, podem conter um nome incorreto da diretoria raiz. É preciso corrigir o nome da diretoria raiz para que este corresponda ao nome do módulo declarado.';
$string['validationmsg_componentmismatchname_info'] = 'O módulo declara que o seu nome é \'{$a}\', mas que este não corresponde ao nome da diretoria raiz.';
$string['validationmsg_componentmismatchtype'] = 'Incompatibilidade de tipo do módulo';
$string['validationmsg_componentmismatchtype_info'] = 'Selecionou o tipo \'{$a->expected}\' mas o módulo aparenta ser do tipo \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'Ficheiro extraído não encontrado';
$string['validationmsg_filesnumber'] = 'Não foram encontrados ficheiros suficientes no pacote';
$string['validationmsg_filestatus'] = 'Não é possível extrair todos os ficheiros';
$string['validationmsg_filestatus_info'] = 'A tentativa de extração do ficheiro {$a->file} resultou num erro \'{$a->status}.';
$string['validationmsg_foundlangfile'] = 'Ficheiro de idioma encontrado';
$string['validationmsglevel_debug'] = 'Depurar';
$string['validationmsglevel_error'] = 'Erro';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Aviso';
$string['validationmsg_maturity'] = 'Nível de maturidade declarado';
$string['validationmsg_maturity_help'] = 'O módulo pode declarar o seu nível de maturidade. Se o responsável pela manutenção considerar o módulo estável, o nível de maturidade declarado irá ler MATURIDADE_ESTÁVEL. Todos os outros níveis de maturidade (tais como alfa ou beta) devem ser considerados instáveis e é gerado um aviso.';
$string['validationmsg_missingcomponent'] = 'O módulo não indica o seu nome de componente';
$string['validationmsg_missingcomponent_help'] = 'Todos os módulos devem indicar o seu nome de componente completo através da string `$plugin->component`no ficheiro version.php.';
$string['validationmsg_missingexpectedlangenfile'] = 'Incompatibilidade de nome do ficheiro de idioma em inglês';
$string['validationmsg_missingexpectedlangenfile_info'] = 'O ficheiro de idioma em inglês {$a} está em falta para o tipo de módulo em causa';
$string['validationmsg_missinglangenfile'] = 'Não foi encontrado o ficheiro de idioma em inglês';
$string['validationmsg_missinglangenfolder'] = 'A pasta do idioma em inglês está em falta';
$string['validationmsg_missingversion'] = 'O módulo não declara a sua versão';
$string['validationmsg_missingversionphp'] = 'Ficheiro \'version.php\' não encontrado';
$string['validationmsg_multiplelangenfiles'] = 'Foram encontrados múltiplos ficheiros de idioma em inglês';
$string['validationmsg_onedir'] = 'Estrutura inválida do pacote ZIP.';
$string['validationmsg_onedir_help'] = 'O pacote ZIP deve conter apenas uma diretoria raiz que contém o código do módulo. O nome dessa diretoria raiz deve coincidir com o nome do módulo.';
$string['validationmsg_pathwritable'] = 'Verificação do acesso de gravação';
$string['validationmsg_pluginversion'] = 'Versão do módulo';
$string['validationmsg_release'] = 'Lançamento do módulo';
$string['validationmsg_requiresmoodle'] = 'Versão Moodle requerida';
$string['validationmsg_rootdir'] = 'Nome do módulo a ser instalado';
$string['validationmsg_rootdir_help'] = 'O nome da diretoria raiz no pacote ZIP forma o nome do módulo a ser instalado. Se o nome não estiver correto, poderá querer mudar o nome da diretoria raiz no pacote ZIP antes de instalar o módulo.';
$string['validationmsg_rootdirinvalid'] = 'Nome de módulo inválido';
$string['validationmsg_rootdirinvalid_help'] = 'O nome da diretoria raiz no pacote ZIP viola requisitos formais de sintaxe. Alguns pacotes ZIP, tais como os gerados pelo Github, podem conter um nome de diretoria raiz incorreta. É preciso corrigir o nome da diretoria raiz para corresponder ao nome do módulo.';
$string['validationmsg_targetexists'] = 'O local de destino já existe e será eliminado';
$string['validationmsg_targetexists_help'] = 'A diretoria em que o módulo será instalado já existe e será substituída pela pasta de conteúdos do módulo.';
$string['validationmsg_targetnotdir'] = 'O local de destino está ocupado por um ficheiro';
$string['validationmsg_unknowntype'] = 'Tipo de módulo inválido';
$string['validationmsg_versionphpsyntax'] = 'Foram detectados erros de sintaxe no ficheiro version.php';
$string['version'] = 'Versão';
$string['versiondb'] = 'Versão atual';
$string['versiondisk'] = 'Nova versão';

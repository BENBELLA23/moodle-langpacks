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
 * Strings for component 'lti', language 'it', branch 'MOODLE_28_STABLE'
 *
 * @package   lti
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Accetta';
$string['accepted'] = 'Accettati';
$string['accept_grades'] = 'Accetta valutazioni dal tool';
$string['accept_grades_admin'] = 'Accetta valutazioni dal tool';
$string['accept_grades_admin_help'] = 'Stabilisce se il tool provider può aggiungere, aggiornare, leggere ed eliminare le valutazioni abbinate alle istanze di questo tipo di tool.

Alcuni tool provider supportano l\'invio delle valutazioni verso Moodle, in funzione della attività svolte nel tool, fornendo una esperienza più integrata.';
$string['accept_grades_help'] = 'Stabilisce se il tool provider può aggiungere, aggiornare, leggere ed eliminare le valutazioni abbinate a questa istanza di tool esterno.

Alcuni tool provider supportano l\'invio delle valutazioni verso Moodle, in funzione della attività svolte nel tool, fornendo una esperienza più integrata.

Da notare che l\'impostazione potrebbe essere modificata dalla configurazione del tool.';
$string['action'] = 'Azione';
$string['active'] = 'Attivi';
$string['activity'] = 'Attivtà';
$string['addnewapp'] = 'Abilita applicazioni esterna';
$string['addserver'] = 'Aggiungi nuovo server affidabile';
$string['addtype'] = 'Aggiungi configurazione tool esterno';
$string['allow'] = 'Consenti';
$string['allowinstructorcustom'] = 'Consenti ai docenti di aggiungere parametri personalizzati';
$string['allowsetting'] = 'Consenti al tool di memorizzare 8K di impostazioni in Moodle';
$string['always'] = 'Sempre';
$string['automatic'] = 'Automatico, in funzione dell\'URL di lancio';
$string['baseurl'] = 'URL base/Tool registration name';
$string['basiclti'] = 'LTI';
$string['basicltiactivities'] = 'Attività LTI';
$string['basiclti_base_string'] = 'Stringa base LTI OAuth';
$string['basiclti_endpoint'] = 'Endpoint di lancio LTI';
$string['basicltifieldset'] = 'Esempio personalizzato di campi';
$string['basiclti_in_new_window'] = 'L\'attività è stata aperta in una nuova finestra';
$string['basicltiintro'] = 'Descrizione';
$string['basicltiname'] = 'Nome attività';
$string['basiclti_parameters'] = 'Parametri di lancio LTI';
$string['basicltisettings'] = 'Impostazioni di base Learning Tool Interoperability (LTI)';
$string['cancel'] = 'Annulla';
$string['cancelled'] = 'Annullato';
$string['cannot_delete'] = 'Non dovresti eliminare la configurazione di questo tool.';
$string['cannot_edit'] = 'Non dovresti modificare la configurazione di questo tool.';
$string['capabilities'] = 'Funzionalità';
$string['capabilities_help'] = 'Selezionare le funzionalità che si desidera offrire al tool provider. E\' possibile selezionare più di un afunzionalità';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Click per continuare</a>';
$string['comment'] = 'Comment';
$string['configpassword'] = 'Password di default del tool remoto';
$string['configpreferheight'] = 'Altezza preferita di default';
$string['configpreferwidget'] = 'Imposta widget come lancio di default';
$string['configpreferwidth'] = 'Larghezza preferita di default';
$string['configresourceurl'] = 'Resource URL di default';
$string['configtoolurl'] = 'URL del tool remoto di default';
$string['configtypes'] = 'Abilita applicazioni LTI';
$string['configured'] = 'Configurati';
$string['courseid'] = 'Codice identificativo del corso';
$string['coursemisconf'] = 'Il corso è mal configurato';
$string['course_tool_types'] = 'Tipi di tool corso';
$string['createdon'] = 'Data di creazione';
$string['curllibrarymissing'] = 'Per usare LTI deve essere installata la libreria PHP Curl';
$string['custom'] = 'Parametri personalizzati';
$string['custom_config'] = 'Utilizzo del tool personalizzato di configurazione';
$string['custom_help'] = 'I parametri personalizzati sono impostazioni usate dal provider del tool. Ad esempio, è possibile usare un parametro personalizzato per visualizzare una specifica risorsa dal provider. I parametri devono essere inseriti uno per linea con il formato "nome=valore", ad esempio "capitolo=3".

Se non diversamente indicato dal provider, non modificare il campo.';
$string['custominstr'] = 'Parametri personalizzati';
$string['debuglaunch'] = 'Opzioni di debug';
$string['debuglaunchoff'] = 'Lancio normale';
$string['debuglaunchon'] = 'Lancio di debug';
$string['default'] = 'Default';
$string['default_launch_container'] = 'Contenitore di lancio di default';
$string['default_launch_container_help'] = 'Il contenitore di lancio influenza la visualizzazione del tool lanciato dal corso. Alcuni contenitori di lancio lasciano più libero il tool mentre altri forniscono una esperienza dell\'utente più integrata con Moodle

* ** Default** - Usa il contenitore di lancio impostato nella configurazione del tool.
* **incorpora** - Il tool viene visualizzato all\'interno della finestra di Moodle già esistente analogamente ad altri tipi di attività.
* **Incorpora, senza blocchi** - Il tool viene visualizzato all\'interno della finestra di Moodle già esistente, ma con i soli controlli di navigazione sulla parte superiore della pagina.
* **Nuova finestra** - Il tool viene aperto in una nuova finestra che occuperà tutto lo spazio disponibile. In funzione del tipo di browser, la nuova finestra può essere una finestra popup oppure un tab di una finestra già esistente. E\' possibile che il browser impedisca l\'apertura di nuove finestre.';
$string['delegate'] = 'Delega al docente';
$string['delete'] = 'Elimina';
$string['delete_confirmation'] = 'Sei sicuro di eliminare la configurazione del tool esterno?';
$string['deletetype'] = 'Elimina configurazione del tool esterno';
$string['display_description'] = 'Visualizza l\' introduzione dell\'attività all\'atto del lancio';
$string['display_description_help'] = 'Consente la visualizzazione dell\'introduzione alll\'attività sopra il contenuto del tool provider.

Visualizzare l\'introduzione è opzionale ma può essere utile per fornire ulteriori istruzione a colui che lancia il tool.

L\'introduzione non viene mai visualizzata quando si lancia il tool in una nuova finestra.';
$string['display_name'] = 'Visualizza il nome dell\'attività lanciata';
$string['display_name_help'] = 'Consente la visualizzazione del nome dell\'attività sopra il contenuto del tool provider.

Poiché è possibile che il tool provider visualizzi già il nome dell\'attività, con questa impostazione si può evitare di visualizzarlo due volte.

Il nome non viene visualizzato quando il lancio del tool avviene in una nuva finestra.';
$string['domain_mismatch'] = 'L\'URL del dominio per il lancio non corrisponde a quello configurato per il tool.';
$string['donot'] = 'Non inviare';
$string['donotaccept'] = 'Non accettare';
$string['donotallow'] = 'Non consentire';
$string['duplicateregurl'] = 'L\'URL di registrazione è già stata utilizzata';
$string['edittype'] = 'Modifica configurazione del tool esterno';
$string['embed'] = 'Incorpora';
$string['embed_no_blocks'] = 'incorporato, senza blocchi';
$string['enableemailnotification'] = 'Invia notifiche per email';
$string['enableemailnotification_help'] = 'Consente di inviare email di notifica agli studenti quando la loro consegna del tool sarà stata valutata.';
$string['errormisconfig'] = 'Il tool è mal configurato. Per favore chiedi al tuo amministratore Moodle di sistemare la configurazione del tool.';
$string['existing_window'] = 'Finestra esistente';
$string['extensions'] = 'Servizi di estensione LTI';
$string['external_tool_type'] = 'Tipo di tool esterno';
$string['external_tool_type_help'] = 'Lo scopo principale della configurazione del tool è quello di impostare una comunicazione sicura tra Moodle e il tool provider.
E\' anche un modo per configurare i default ed impostare eventuali servizi addizionali forniti dal tool.

* **Automatico, in funzione dell\'URL di lancio. Impostazione da scegliere nella maggior parte dei casi. Moodle sceglierà la configurazione più appropriata del tool in funzione dell\'URL di lancio. Verranno utilizzati tool configurati dall\'amministratore o nel corso. Specificando un URL di lancio, Moodle informerà se è in grado di trovarla oppure no. Nel caso in cui Moodle non riconosca l\'URL di lancio, potrebbe essere necessario inserire manualmente i dettagli della configurazione del tool.
* **Un tipo di tool specifico** - Scegliendo un tipo di tool specifico, puoi obbligare Moodle ad usare quella configurazione del tool per comunicare con il tool provider esterno. Qualora l\'URL di lancio non appartenga al tool provider. verrà visualizzato un avvertimento. In alcuni casi non è necessario impostare un URL di lancio (a meno che non si stia lanciando un URL specifico contenuto nel tool provider).
* **Configurazione personalizzata** - Per impostare una configurazione personalizzata del tool per questa specifica istanza, visualizza le Impostazioni avanzate ed inserisci consumer key e shared secret. Se non sei in possesso di conumer key e shared secret, richiedilo al tool provider esterno.
Non tutti i tool richiedono consumer key e shared secret, nel qual caso è possibile non compilare i relativi campi.

### Modifica del tipo di tool

Accanto al menu a discesa Tipo di tool esterno sono disponibili tre icone:

* **Aggiungi** - Consente la creazione di una configurazione di tool a livello di corso. Qualsiasi istanza di tool esterno nello stesso corso potrà usare questa configurazione.
* **Modifica** - Consente la scelta di una configurazione di tool a livello di corso e di modificarla.
* **Elimina** - Elimina una configurazione di tool a livello di corso';
$string['external_tool_types'] = 'Tipi tool esterno';
$string['failedtoconnect'] = 'Moodle non è riuscito a comunicare con il sistema "{$a}"';
$string['filter_basiclti_configlink'] = 'Configura i tuoi siti preferiti e le relative password';
$string['filter_basiclti_password'] = 'La password è obbligatoria';
$string['filterconfig'] = 'Gestione LTI';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Utilizza una configurazione esistente per l\'istanza mal configurata';
$string['fixnew'] = 'Nuova configurazione';
$string['fixnewconf'] = 'Crea una nuova configurazione per l\'istanza mal configurata';
$string['fixold'] = 'Usa esistente';
$string['forced_help'] = 'L\'impostazione è stata forzato in un corso o in una configurazione a livello di siti. Non puoi modificarla da questa interfaccia.';
$string['force_ssl'] = 'SSL obbligatorio';
$string['force_ssl_help'] = 'I lanci di questo tool provider saranno obbligati ad usare SSL.

Inoltre, SSL sarà utilizzato anche per richieste web service provenienti dal tool provider.

Per usare questa opzione, accertatevi che sia Moodle sia il tool provider supportino SSL.';
$string['generaltool'] = 'Tool generale';
$string['global_tool_types'] = 'Tipi di tool globali';
$string['grading'] = 'Instradamento valutazioni';
$string['icon_url'] = 'URL dell\'icona';
$string['icon_url_help'] = 'L\'URL dell\'icona consente di visualizzare nella home page del corso l\'icona specifica del tool al posto dell\'icona LTI default';
$string['id'] = 'id';
$string['invalidid'] = 'L\'ID LTI era errata';
$string['launch_in_moodle'] = 'Lancia il tool in Moodle';
$string['launchinpopup'] = 'Contenitore di lancio';
$string['launch_in_popup'] = 'Lancia il tool in una finestra pop-up';
$string['launchinpopup_help'] = 'Il contenitore di lancio influenza la visualizzazione del tool lanciato dal corso. Alcuni contenitori di lancio lasciano più libero il tool mentre altri forniscono una esperienza dell\'utente più integrata con Moodle

* ** Default** - Usa il contenitore di lancio impostato nella configurazione del tool.
* **incorpora** - Il tool viene visualizzato all\'interno della finestra di Moodle già esistente analogamente ad altri tipi di attività.
* **Incorpora, senza blocchi** - Il tool viene visualizzato all\'interno della finestra di Moodle già esistente, ma con i soli controlli di navigazione sulla parte superiore della pagina.
* **Nuova finestra** - Il tool viene aperto in una nuova finestra che occuperà tutto lo spazio disponibile. In funzione del tipo di browser, la nuova finestra può essere una finestra popup oppure un tab di una finestra già esistente. E\' possibile che il browser impedisca l\'apertura di nuove finestre.';
$string['launchoptions'] = 'Opzioni di lancio';
$string['launch_url'] = 'URL di lancio';
$string['launch_url_help'] = 'L\'URL di lancio specifica l\'indirizzo web del tool esterno e può contenere informazioni aggiuntive come la risorsa da visualizzare.
Se non sei certo su cosa inserire per l\'URL di lancio, verifica le informazioni con il tool provider.

Se hai selezionato un tipo di tool specifico, potrebbe non essere necessario inserire l\'URL di lancio, ad esempio quando l\'URl di lancio è utilizzata per accedere al sistema del tool provider invece che ad una specifica risorsa.';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'Aggiungere configurazioni Tool esterno a livello di corso';
$string['lti:addinstance'] = 'Aggiungere attività Tool esterno';
$string['lti_administration'] = 'Gestione LTI';
$string['lti_errormsg'] = 'Il tool ha restituito il messaggio di errore seguente: "{$a}"';
$string['lti:grade'] = 'Visualizzare valutazioni riportate da Tool esterni';
$string['lti_launch_error'] = 'Si è verificato un errore durante il lancio del tool esterno.';
$string['lti_launch_error_tool_request'] = '<p>
Per inviare all\'amministratore una richiesta di completamento di una configurazione di un tool, fai click su  <a href="{$a->admin_request_url}" target="_top">here</a>. </p>
Aiuto per questola stringa contiene un segnaposto';
$string['lti_launch_error_unsigned_help'] = '<p>L\'errore può essere causato dalla mancanza di consumer key e/o shared secret per l\'accesso al tool provider.
</p>
<p>Se disponi di consumer key e shared secret, puoi inserirli nella configurazione del tool esterno (accertati che le opzioni avanzate siano visibili)<br />
In alternativa, puoi creare una configurazione di  tool provider a livello di corso <a href="{$a->course_tool_editor}">here</a>. </p>';
$string['lti:manage'] = 'Diventare docente al lancio del tool esterno';
$string['lti:requesttooladd'] = 'Richiedere una configurazione tool per tutto il sito';
$string['ltisettings'] = 'Impostazioni LTI';
$string['lti_tool_request_added'] = 'La richiesta di configurare il tool è stata inviata correttamente. Contatta l\'amministratore per completare la configurazione.';
$string['lti_tool_request_existing'] = 'E\' già stata inviata una configurazione per il dominio del tool.';
$string['ltiunknownserviceapicall'] = 'Chiamata servizio API LTI sconosciuta';
$string['lti:view'] = 'Lanciare attività Tool esterno';
$string['main_admin'] = 'Help generale';
$string['main_admin_help'] = 'I tool esterni consentono a Moodle di interagire con risorse formative ospitate in altri siti. Tramite uno speciale protocollo di lancio, il tool remoto può accedere ad alcune informazioni relative all\'utente, come ad esempio il nome dell\'istituzione, l\'id del corso, l\'id dell\'utente, il nome dell\'utente e l\'email.

I tipi di tool elencati in questa pagina sono divisi in tre categorie:

* **Attivi** - Questi tool provider sono stati approvati e configurati da un amministratore e  possono essere utilizzati nei corsi. Se viene inserito un consumer key e uno shared secret, allora verrà stabilita una relazione di trust tra questa istanza Moodle e il tool esterno attraverso un canale di comunicazione sicuro.
* ** In attesa ** - Questi tool provider sono stati importati da un pacchetto ma non sono stati ancora configurati da una amministratore. I docenti possono usare i tool in attesa solo se hanno un consumer key ed uno shared secret oppure se questi parametri non sono necessari.
* ** Rifiutati ** - Questi tool provider sono stati contrassegnati per indicare che l\'amministratore non ha intenzione di renderli disponibili.  I docenti possono usare i tool rifiutati solo se hanno un consumer key ed uno shared secret oppure se questi parametri non sono necessari.';
$string['manage_tool_proxies'] = 'Gestione registrazione tool esterni';
$string['manage_tools'] = 'Gestione tipi tool esterni';
$string['miscellaneous'] = 'Varie';
$string['misconfiguredtools'] = 'Sono state rilevate istanze del tool mal configurate';
$string['missingparameterserror'] = 'La pagina è mal configurata: "{$a}"';
$string['module_class_type'] = 'Tipo di modulo Moodle';
$string['modulename'] = 'Tool esterno';
$string['modulename_help'] = 'Il modulo di attività tool esterno consente agli studenti di interagire con risorse formative ed attività presenti su altri siti web. Ad esempio, un tool esterno può fornire l\'accesso a nuovi tipi di attività o materiali resi disponibili da un editore.

Per creare un\'attività tool esterno, è necessario un tool provider che supporti LTI (Learning Tools Interoperability).
Un docente può creare una attività tool esterno oppure può utilizzare tool esterni configurati dall\'amministratore del sito.

I tool esterni si differenziano da una risorsa di tipo URL per diversi aspetti:

* I tool esterni possono conoscere il contesto, ossia possono avere accesso alle informazioni dell\'utente che li ha lanciati, come l\'istituzione di appartenenza, il corso, il nome, eccetera.
* I tool esterni possono leggere, aggiornare ed eliminare le valutazioni associate alla istanza dell\'attività.
* Le configurazioni di I tool esterni creano una relazione di trust tra Moodle e il tool provider, assicurando un canale di comunicazione sicuro.';
$string['modulenameplural'] = 'Tool Esterni';
$string['modulenamepluralformatted'] = 'Istanze LTI';
$string['name'] = 'Nome';
$string['never'] = 'Mai';
$string['new_window'] = 'Nuova finestra';
$string['noattempts'] = 'Non ci sono tentativi effettuati in questa istanza di tool';
$string['no_lti_configured'] = 'Non ci sono  tool esterni attivi e configurati.';
$string['no_lti_pending'] = 'Non ci sono  tool esterni in attesa.';
$string['no_lti_rejected'] = 'Non ci sono  tool esterni rifiutati.';
$string['noltis'] = 'Non ci sono istanze di tool esterni';
$string['noprofileservice'] = 'Non è stato trovato il Profile service';
$string['noservers'] = 'Non sono stati trovati server';
$string['no_tp_accepted'] = 'Non sono presenti registrazioni accettate di tool esterni';
$string['no_tp_cancelled'] = 'Non sono presenti registrazioni eliminate di tool esterni';
$string['no_tp_configured'] = 'Non ci sono  tool esterni non registrati.';
$string['no_tp_pending'] = 'Non sono presenti registrazioni in attesa di tool esterni.';
$string['no_tp_rejected'] = 'Non sono presenti registrazioni rifiutate di tool esterni.';
$string['notypes'] = 'Non ci sono tool LTI configurati in Moodle. Fai click sul link soprastante per aggiungerli.';
$string['noviewusers'] = 'Non sono stati trovati utenti con il privilegio di usare questo tool';
$string['optionalsettings'] = 'Impostazioni opzionali';
$string['organization'] = 'Dettagli dell\'organizzazione';
$string['organizationdescr'] = 'Descrizione dell\'organizzazione';
$string['organizationid'] = 'ID dell\'organizzazione';
$string['organizationid_help'] = 'Un identificativo univoco di questa istanza Moodle. Di solito si utilizza il nome DNS della organizzazione.

Lasciando vuoto il campo, per default verrà utilizzato il nome dell\'host di Moodle.';
$string['organizationurl'] = 'URL dell\'organizzazione';
$string['organizationurl_help'] = 'l\'URL di questa istanza Moodle.

Se l\'icona';
$string['pagesize'] = 'Invii visualizzati per pagina';
$string['parameter'] = 'Parametri tool';
$string['parameter_help'] = 'I parametri tool sono impostazioni obbligatorie da passare al tool provider nel tool proxy accettato.';
$string['password'] = 'Shared Secret';
$string['password_admin'] = 'Shared Secret';
$string['password_admin_help'] = 'Lo shared secret è come una password utilizzata per validare l\'accesso al tool. In genere viene fornita dal tool providere assieme al consumer key.

I tool che non richiedono una comunicazione sicura da Moodle e che non forniscono servizi addizionali (ad esempio, comunicare il punteggio) possono funzionare senza shared secret.';
$string['password_help'] = 'Per i tool preconfigurati, non è necessario inserire lo shared secret poiché sarà fornito come parte del processo di configurazione.

Il campo dovrebbe essere compilato quando si crea un link ad un tool provider non ancora configurato.
Se il tool provider deve essere utilizzato in questo corso più di una volta, può essere una buona idea aggiungere una configurazione di tool a livello di corso.

Lo shared secret è simile ad una password per autenticarsi ed accedere al tool, in genere viene fornita dal tool provider assieme al consumer key.

I tool che non richiedono una comunicazione sicura da Moodle e non forniscono servizi addizionali (come le votazioni ottenute) potrebbero non richiedere uno shared secret.';
$string['pending'] = 'In attesa';
$string['pluginadministration'] = 'Gestione LTI';
$string['pluginname'] = 'LTI';
$string['preferheight'] = 'Altezza preferita';
$string['preferwidget'] = 'Preferire lancio widget';
$string['preferwidth'] = 'Larghezza preferita';
$string['press_to_submit'] = 'Premi per lanciare l\'attività';
$string['privacy'] = 'Privacy';
$string['quickgrade'] = 'Consenti valutazione rapida';
$string['quickgrade_help'] = 'Consente la valutazione di più tool nella stessa pagina. E\' possibile aggiungere valutazioni e commenti e poi fare click su "Salva tutti i miei feedback" per salvare tutte le modifiche apportate nella pagina.';
$string['redirect'] = 'Tra pochi secondi verrai reindirizzato, in caso contrario premi il pulsante.';
$string['register'] = 'Regsitra';
$string['registertype'] = 'Aggiungi registrazione tool esterno';
$string['register_warning'] = 'La pagina di registrazione sta impiegando troppo tempo per essere visualizzata. Se non dovesse comparire, verificare di aver inserto l\'URL corretto nelle impostazioni di configurazione.';
$string['registrationname'] = 'Nome tool provider';
$string['registrationname_help'] = 'Il nome del tool provider da registare';
$string['registration_options'] = 'Opzioni di registrazione';
$string['registrationurl'] = 'URL di registrazione';
$string['registrationurl_help'] = 'L\'URL di registrazione viene resa disponibile dal tool provider ed è la locazione dove indirizzare le richieste di iscrizione.';
$string['reject'] = 'Rifiuta';
$string['rejected'] = 'Rifiutati';
$string['resource'] = 'Risorsa';
$string['resourcekey'] = 'Consumer Key';
$string['resourcekey_admin'] = 'Consumer Key';
$string['resourcekey_admin_help'] = 'Il consumer key può essere considerato uno username da utilizzare per autenticare l\'accesso al tool.
Può essere usato dal tool provider per identificate univocamente il sito Moodle di provenienza delle chiamate.

Il consumer key viene fornito dal tool provider. Ciascun tool provider fornisce il consumer key in base a propri criteri, quindi è molto probabile che per ottenerlo sia necessario rivolgersi al tool provider stesso.

I tool che non richiedono una canale di comunicazione sicuro da Moodle e che non forniscono servizi aggiuntivi (ad esempio, comunicare le valutazioni) possono funzionare anche senza consumer key.';
$string['resourcekey_help'] = 'Per i tool preconfigurati, non è necessario inserire un consumer key in quanto già fornita durante il processo di configurazione.

Il campo va compilato solo se si crea un collegamento al tool provider che non sia già stato configurato.
Se il tool provider deve essere utilizzato più di una volta nello stesso corso, è consigliabile creare un configurazione di too a livello di corso.

Il consumer key può essere considerato uno username da utilizzare per autenticare l\'accesso al tool.
Può essere usato dal tool provider per identificate univocamente il sito Moodle di provenienza delle chiamate.

Il consumer key viene fornito dal tool provider. Ciascun tool provider fornisce il consumer key in base a propri criteri, quindi è molto probabile che per ottenerlo sia necessario rivolgersi al tool provider stesso.

I tool che non richiedono una canale di comunicazione sicuro da Moodle e che non forniscono servizi aggiuntivi (ad esempio, comunicare le valutazioni) possono funzionare anche senza consumer key.';
$string['resourceurl'] = 'URL risorsa';
$string['return_to_course'] = 'Fai click su <a href="{$a->link}" target="_top">here</a> per tornare al corso.';
$string['saveallfeedback'] = 'Salva tutti i miei feedback';
$string['secure_icon_url'] = 'URL sicura dell\'icona';
$string['secure_icon_url_help'] = 'Simile all\'URL dell\'icona, viene utilizzato se l\'utente accede a Moodle tramite SSL. Lo scopo principale di questa impostazione è quello di prevenire gli avvertimenti che il browser presenta agli utenti quando la pagina è stata acceduta via SSL ma contiene anche contenuti forniti senza SSL.';
$string['secure_launch_url'] = 'URL sicura di lancio';
$string['secure_launch_url_help'] = 'Simile all\'URL di lancio, viene utilizzato nel caso in cui è necessario un elevato livello di sicurezza. Moodle utilizzerà l\'URL sicuro di lancio al posto dell\'URL di lancio se il sito Moodle viene acceduto cia SSL oppure se ila configurazione del tool è impostata per lancio tramite SSL.

E\' anche possibile utilizzare un indirizzo https per l\'URL di lancio e lasciare vuoto il campo URL sicuro di lancio, forzando così il lancio via SSL';
$string['send'] = 'Invia';
$string['services'] = 'Servizi';
$string['services_help'] = 'Seleziona i servizi che desideri offrire al tool provider. E\' possibile selezionare più di un servizio.';
$string['setupoptions'] = 'Opzioni setup';
$string['share_email'] = 'Rendi noto al tool l\'email di chi lo ha lanciato';
$string['share_email_admin'] = 'Rendi noto al tool l\'email di chi lo ha lanciato';
$string['share_email_admin_help'] = 'E\' possibile rendere noto al tool provider l\'indirizzo email dell\'utente che lo ha lanciato.
Il tool provider potrebbe avere bisogno dell\'indirizzo email di colui che lo ha lanciato per distinguere gli utenti aventi lo stesso nome, oppure per inviare email in funzione delle attività svolte dall\'utente.';
$string['share_email_help'] = 'E\' possibile rendere noto al tool provider l\'indirizzo email dell\'utente che lo ha lanciato.
Il tool provider potrebbe avere bisogno dell\'indirizzo email di colui che lo ha lanciato per distinguere gli utenti aventi lo stesso nome, oppure per inviare email in funzione delle attività svolte dall\'utente.

Da notare che questa impostazione potrebbe essere reimpostata dalla configurazione del tool.';
$string['share_name'] = 'Rendi noto al tool il nome di chi lo ha lanciato';
$string['share_name_admin'] = 'Rendi noto al tool il nome di chi lo ha lanciato';
$string['share_name_admin_help'] = 'E\' possibile rendere noto al tool provider il nome e cognome  dell\'utente che lo ha lanciato. Il tool provider potrebbe avere bisogno del nome e cognome di colui che lo ha lanciato per visualizzare informazioni utili nel tool.';
$string['share_name_help'] = 'E\' possibile rendere noto al tool provider il nome e cognome  dell\'utente che lo ha lanciato. Il tool provider potrebbe avere bisogno del nome e cognome di colui che lo ha lanciato per visualizzare informazioni utili nel tool.

Da notare che questa impostazione potrebbe essere reimpostata dalla configurazione del tool.';
$string['share_roster'] = 'Consenti al tool di accedere all\'elenco dei partecipanti al corso';
$string['share_roster_admin'] = 'Il tool può accedere agli iscritti al corso';
$string['share_roster_admin_help'] = 'E\' possibile consentire al tool di conoscere l\'elenco dei partecipanti al corso da cui viene lanciato il tool stesso.';
$string['share_roster_help'] = 'E\' possibile consentire al tool di conoscere l\'elenco dei partecipanti al corso da cui viene lanciato il tool stesso.

Da notare che questa impostazione potrebbe essere reimpostata dalla configurazione del tool.';
$string['show_in_course'] = 'Visualizza il tipo di tool durante la creazione di istanze';
$string['show_in_course_help'] = 'Consente di rendere disponibile questa configurazione di tool ai docenti dei corsi  tramite il menu a discesa "Tipo di tool esterno".

Nella magigor parte dei casi questa opzione non è necessaria, i docenti possono usare questa configurazione di tool in base all\'URl di lancio corrispondente all\'URL base del tool. che è il metodo da preferire.

L\'unico caso in cui questa opzione è utile è quando la configurazione del tool è utilizzata per il Single Sign On, ad esempio quando l\'utente che lancia il tool viene portato in una pagina di atterraggio anziché ad una risorsa specifica.';
$string['size'] = 'Dimensione parametri';
$string['submission'] = 'Invii';
$string['submissions'] = 'Invii';
$string['submissionsfor'] = 'Invii per {$a}';
$string['subplugintype_ltiresource'] = 'Risorsa servizio LTI';
$string['subplugintype_ltiresource_plural'] = 'Risorse servizio LTI';
$string['subplugintype_ltiservice'] = 'Servizio LTI';
$string['subplugintype_ltiservice_plural'] = 'Servizi LTI';
$string['subplugintype_ltisource'] = 'LTI source';
$string['subplugintype_ltisource_plural'] = 'LTI source';
$string['toggle_debug_data'] = 'Dati di debug on/off';
$string['tool_config_not_found'] = 'Per questa URL non è stata trovata nessuna configurazione del tool.';
$string['toolproxy'] = 'Registrazioni tool esterno';
$string['toolproxy_help'] = 'Le registrazioni di tool esterni consentono agli amministratori di Moodle di configurare tool esterni tramite un tool proxy di un tool provider che supporti LTI 2.0. Per avviare una registrazione Il solo parametro necessario è l\'URL fornita dal tool provider. Le funzionalità ed i servizi offerti dal tool provider possono essere selezionati durante la configurazione di una nuova registrazione.

Le registrazioni di tool sono suddivisi in quattro categorie:

* **Configurati** - Le registrazioni di tool sono state impostate ma la registrazioni non sono state avviate.
* ** In attesa ** - Le registrazioni sono state avviate ma non sono terminate. Aprirle e salvare le impostazioni per spostarle nella categorie "Configurati"
* **Accettati ** - le registrazioni sono approvate: le risorse specificate nel tool proxy appariranno nella pagina del tool esterno con uno stato iniziale di \' in attesa\'.
* ** Rifiutati ** - Le registrazioni rifiutate. Aprirle e salvarle le impostazioni per spostarle nella categoria "Configurati".';
$string['toolproxyregistration'] = 'Registrazione tool esterno';
$string['toolregistration'] = 'Registrazione tool esterno';
$string['tool_settings'] = 'Impostazioni tool';
$string['toolsetup'] = 'Configurazione tool esterno';
$string['toolurl'] = 'Base URL del tool';
$string['toolurl_help'] = 'L\'URL base del tool viene utilizzata per far corrispondere  l\'URL di lancio del tool con la relativa configurazione. Il prefisso http(s) sull\'URL è opzionale.

Inoltre, l\'URL base viene utilizzata come URL di lancio se non è stata definita una URL di lancio nell\'stanza del tool esterno.

Ad esempio, un URL base come *tool.com* corrisponde a:

* tool.com
* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=10
* www.tool.com/quizzes

Un URL base come *www.tool.com/quizzes* corrisponde a:

* www.tool.com/quizzes
* tool.com/quizzes
* tool.com/quizzes/take.php?id=10


Un URL base come *quiz.tool.com* corrisponde a:

* quiz.tool.com
* quiz.tool.com/take.php?id=10

Se due configurazioni di tool si riferiscono ad uno stesso dominio, verrà utilizzata la corrispondenza più rilevante.';
$string['typename'] = 'Nome del tool';
$string['typename_help'] = 'Il nome del tool è consente di identificare il provider del tool in Moodle. Il nome sarà visibile ai docenti quando aggiungono i tool nei corsi.';
$string['types'] = 'Tipi';
$string['update'] = 'Aggiorna';
$string['using_tool_configuration'] = 'Configurazione del tool in uso:';
$string['validurl'] = 'Un URL valido deve cominciare con http(s)://';
$string['viewsubmissions'] = 'Visualizza lo schermata con gli invii e le valutazioni';

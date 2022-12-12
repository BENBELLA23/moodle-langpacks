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
 * Strings for component 'auth_oidc', language 'sv', version '3.11'.
 *
 * @package     auth_oidc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['application_updated'] = 'Inställningarna för OpenID Connect uppdaterades.';
$string['auth_method_certificate'] = 'Certifikat';
$string['auth_method_secret'] = 'Hemlighet';
$string['auth_oidcdescription'] = 'OpenID Connect-pluginmodulen tillhandahåller funktioner för enkel inloggning med konfigurerbara identitetsleverantörer.';
$string['authendpoint'] = 'Auktorisationsslutpunkt';
$string['authentication_and_endpoints_saved'] = 'Autentisering- och slutpunktsinställningarna uppdaterades.';
$string['cfg_authenticationlink_desc'] = '<a href="{$a}" target="_blank">Länk till IdP- och autentiseringsinställningar</a>';
$string['cfg_autoappend_desc'] = 'Lägg automatiskt till den här strängen när du loggar in användare med autentiseringsmetoden "Resursägarlösenord". Detta är användbart när din identitetsleverantör kräver en gemensam domän, men inte vill kräva att användarna skriver in den när de loggar in. Om den fullständiga OpenID Connect-användaren till exempel är "james@example.com" och du anger "@example.com" här, behöver användaren bara ange "james" som användarnamn. OBS! Om det finns motstridiga användarnamn, dvs. en Moodle-användare med samma namn, används autentiseringspluginmodulens prioritet för att avgöra vilken användare som kommer att användas.';
$string['cfg_autoappend_key'] = 'Addera automatiskt';
$string['cfg_customicon_desc'] = 'Om du vill använda din egen ikon laddar du upp den här. Detta åsidosätter alla ikoner som valts ovan.<br /><br /><b> Information om hur du använder anpassade ikoner:</b><ul><li>Denhär bilden kommer inte att storleksanpassas på inloggningssidan, så vi rekommenderar att du laddar upp en bild som inte är större än 35x35 pixlar.</li><li>Om du har laddat upp en anpassad ikon och vill gå tillbaka till en av de färdiga ikonerna klickar du på den anpassade ikonen i rutan ovan och sedan på "Ta bort". Klicka sedan på "OK" och klickar sedan på "Spara ändringar" längst ner i det här formuläret. Den valda ikonen visas nu på Moodle-inloggningssidan.</li></ul>';
$string['cfg_customicon_key'] = 'Anpassad ikon';
$string['cfg_debugmode_desc'] = 'Om aktiverat loggas information till Moodle-loggen som kan hjälpa till att identifiera problem.';
$string['cfg_debugmode_key'] = 'Spara felsökningsmeddelanden';
$string['cfg_domainhint_desc'] = 'När du använder autentiseringsmetoden "Auktoriseringskod" skickar du det här värdet som parametern "domain_hint". Parametern används av vissa OpenID Connect-leverantörer för att göra inloggningsprocessen enklare för användare. Kontrollera med din leverantör om de stöder den här parametern.';
$string['cfg_domainhint_key'] = 'Domänledtråd';
$string['cfg_err_invalidauthendpoint'] = 'Ogiltig auktorisationsslutpunkt';
$string['cfg_err_invalidclientid'] = 'Ogiltigt klient-ID';
$string['cfg_err_invalidclientsecret'] = 'Ogiltig klienthemlighet';
$string['cfg_err_invalidtokenendpoint'] = 'Ogiltig tokenslutpunkt';
$string['cfg_field_mapping_desc'] = 'Användarprofildata kan mappas från Open ID Connect-identitetsleverantörer (IdP) till Moodle.<br/>
<ul>
<li>Grundläggande profildata är tillgängliga via ID-token från alla IdP.</li>
<li>Om Azure AD används som IdP kan ytterligare profildata göras tillgängliga genom att installera och konfigurera pluginmodulen <a href="https://moodle.org/plugins/local_o365">Microsoft 365-integration (local_o365)</a>.</li>
<li>Om SDS-profilsynkroniseringsfunktionen är aktiverad i pluginmodulen local_o365 kan vissa profilfält synkroniseras från SDS till Moodle.</li>
</ul>';
$string['cfg_forceredirect_desc'] = 'Om det här alternativet är aktiverat hoppas inloggningssidan över och omdirigerar till OpenID Connect-sidan. Kan kringgås med URL-parametern <code>?noredirect=1</code>';
$string['cfg_forceredirect_key'] = 'Tvinga omdirigering';
$string['cfg_icon_desc'] = 'Den ikon som ska visas bredvid leverantörens namn på inloggningssidan.';
$string['cfg_icon_key'] = 'Ikon';
$string['cfg_iconalt_check'] = 'Bockmarkeringsikon';
$string['cfg_iconalt_go'] = 'Grön cirkel';
$string['cfg_iconalt_group'] = 'Gruppikon';
$string['cfg_iconalt_group2'] = 'Alternativ gruppikon';
$string['cfg_iconalt_key'] = 'Nyckelikon';
$string['cfg_iconalt_lock'] = 'Låsikon';
$string['cfg_iconalt_locked'] = 'Låst-ikon';
$string['cfg_iconalt_mnet'] = 'MNet-ikon';
$string['cfg_iconalt_o365'] = 'Microsoft 365-ikon';
$string['cfg_iconalt_plus'] = 'Plus-ikon';
$string['cfg_iconalt_rightarrow'] = 'Högerpil-ikon';
$string['cfg_iconalt_stop'] = 'Röd cirkel';
$string['cfg_iconalt_user'] = 'Användarikon';
$string['cfg_iconalt_user2'] = 'Alternativ användarikon';
$string['cfg_iconalt_userlock'] = 'Användare med lås-ikon';
$string['cfg_loginflow_authcode'] = 'Auktorisationskodflöde (rekommenderas)';
$string['cfg_loginflow_authcode_desc'] = 'Med det här flödet klickar användaren på namnet på identitetsleverantören (se "Leverantörsnamn" ovan) på Moodle-inloggningssidan och omdirigeras till leverantören för att logga in. När användaren har loggat in omdirigeras den tillbaka till Moodle där Moodle-inloggningen sker transparent. Detta är det mest standardiserade och säkra sättet för användaren att logga in.';
$string['cfg_loginflow_key'] = 'Autentiseringsmetod';
$string['cfg_loginflow_rocreds'] = 'Resursägarlösenord';
$string['cfg_loginflow_rocreds_desc'] = 'Med hjälp av det här flödet anger användaren sitt användarnamn och lösenord i Moodle-inloggningsformuläret så som hen skulle göra vid en manuell inloggning. Detta auktoriserar användaren för identitetsleverantören, men skapar ingen session på identitetsleverantörens webbplats. Om du till exempel använder Microsoft 365 med OpenID Connect loggas användaren in i Moodle men inte i Microsoft 365. Du bör använda auktoriseringsbegäran om du vill att användarna ska vara inloggade på både Moodle och hos identitetsleverantören. Observera att inte alla identitetsleverantörer stöder det här flödet. Det här alternativet bör endast användas när andra auktoriseringstyper inte är tillgängliga.';
$string['cfg_logoutendpoint_desc'] = 'URI:n för utloggningsslutpunkten från din identitetsleverantör att använda.';
$string['cfg_logoutendpoint_key'] = 'Utloggningsslutpunkt';
$string['cfg_opname_desc'] = 'Detta är en etikett som visas för användaren som identifierar vilken typ av autentiseringsuppgifter användaren måste använda för att logga in. Den här etiketten används i alla användarsynliga delar i denna plugin för att identifiera din leverantör.';
$string['cfg_opname_key'] = 'Leverantörsnamn';
$string['cfg_redirecturi_desc'] = 'Detta är URI:n som kommer att användas som "Omdirigerings-URI". Din OpenID Connect-identitetsleverantör bör be om denna när du registrerar Moodle som klient.<br/><b>OBS!</b> Du måste ange denna i OpenID Connect-leverantören *exakt* som den visas här. Eventuella skillnader förhindrar inloggningar med OpenID Connect.';
$string['cfg_redirecturi_key'] = 'Omdirigerings-URI';
$string['cfg_signoffintegration_desc'] = 'Om det här alternativet är aktiverat kommer Moodle att försöka logga ut användaren även från Office 365 när en Moodle-användare som använder OpenID Connect-autentisering loggar ut från Moodle.

URL:en till Moodle-webbplatsen ({$a}) måste läggas till som en omdirigerings-URI i Azure-appen som skapats för Moodle Office 365-integrationen.';
$string['cfg_signoffintegration_key'] = 'Enkel utloggning';
$string['cfg_userrestrictions_desc'] = 'Tillåt bara användare som uppfyller vissa begränsningar att logga in.<br /><b>Så här gör du:</b><ul>
<li>Ange ett <a href="https://sv.wikipedia.org/wiki/Regulj%C3%A4ra_uttryck">reguljärt uttryck</a> som matchar användarnamnen för användare som du vill tillåta. </li>
<li>Ange <b>ett</b> mönster per rad</li>
<li>Om du anger flera mönster tillåts en användare om de matchar <b>något</b> av mönstren.</li>
<li>Tecknet "/" måste ersättas med "\\".</li>
<li>Om du inte anger några begränsningar ovan kommer alla användare som kan logga in till OpenID Connect-leverantören att accepteras av Moodle.</li>
<li>En användare som inte matchar några angivna mönster förhindras från att logga in med OpenID Connect.</li></ul>';
$string['cfg_userrestrictions_key'] = 'Användarbegränsningar';
$string['cfg_userrestrictionscasesensitive_key'] = 'Användarbegränsningar (skiftlägeskänsliga)';
$string['cleanup_oidc_tokens'] = 'Rensa OpenID Connect-tokens';
$string['clientid'] = 'Applikations-ID';
$string['clientsecret'] = 'Klienthemlighet';
$string['delete_token'] = 'Ta bort token';
$string['delete_token_and_reference'] = 'Ta bort token och referens';
$string['errorauthdisconnectemptypassword'] = 'Lösenordet får inte vara tomt';
$string['errorauthdisconnectemptyusername'] = 'Användarnamnet får inte vara tomt';
$string['errorauthdisconnectifmanual'] = 'Om du använder den manuella inloggningsmetoden anger du autentiseringsuppgifter nedan.';
$string['errorauthdisconnectinvalidmethod'] = 'Ogiltig inloggningsmetod togs emot.';
$string['errorauthdisconnectnewmethod'] = 'Inloggningsmetod för användare';
$string['errorauthdisconnectusernameexists'] = 'Användarnamnet finns redan. Välj ett annat.';
$string['errorauthgeneral'] = 'Det uppstod ett problem när du skulle loggas in. Kontakta administratören om du behöver hjälp.';
$string['errorauthinvalididtoken'] = 'Ogiltigt <code>id_token</code> togs emot.';
$string['errorauthloginfailednouser'] = 'Ogiltig inloggning: Användaren hittades inte i Moodle. Om den här webbplatsen har inställningen "Förhindra att konto skapas vid autentisering" aktiverad kan det innebära att du behöver hjälp från en administratör för att skapa ett konto åt dig först.';
$string['errorauthnoauthcode'] = 'Ingen auktoriseringskod togs emot från identitetsservern. Felloggarna kan ge mer information.';
$string['errorauthnohttpclient'] = 'Ange en HTTP-klient.';
$string['errorauthnoidtoken'] = 'OpenID Connect id_token togs inte emot.';
$string['errorauthunknownstate'] = 'Okänt tillstånd.';
$string['errorauthuseralreadyconnected'] = 'Du är redan associerad med en annan OpenID Connect-användare.';
$string['errorauthuserconnectedtodifferent'] = 'OpenID Connect-användaren som autentiserades är redan associerad med en Moodle-användare.';
$string['errorbadloginflow'] = 'Ogiltig autentiseringstyp har angetts. Om du får detta felmeddelande efter en ny installation eller uppgradering rensar du Moodle-cachen och försöker igen.';
$string['errorinvalidredirect_message'] = 'Den URL du försöket omdirigera till finns inte.';
$string['errorjwtbadpayload'] = 'Kunde inte läsa JWT-data.';
$string['errorjwtcouldnotreadheader'] = 'Kunde inte läsa JWT-huvud';
$string['errorjwtempty'] = 'En tom eller icke-strängs JWT togs emot.';
$string['errorjwtinvalidheader'] = 'Ogiltigt JWT-huvud';
$string['errorjwtmalformed'] = 'Felformaterad JWT togs emot.';
$string['errorjwtunsupportedalg'] = 'JWS Alg eller JWE stöds ej';
$string['errorlogintoconnectedaccount'] = 'Den här Microsoft 365-användaren är ansluten till ett Moodle-konto, men OpenID Connect-inloggning är inte aktiverad för det här Moodle-kontot. Logga in på Moodle-kontot med kontots definierade autentiseringsmetod för att använda Microsoft 365-funktioner.';
$string['errornodisconnectionauthmethod'] = 'Det går inte att koppla från eftersom det inte finns någon aktiverad autentiseringsplugin att använda istället. (antingen användarens tidigare inloggningsmetod eller den manuella inloggningsmetoden).';
$string['erroroidccall'] = 'Fel i Open ID Connect. Kontrollera loggarna för ytterligare information.';
$string['erroroidccall_message'] = 'Fel i Open ID Connect: {$a}';
$string['erroroidcclientinsecuretokenendpoint'] = 'Tokenslutpunkten måste använda SSL/TLS för detta.';
$string['erroroidcclientinvalidendpoint'] = 'Ogiltig URI togs emot.';
$string['erroroidcclientnoauthendpoint'] = 'Ingen auktorisationsslutpunkt har konfigurerats. Ställ in med $this->setendpoints';
$string['erroroidcclientnocreds'] = 'Ställ in inloggningsuppgifter för klienten med setcreds';
$string['erroroidcclientnotokenendpoint'] = 'Ingen tokenslutpunkt har konfigurerats. Ställ in med $this->setendpoints';
$string['erroroidcnotenabled'] = 'Pluginmodulen OpenID Connect är inte aktiverad.';
$string['errorrestricted'] = 'Den här webbplatsen har begränsningar för vilka användare som kan logga in med OpenID Connect. Dessa begränsningar hindrar dig för närvarande från att slutföra det här inloggningsförsöket.';
$string['errorucpinvalidaction'] = 'Ogiltig åtgärd mottogs.';
$string['errorusermatched'] = 'Microsoft 365-kontot "{$a->aadupn}" matchas redan med Moodle-användaren "{$a->username}". För att slutföra anslutningen, vänligen logga in som moodle-användare först och följ instruktionerna i Microsoft-blocket.';
$string['event_debug'] = 'Felsökningsmeddelande';
$string['eventuserauthed'] = 'Användare auktoriserad med OpenID Connect';
$string['eventuserconnected'] = 'Användare ansluten till OpenID Connect';
$string['eventusercreated'] = 'Användare skapad med OpenID Connect';
$string['eventuserdisconnected'] = 'Användare frånkopplad från OpenID Connect';
$string['eventuserloggedin'] = 'Användaren loggade in med OpenID Connect';
$string['heading_additional_options'] = 'Ytterligare alternativ';
$string['heading_basic'] = 'Grundinställningar';
$string['heading_debugging'] = 'Felsökning';
$string['heading_user_restrictions'] = 'Användarbegränsningar';
$string['idp_type_azuread'] = 'Azure AD (v1.0)';
$string['idp_type_other'] = 'Övrig';
$string['mismatched'] = 'Missmatchat';
$string['mismatched_details'] = 'Tokenposten innehåller användarnamnet "{$a->tokenusername}". Matchad Moodle-användare har användarnamnet "{$a->moodleusername}".';
$string['na'] = 'n/a';
$string['no_token_to_cleanup'] = 'Det finns inga OUDC-token att rensa bort.';
$string['oidc:manageconnection'] = 'Tillåt OpenID-anslutning och frånkoppling';
$string['oidc:manageconnectionconnect'] = 'Tillåt OpenID-anslutning';
$string['oidc:manageconnectiondisconnect'] = 'Tillåt OpenID-frånkoppling';
$string['oidcresource'] = 'Resurs';
$string['oidcscope'] = 'Omfång';
$string['pluginname'] = 'OpenID Connect';
$string['privacy:metadata:auth_oidc'] = 'OpenID Connect-autentisering';
$string['privacy:metadata:auth_oidc_prevlogin'] = 'Tidigare inloggningsmetoder för att ångra Microsoft 365-anslutningar';
$string['privacy:metadata:auth_oidc_prevlogin:method'] = 'Den föregående inloggningsmetoden';
$string['privacy:metadata:auth_oidc_prevlogin:password'] = 'Det föregående (krypterade) lösenordsfält.';
$string['privacy:metadata:auth_oidc_prevlogin:userid'] = 'Moodleanvändarens ID';
$string['privacy:metadata:auth_oidc_token'] = 'OpenID Connect token';
$string['privacy:metadata:auth_oidc_token:authcode'] = 'Auth code för token';
$string['privacy:metadata:auth_oidc_token:expiry'] = 'Tokenförfallandet';
$string['privacy:metadata:auth_oidc_token:idtoken'] = 'ID-token';
$string['privacy:metadata:auth_oidc_token:oidcuniqid'] = 'Det unika OIDC-användar id:t';
$string['privacy:metadata:auth_oidc_token:oidcusername'] = 'Användarnamn för OIDC-användaren';
$string['privacy:metadata:auth_oidc_token:refreshtoken'] = 'Förnyelsetoken';
$string['privacy:metadata:auth_oidc_token:scope'] = 'Tokenomfång';
$string['privacy:metadata:auth_oidc_token:token'] = 'Token';
$string['privacy:metadata:auth_oidc_token:tokenresource'] = 'Tokenresursen';
$string['privacy:metadata:auth_oidc_token:userid'] = 'Användar-ID för Moodle-användaren';
$string['privacy:metadata:auth_oidc_token:username'] = 'Användarnamnet för Moodle-användaren';
$string['settings_fieldmap_feild_not_mapped'] = '(ej mappad)';
$string['settings_fieldmap_field_businessPhones'] = 'Telefon (arbete)';
$string['settings_fieldmap_field_city'] = 'Stad';
$string['settings_fieldmap_field_companyName'] = 'Företagsnamn';
$string['settings_fieldmap_field_country'] = 'Land';
$string['settings_fieldmap_field_department'] = 'Avdelning';
$string['settings_fieldmap_field_displayName'] = 'Visningsnamn';
$string['settings_fieldmap_field_employeeId'] = 'Anställnings-ID';
$string['settings_fieldmap_field_extensionattribute'] = 'Utökningsattribut {$a}';
$string['settings_fieldmap_field_faxNumber'] = 'Fax';
$string['settings_fieldmap_field_givenName'] = 'Namn';
$string['settings_fieldmap_field_groups'] = 'Grupper';
$string['settings_fieldmap_field_jobTitle'] = 'Titel';
$string['settings_fieldmap_field_mail'] = 'E-post';
$string['settings_fieldmap_field_manager'] = 'Chef';
$string['settings_fieldmap_field_mobile'] = 'Telefon (mobil)';
$string['settings_fieldmap_field_mobilePhone'] = 'Mobiltelefon';
$string['settings_fieldmap_field_objectId'] = 'Objekt-ID';
$string['settings_fieldmap_field_officeLocation'] = 'Arbetsplats';
$string['settings_fieldmap_field_postalCode'] = 'Postnummer';
$string['settings_fieldmap_field_preferredLanguage'] = 'Språk';
$string['settings_fieldmap_field_preferredName'] = 'Tilltalsnamn';
$string['settings_fieldmap_field_roles'] = 'Roller';
$string['settings_fieldmap_field_sds_school_id'] = 'SDS skol-ID ({$a})';
$string['settings_fieldmap_field_sds_school_name'] = 'SDS skolnamn ({$a})';
$string['settings_fieldmap_field_sds_school_role'] = 'SDS skolroll ("Student" eller "Lärare")';
$string['settings_fieldmap_field_sds_student_birthDate'] = 'Födelsedatum för SDS-student';
$string['settings_fieldmap_field_sds_student_externalId'] = 'Externt ID för SDS-student';
$string['settings_fieldmap_field_sds_student_grade'] = 'Betyg för SDS-student';
$string['settings_fieldmap_field_sds_student_graduationYear'] = 'Avgångsår för SDS-student';
$string['settings_fieldmap_field_sds_student_studentNumber'] = 'SDS-studentnummer';
$string['settings_fieldmap_field_sds_teacher_externalId'] = 'Externt ID för SDS-lärare';
$string['settings_fieldmap_field_sds_teacher_teacherNumber'] = 'SDS-lärarnummer';
$string['settings_fieldmap_field_state'] = 'Stat';
$string['settings_fieldmap_field_streetAddress'] = 'Gatuadress';
$string['settings_fieldmap_field_surname'] = 'Efternamn';
$string['settings_fieldmap_field_teams'] = 'Teams';
$string['settings_fieldmap_field_telephoneNumber'] = 'Telefonnummer';
$string['settings_fieldmap_field_userPrincipalName'] = 'Användarnamn (UPN)';
$string['settings_page_other_settings'] = 'Övriga alternativ';
$string['settings_section_authentication'] = 'Autentisering';
$string['settings_section_basic'] = 'Grundinställningar';
$string['settings_section_endpoints'] = 'Slutpunkter';
$string['settings_section_other_params'] = 'Övriga parametrar';
$string['table_action'] = 'Åtgärd';
$string['table_matching_details'] = 'Detaljer';
$string['table_matching_status'] = 'Matchningsstatus';
$string['table_oidc_username'] = 'OIDC-användarnamn';
$string['table_token_id'] = 'Token-post ID';
$string['table_token_unique_id'] = 'Unikt OIDC-id';
$string['task_cleanup_oidc_state_and_token'] = 'Städa upp OIDC-tillstånd och ogiltiga token';
$string['token_deleted'] = 'Token togs bort';
$string['tokenendpoint'] = 'Tokenslutpunkt';
$string['ucp_disconnect_details'] = 'Detta kommer koppla från Moodlekontot från {$a}. Du måste skapa ett användarnamn och lösenord för att logga in på Moodle.';
$string['ucp_disconnect_title'] = '{$a}-frånkoppling';
$string['ucp_general_intro'] = 'Här kan du hantera anslutningen till {$a}. Om den är aktiverad kan du använda ditt {$a}-konto för att logga in på Moodle i stället för ett separat användarnamn och lösenord. När du är ansluten behöver du inte längre komma ihåg ett användarnamn och lösenord för Moodle utan alla inloggningar hanteras av {$a}.';
$string['ucp_login_start'] = 'Börja använda {$a} för att logga in i Moodle';
$string['ucp_login_start_desc'] = 'Detta kommer att ändra kontot till att använda {$a} för att logga in på Moodle. När det aktiverats loggar du in med dina {$a}-autentiseringsuppgifter – ditt nuvarande Moodle-användarnamn och lösenord kommer inte att fungera. Du kan koppla från ditt konto när som helst och återgå till att logga in normalt.';
$string['ucp_login_status'] = '{$a}-inloggningen är:';
$string['ucp_login_stop'] = 'Sluta använda {$a} för att logga in i Moodle';
$string['ucp_login_stop_desc'] = 'Du använder för närvarande {$a} för att logga in på Moodle. Om du klickar på "Sluta använda {$a}-inloggning" kopplas Moodle-kontot bort från {$a}. Du kommer inte längre att kunna logga in på Moodle med ditt {$a}-konto. Du kommer att bli ombedd att skapa ett användarnamn och lösenord, och från och med då kommer du att kunna logga in på Moodle direkt.';
$string['ucp_o365accountconnected'] = 'Detta Microsoft 365-konto är redan anslutet till ett annat Moodle-konto.';
$string['ucp_status_disabled'] = 'Inaktiverad';
$string['ucp_status_enabled'] = 'Aktiverad';
$string['ucp_title'] = '{$a}-hantering';
$string['unmatched'] = 'Omatchat';
$string['update_oncreate_and_onlogin'] = 'Vid skapande och vid varje inloggning';
$string['update_oncreate_and_onlogin_and_usersync'] = 'Vid skapande, vid varje inloggning samt vid varje bakgrundssynkronisering';
$string['update_onlogin_and_usersync'] = 'Vid varje inloggning samt vid varje bakgrundssynkronisering';

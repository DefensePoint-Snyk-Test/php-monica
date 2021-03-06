<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/master/docs/contribute/translate.md for translations.
 */

return [

    //index
    'people_not_found' => 'Kontakten ble ikke funnet',
    'people_list_number_kids' => ':count barn:count barn',
    'people_list_last_updated' => 'Sist konsultert:',
    'people_list_number_reminders' => ':1 påminnelse|:count påminnelser',
    'people_list_blank_title' => 'Du har ikke noen i kontoen din ennå',
    'people_list_blank_cta' => 'Legg til noen',
    'people_list_sort' => 'Sorter',
    'people_list_stats' => ':1 kontakt|:count kontakter',
    'people_list_firstnameAZ' => 'Sorter etter fornavn A → Z',
    'people_list_firstnameZA' => 'Sorter etter fornavn Z → A',
    'people_list_lastnameAZ' => 'Sorter etter etternavn A → Z',
    'people_list_lastnameZA' => 'Sorter etter etternavn Z → A',
    'people_list_lastactivitydateNewtoOld' => 'Sorter etter siste aktivitetsdato nyeste til eldste',
    'people_list_lastactivitydateOldtoNew' => 'Sorter etter siste aktivitetsdato eldste til nyeste',
    'people_list_filter_tag' => 'Viser alle kontakter som er merket med',
    'people_list_clear_filter' => 'Tøm filter',
    'people_list_contacts_per_tags' => ':count måned|:count måneder',
    'people_list_show_dead' => 'Vis døde personer (:count)',
    'people_list_hide_dead' => 'Skjul døde personer (:count)',
    'people_search' => 'Søk i dine kontakter…',
    'people_search_no_results' => 'Ingen resultater funnet',
    'people_search_next' => 'Neste',
    'people_search_prev' => 'Forrige',
    'people_search_rows_per_page' => 'Rader per side',
    'people_search_of' => 'av',
    'people_search_page' => 'Side',
    'people_search_all' => 'Alle',
    'people_add_new' => 'Legg til ny person',
    'people_list_account_usage' => 'Din konto inneholder: :current/:limit kontakter',
    'people_list_account_upgrade_title' => 'Oppgrader din konto for å låse opp begrensninger.',
    'people_list_account_upgrade_cta' => 'Oppgrader nå',
    'people_list_untagged' => 'Vis kontakter uten tags',
    'people_list_filter_untag' => 'Viser alle kontakter uten tags',
    'archived_contact_readonly' => 'Arkivert kontakt kan ikke redigeres, vennligst ta den bort fra arkiv først.',

    // people add
    'people_add_title' => 'Legg til ny kontakt',
    'people_add_missing' => 'Ingen person funnet - legg til ny nå',
    'people_add_firstname' => 'Fornavn',
    'people_add_middlename' => 'Mellomnavn (valgfritt)',
    'people_add_lastname' => 'Etternavn (valgfritt)',
    'people_add_email' => 'E-post (valgfritt)',
    'people_add_nickname' => 'Kallenavn (valgfritt)',
    'people_add_cta' => 'Legg til',
    'people_save_and_add_another_cta' => 'Lagre og legg til ny',
    'people_add_success' => ':name har blitt opprettet',
    'people_add_gender' => 'Kjønn',
    'people_delete_success' => 'Kontakten er blitt slettet',
    'people_delete_message' => 'Slett kontakt',
    'people_delete_confirmation' => 'Er du sikker på at du vil slette :name’s kontakt? Sletting er umiddelbar og permanent.',
    'people_add_birthday_reminder' => 'Gratuler :name med dagen',
    'people_add_birthday_reminder_deceased' => 'På denne datoen vil :name ha feiret sin bursdag',
    'people_add_import' => 'Vil du <a href=":url">importere kontakter</a>?',
    'people_edit_email_error' => 'Det finnes allerede en kontakt med denne e-postadressen. Velg en annen.',
    'people_export' => 'Eksporter som vCard',
    'people_add_reminder_for_birthday' => 'Opprett en årlig påminnelse om fødselsdagen',

    // show
    'section_contact_information' => 'Kontaktinformasjon',
    'section_personal_activities' => 'Aktiviteter',
    'section_personal_reminders' => 'Påminnelser',
    'section_personal_tasks' => 'Oppgaver',
    'section_personal_gifts' => 'Gaver',
    'section_personal_notes' => 'Notater',

    // archived contacts
    'list_link_to_active_contacts' => 'Du ser på arkiverte kontakter. Se <a href=":url">listen over aktive kontakter</a> i stedet.',
    'list_link_to_archived_contacts' => 'Vis arkiverte kontakter',

    // Header
    'me' => 'Dette er deg',
    'edit_contact_information' => 'Rediger kontaktinformasjon',
    'contact_archive' => 'Arkiver kontakt',
    'contact_unarchive' => 'Ta kontakt tilbake fra arkivet',
    'contact_archive_help' => 'Arkiverte kontakter vises ikke på kontaktlisten, men vises fortsatt i søkeresultatene.',
    'call_button' => 'Logg en samtale',
    'set_favorite' => 'Favorittkontakter er plassert på toppen av kontaktlisten',

    // Stay in touch
    'stay_in_touch' => 'Hold kontakten',
    'stay_in_touch_frequency' => 'Hold kontakten hver dag|Hold kontakten hver {count} dag',
    'stay_in_touch_next_date' => 'Neste forfall: {date}',
    'stay_in_touch_invalid' => 'Frekvensen må være et tall som er større enn 0.',
    'stay_in_touch_premium' => 'Du må oppgradere kontoen din for at denne funksjonen skal kunne brukes',
    'stay_in_touch_modal_title' => 'Hold kontakten',
    'stay_in_touch_modal_desc' => 'Vi kan sende en på minnelse til deg på e-post for å holde kontakten med {firstname} med jevne mellomrom.',
    'stay_in_touch_modal_label' => 'Send meg en e-post hver… {count} dag|Send meg en e-post hver… {count} dag',

    // Calls
    'modal_call_title' => 'Logg en samtale',
    'modal_call_comment' => 'Hva snakket du om? (valgfritt)',
    'modal_call_exact_date' => 'Telefonsamtalen skjedde den',
    'modal_call_who_called' => 'Hvem ringte?',
    'modal_call_emotion' => 'Vil du logge hvordan du følte under denne samtalen? (valgfritt)',
    'calls_add_success' => 'Telefonsamtalen har blitt lagret.',
    'call_delete_confirmation' => 'Er du sikker på at du vil slette denne samtalen?',
    'call_delete_success' => 'Samtalen har blitt slettet',
    'call_title' => 'Telefonsamtaler',
    'call_empty_comment' => 'Ingen detaljer',
    'call_blank_title' => 'Hold oversikt over telefonsamtaler du har hatt med {name}',
    'call_blank_desc' => 'Du ringte {name}',
    'call_you_called' => 'Du ringte',
    'call_he_called' => '{name} ringte',
    'call_emotions' => 'Følelser:',

    // Conversation
    'conversation_blank' => 'Ta opp samtaler du har med :name på sosiale medier, SMS…',
    'conversation_delete_link' => 'Slett samtalen',
    'conversation_edit_title' => 'Rediger samtalen',
    'conversation_edit_delete' => 'Er du sikker på at du vil slette denne samtalen? Sletting er permanent.',
    'conversation_add_success' => 'Samtalen har blitt lagt til.',
    'conversation_edit_success' => 'Temaet ble oppdatert.',
    'conversation_delete_success' => 'Samtalen ble slettet.',
    'conversation_add_title' => 'Ta opp en ny samtale',
    'conversation_add_when' => 'Når hadde du denne samtalen?',
    'conversation_add_who_wrote' => 'Hvem har sendt denne meldingen?',
    'conversation_add_how' => 'Hvordan kommuniserer du?',
    'conversation_add_you' => 'Deg',
    'conversation_add_content' => 'Skriv ned hva som ble sagt',
    'conversation_add_what_was_said' => 'Hva sa du?',
    'conversation_add_another' => 'Legg til ny melding',
    'conversation_add_error' => 'Du må legge til minst en melding.',
    'conversation_list_table_messages' => 'Meldinger',
    'conversation_list_table_content' => 'Delvis innhold (siste melding)',
    'conversation_list_title' => 'Samtaler',
    'conversation_list_cta' => 'Logg samtale',

    // age - birthday
    'birthdate_not_set' => 'Fødselsdag er ikke satt',
    'age_approximate_in_years' => 'rundt :age år gammel',
    'age_exact_in_years' => ':age år gammel',
    'age_exact_birthdate' => 'født :date',

    // Last called
    'last_called' => 'Sist ringt: :date',
    'last_talked_to' => 'Sist ringt: {date}',
    'last_called_empty' => 'Sist ringt: ukjent',
    'last_activity_date' => 'Siste aktivitet sammen: :date',
    'last_activity_date_empty' => 'Siste aktivitet sammen: ukjent',

    // additional information
    'information_edit_success' => 'Din profil har blitt oppdatert',
    'information_edit_title' => 'Endre :din personlige informasjon',
    'information_edit_max_size' => 'Maks :størrelse Kb.',
    'information_edit_max_size2' => 'Maks {size} Kb.',
    'information_edit_firstname' => 'Fornavn',
    'information_edit_lastname' => 'Etternavn (valgfritt)',
    'information_edit_description' => 'Beskrivelse (Valgfritt)',
    'information_edit_description_help' => 'Brukes i kontaktlisten for å legge til en kontekst, hvis nødvendig.',
    'information_edit_unknown' => 'Jeg vet ikke denne personens alder',
    'information_edit_probably' => 'Denne personen er sannsynligvis…',
    'information_edit_not_year' => 'Jeg kjenner dagen og måneden med denne personens bursdag, men ikke året…',
    'information_edit_exact' => 'Jeg kjenner denne personens eksakte fødselsdag…',
    'information_edit_birthdate_label' => 'Bursdag',
    'information_no_work_defined' => 'Ingen jobb informasjon er definert',
    'information_work_at' => 'på :arbeidssted',
    'work_add_cta' => 'Oppdater arbeidsinformasjon',
    'work_edit_success' => 'Arbeids informasjon oppdatert',
    'work_edit_title' => 'Oppdater :name sin jobbinformasjon',
    'work_edit_job' => 'Jobbtittel (valgfritt)',
    'work_edit_company' => 'Firmanavn (Valgfritt)',
    'work_information' => 'Informasjon om arbeidet',

    // food preferences
    'food_preferences_add_success' => 'Mat preferanser har blitt lagret',
    'food_preferences_edit_description' => 'Kanskje :firstname eller noen i :familys familie har en allergi. Eller liker ikke en spesifikk flaske med vin. Indikerer dem her, så du vil huske det neste gang du inviterer dem til middag',
    'food_preferences_edit_description_no_last_name' => 'Kanskje :firstname har en allergi. Eller liker ikke en spesifikk flaske med vin. Indikerer dem her, så du vil huske det neste gang du inviterer dem til middag',
    'food_preferences_edit_title' => 'Angi matpreferanser',
    'food_preferences_edit_cta' => 'Lagre mat preferanser',
    'food_preferences_title' => 'Mat preferanser',
    'food_preferences_cta' => 'Legg til matpreferanser',

    // reminders
    'reminders_blank_title' => 'Er det noe du ønsker å bli minnet om :name?',
    'reminders_blank_add_activity' => 'Legg til en påminnelse',
    'reminders_add_title' => 'Hva ønsker du å bli minnet om :name?',
    'reminders_add_description' => 'Påminn meg om…',
    'reminders_add_next_time' => 'Når er neste gang du ønsker å minnes om dette?',
    'reminders_add_once' => 'Påminn meg om dette en gang',
    'reminders_add_recurrent' => 'Påminn meg om dette hver',
    'reminders_add_starting_from' => 'starter fra den angitte datoen ovenfor',
    'reminders_add_cta' => 'Add reminder',
    'reminders_edit_update_cta' => 'Update reminder',
    'reminders_add_error_custom_text' => 'You need to indicate a text for this reminder',
    'reminders_create_success' => 'The reminder has been added successfully',
    'reminders_delete_success' => 'The reminder has been deleted successfully',
    'reminders_update_success' => 'The reminder has been updated successfully',
    'reminders_add_optional_comment' => 'Optional comment',

    'reminder_frequency_day' => 'every day|every :number days',
    'reminder_frequency_week' => 'every week|every :number weeks',
    'reminder_frequency_month' => 'every month|every :number months',
    'reminder_frequency_year' => 'every year|every :number year',
    'reminder_frequency_one_time' => 'on :date',
    'reminders_delete_confirmation' => 'Are you sure you want to delete this reminder?',
    'reminders_delete_cta' => 'Delete',
    'reminders_next_expected_date' => 'on',
    'reminders_cta' => 'Add a reminder',
    'reminders_description' => 'We will send an email for each one of the reminders below. Reminders are sent every morning the day events will happen. Reminders automatically added for birthdays can not be deleted. If you want to change those dates, edit the birthday of the contacts.',
    'reminders_one_time' => 'One time',
    'reminders_type_week' => 'week',
    'reminders_type_month' => 'month',
    'reminders_type_year' => 'year',
    'reminders_birthday' => 'Birthday of :name',
    'reminders_free_plan_warning' => 'You are on the Free plan. No emails are sent on this plan. To receive your reminders by email, upgrade your account.',

    // relationships
    'relationship_form_add' => 'Add a new relationship',
    'relationship_form_edit' => 'Edit an existing relationship',
    'relationship_form_is_with' => 'This person is…',
    'relationship_form_is_with_name' => ':name is…',
    'relationship_form_add_choice' => 'Who is the relationship with?',
    'relationship_form_create_contact' => 'Add a new person',
    'relationship_form_associate_contact' => 'An existing contact',
    'relationship_form_associate_dropdown' => 'Search and select an existing contact from the dropdown below',
    'relationship_form_associate_dropdown_placeholder' => 'Search and select an existing contact',
    'relationship_form_also_create_contact' => 'Create a Contact entry for this person.',
    'relationship_form_add_description' => 'This will let you treat this person like any other contact.',
    'relationship_form_add_no_existing_contact' => 'You don’t have any contacts who can be related to :name at the moment.',
    'relationship_delete_confirmation' => 'Are you sure you want to delete this relationship? Deletion is permanent.',
    'relationship_unlink_confirmation' => 'Are you sure you want to delete this relationship? This person will not be deleted – only the relationship between the two.',
    'relationship_form_add_success' => 'The relationship has been successfully set.',
    'relationship_form_deletion_success' => 'The relationship has been deleted.',

    // tasks
    'tasks_title' => 'Tasks',
    'tasks_blank_title' => 'You don’t have any tasks yet.',
    'tasks_form_title' => 'Tittel',
    'tasks_form_description' => 'Beskrivelse (Valgfritt)',
    'tasks_add_task' => 'Ny oppgave',
    'tasks_delete_success' => 'Oppgaven har blitt slettet',
    'tasks_complete_success' => 'Oppgaven har endret status',

    // activities
    'activity_title' => 'Aktiviteter',
    'activity_type_category_simple_activities' => 'Enkle aktiviteter',
    'activity_type_category_sport' => 'Sport',
    'activity_type_category_food' => 'Mat',
    'activity_type_category_cultural_activities' => 'Kulturelle aktiviteter',
    'activity_type_just_hung_out' => 'bare møttes',
    'activity_type_watched_movie_at_home' => 'har sett en film hjemme',
    'activity_type_talked_at_home' => 'bare snakket hjemme',
    'activity_type_did_sport_activities_together' => 'gjorde idrett sammen',
    'activity_type_ate_at_his_place' => 'spiste på deres sted',
    'activity_type_went_bar' => 'gikk til en bar',
    'activity_type_ate_at_home' => 'spiste hjemme',
    'activity_type_picnicked' => 'var på pikk nikk',
    'activity_type_ate_restaurant' => 'spiste på en restaurant',
    'activity_type_went_theater' => 'gikk på teater',
    'activity_type_went_concert' => 'gikk på en konsert',
    'activity_type_went_play' => 'gikk for å spille',
    'activity_type_went_museum' => 'gikk til et museum',
    'activities_add_activity' => 'Legg til aktivitet',
    'activities_add_more_details' => 'Legg til flere detaljer',
    'activities_add_emotions' => 'Legg til følelser',
    'activities_add_category' => 'Angi en kategori',
    'activities_add_participants_cta' => 'Legg til deltakere',
    'activities_item_information' => ':Activity. Skjedde den :date',
    'activities_add_title' => 'Hva gjorde du med {name}?',
    'activities_summary' => 'Beskriv hva du har gjort',
    'activities_add_pick_activity' => 'Ønsker du å kategorisere denne aktiviteten? Du trenger ikke, men den vil gi deg statistikk senere (valgfritt)',
    'activities_add_date_occured' => 'Aktiviteten skjedde den…',
    'activities_add_participants' => 'Hvem, andre en {name}, deltok på denne aktiviteten? (valgfritt)',
    'activities_add_emotions_title' => 'Vil du logge hvordan du følte under denne aktiviteten? (valgfritt)',
    'activities_blank_title' => 'Hold oversikt over hva du har gjort med {name}, og hva du har snakket om',
    'activities_blank_add_activity' => 'Legg til en aktivitet',
    'activities_add_success' => 'Aktiviteten er lagt til',
    'activities_add_error' => 'Feil ved opprettelse av aktivitet',
    'activities_update_success' => 'Aktiviteten har blitt oppdatert',
    'activities_delete_success' => 'Aktiviteten har blitt slettet',
    'activities_who_was_involved' => 'Hvem var involvert?',
    'activities_activity' => 'Aktivitets kategori',
    'activities_view_activities_report' => 'Se aktivitets rapport',
    'activities_profile_title' => 'Rapport om aktiviteter mellom :name og deg',
    'activities_profile_subtitle' => 'Du har logget :total_activities med :name totalt og :activities_last_twelve_months de siste 12 månedene så langt. Du har logget :total_activities med :name totalt og :activities_last_twelve_months de siste 12 månedene så langt.',
    'activities_profile_year_summary_activity_types' => 'Her er et sammendrag av hva slags aktiviteter du har gjort sammen i :year',
    'activities_profile_year_summary' => 'Her er hva dere to har gjort i år :year',
    'activities_profile_number_occurences' => ':value aktivitet|:value aktiviteter',
    'activities_list_participants' => 'Deltakere ({total}):',
    'activities_list_emotions' => 'Emotions felt:',
    'activities_list_date' => 'Happened on',
    'activities_list_category' => 'Category:',

    // notes
    'notes_create_success' => 'The note has been created successfully',
    'notes_update_success' => 'The note has been saved successfully',
    'notes_delete_success' => 'The note has been deleted successfully',
    'notes_add_cta' => 'Add note',
    'notes_favorite' => 'Add/remove from favorites',
    'notes_delete_title' => 'Delete a note',
    'notes_delete_confirmation' => 'Er du sikker på at du vil slette denne merknaden? Sletting er permanent',

    // gifts
    'gifts_title' => 'Gaver',
    'gifts_add_success' => 'Gaven er lagt til',
    'gifts_delete_success' => 'Gaven er vellykket slettet',
    'gifts_delete_confirmation' => 'Er du sikker på at du vil slette denne gaven?',
    'gifts_add_gift' => 'Legg til en gave',
    'gifts_link' => 'Lenke',
    'gifts_for' => 'For: {name}',
    'gifts_delete_cta' => 'Slett',
    'gifts_add_title' => 'Gavehåndtering for :name',
    'gifts_add_gift_idea' => 'Gave idé',
    'gifts_add_gift_already_offered' => 'Gave gitt',
    'gifts_add_gift_received' => 'Gave mottatt',
    'gifts_add_gift_title' => 'Hva er denne gaven?',
    'gifts_add_gift_name' => 'Gave navn',
    'gifts_add_link' => 'Lenke til nettside (valgfritt)',
    'gifts_add_value' => 'Verdi (valgfritt)',
    'gifts_add_comment' => 'Kommentar (valgfritt)',
    'gifts_add_recipient' => 'Mottaker (valgfritt)',
    'gifts_add_recipient_field' => 'Mottaker',
    'gifts_add_photo' => 'Bilde (valgfritt)',
    'gifts_add_photo_title' => 'Legg til et bilde for denne gaven',
    'gifts_add_someone' => 'Denne gaven er for noen i {name} sin familie',
    'gifts_delete_title' => 'Slett en gave',
    'gifts_ideas' => 'Gave ideer',
    'gifts_offered' => 'Gaver gitt',
    'gifts_offered_as_an_idea' => 'Marker som en idé',
    'gifts_received' => 'Gaver mottatt',
    'gifts_view_comment' => 'Vis kommentar',
    'gifts_mark_offered' => 'Merk som gitt',
    'gifts_update_success' => 'Gaven er oppdatert',
    'gifts_add_date' => 'Dato (valgfritt)',

    // debts
    'debt_delete_confirmation' => 'Er du sikker på at du vil slette denne gjelden?',
    'debt_delete_success' => 'Gjeld er vellykket slettet',
    'debt_add_success' => 'Gjeld er lagt til',
    'debt_title' => 'Gjeld',
    'debt_add_cta' => 'Legg til gjeld',
    'debt_you_owe' => 'Du skylder :amount',
    'debt_they_owe' => ':name skylder deg :amount',
    'debt_add_title' => 'Styring av gjeld',
    'debt_add_you_owe' => 'Du skylder :name',
    'debt_add_they_owe' => ':name skylder deg',
    'debt_add_amount' => 'på en sum av',
    'debt_add_reason' => 'av følgende årsak (valgfritt)',
    'debt_add_add_cta' => 'Legg til gjeld',
    'debt_edit_update_cta' => 'Oppdater gjeld',
    'debt_edit_success' => 'Gjeld er oppdatert',
    'debts_blank_title' => 'Administrere gjeld du skylder til :name eller :name skylder deg',

    // tags
    'tag_edit' => 'Redigere Etiketter',
    'tag_add' => 'Legg til tagger',
    'tag_add_search' => 'Legg til eller søk tag',
    'tag_no_tags' => 'Ingen tagger enda',

    // Introductions
    'introductions_sidebar_title' => 'Slik møtte dere',
    'introductions_blank_cta' => 'Angi hvordan du møtte :name',
    'introductions_title_edit' => 'Hvordan møtte du :name?',
    'introductions_additional_info' => 'Forklar hvordan og hvor du møtte',
    'introductions_edit_met_through' => 'Har noen introduserte deg for denne personen?',
    'introductions_no_met_through' => 'Ingen',
    'introductions_first_met_date' => 'Dato dere møttes',
    'introductions_no_first_met_date' => 'Jeg vet ikke hvilken dato vi møttes',
    'introductions_first_met_date_known' => 'Dette er den datoen vi møttes',
    'introductions_add_reminder' => 'Legg til en påminnelse om å feire dette møtet på jubileumsarrangementet',
    'introductions_update_success' => 'Du har vellykket oppdatert informasjon om hvordan du møtte denne personen',
    'introductions_met_through' => 'Møttes igjennom <a href=":url">:name</a>',
    'introductions_met_date' => 'Møttes den :date',
    'introductions_reminder_title' => 'Jubileum for dagen du først møtte',

    // Deceased
    'deceased_reminder_title' => 'Jubileum for døden til :name',
    'deceased_mark_person_deceased' => 'Marker denne som utgått',
    'deceased_know_date' => 'Jeg vet at denne personen døde',
    'deceased_add_reminder' => 'Legg til en påminnelse for denne datoen',
    'deceased_label' => 'Avdød',
    'deceased_date_label' => 'Døds dato',
    'deceased_label_with_date' => 'Døde på :date',
    'deceased_age' => 'Alder ved død',

    // Contact information
    'contact_info_title' => 'Kontaktinformasjon',
    'contact_info_form_content' => 'Innhold',
    'contact_info_form_contact_type' => 'Kontakttype',
    'contact_info_form_personalize' => 'Personaliser',
    'contact_info_address' => 'Bor ved',

    // Addresses
    'contact_address_title' => 'Adresser',
    'contact_address_form_name' => 'Etikett (valgfritt)',
    'contact_address_form_street' => 'Gate (valgfritt)',
    'contact_address_form_city' => 'By (valgfritt)',
    'contact_address_form_province' => 'Provins (valgfritt)',
    'contact_address_form_postal_code' => 'Postkode (valgfritt)',
    'contact_address_form_country' => 'Land (valgfritt)',
    'contact_address_form_latitude' => 'Breddegrad (kun tall) (valgfritt)',
    'contact_address_form_longitude' => 'Lengdegrad (kun tall) (valgfritt)',

    // Pets
    'pets_kind' => 'Type kjæledyr',
    'pets_name' => 'Navn (valgfritt)',
    'pets_create_success' => 'Kjæledyret har blitt lagt til',
    'pets_update_success' => 'Kjæledyret er oppdatert',
    'pets_delete_success' => 'Kjæledyret er slettet',
    'pets_title' => 'Kjæledyr',
    'pets_reptile' => 'Reptil',
    'pets_bird' => 'Fugl',
    'pets_cat' => 'Katt',
    'pets_dog' => 'Hund',
    'pets_fish' => 'Fisk',
    'pets_hamster' => 'Hamster',
    'pets_horse' => 'Horse',
    'pets_rabbit' => 'Rabbit',
    'pets_rat' => 'Rat',
    'pets_small_animal' => 'Small animal',
    'pets_other' => 'Other',

    // life events
    'life_event_list_tab_life_events' => 'Life events',
    'life_event_list_tab_other' => 'Notes, reminders, …',
    'life_event_list_title' => 'Life events',
    'life_event_blank' => 'Log what happens to the life of {name} for your future reference.',
    'life_event_list_cta' => 'Add life event',
    'life_event_create_category' => 'All categories',
    'life_event_create_life_event' => 'Add life event',
    'life_event_create_default_title' => 'Title (optional)',
    'life_event_create_default_story' => 'Story (optional)',
    'life_event_create_date' => 'You do not need to indicate a month or a day – only the year is mandatory.',
    'life_event_create_default_description' => 'Add information about what you know',
    'life_event_create_add_yearly_reminder' => 'Add a yearly reminder for this event',
    'life_event_create_success' => 'The life event has been added',
    'life_event_delete_title' => 'Delete a life event',
    'life_event_delete_description' => 'Are you sure you want to delete this life event? Deletion is permanent.',
    'life_event_delete_success' => 'The life event has been deleted',
    'life_event_date_it_happened' => 'Date it happened',
    'life_event_category_work_education' => 'Work & education',
    'life_event_category_family_relationships' => 'Family & relationships',
    'life_event_category_home_living' => 'Home & living',
    'life_event_category_health_wellness' => 'Health & wellness',
    'life_event_category_travel_experiences' => 'Travel & experiences',
    'life_event_sentence_new_job' => 'Started a new job',
    'life_event_sentence_retirement' => 'Retired',
    'life_event_sentence_new_school' => 'Started school',
    'life_event_sentence_study_abroad' => 'Studied abroad',
    'life_event_sentence_volunteer_work' => 'Started volunteering',
    'life_event_sentence_published_book_or_paper' => 'Published a paper',
    'life_event_sentence_military_service' => 'Started military service',
    'life_event_sentence_new_relationship' => 'Started a relationship',
    'life_event_sentence_engagement' => 'Got engaged',
    'life_event_sentence_marriage' => 'Got married',
    'life_event_sentence_anniversary' => 'Anniversary',
    'life_event_sentence_expecting_a_baby' => 'Expects a baby',
    'life_event_sentence_new_child' => 'Had a child',
    'life_event_sentence_new_family_member' => 'Added a family member',
    'life_event_sentence_new_pet' => 'Har fått et kjæledyr',
    'life_event_sentence_end_of_relationship' => 'Endte et forhold',
    'life_event_sentence_loss_of_a_loved_one' => 'Mistet en kjær',
    'life_event_sentence_moved' => 'Flyttet',
    'life_event_sentence_bought_a_home' => 'Kjøpt et hjem',
    'life_event_sentence_home_improvement' => 'Gjort en forbedring i hjemmet',
    'life_event_sentence_holidays' => 'Var på ferie',
    'life_event_sentence_new_vehicle' => 'Fikk et nytt kjøretøy',
    'life_event_sentence_new_roommate' => 'Fikk en samboer',
    'life_event_sentence_overcame_an_illness' => 'Ble frisk fra en sykdom',
    'life_event_sentence_quit_a_habit' => 'Avslutt en vane',
    'life_event_sentence_new_eating_habits' => 'Startet nye spisevaner',
    'life_event_sentence_weight_loss' => 'Mistet vekt',
    'life_event_sentence_wear_glass_or_contact' => 'Begynte å bruke briller eller kontaktlinser',
    'life_event_sentence_broken_bone' => 'Knakk et bein',
    'life_event_sentence_removed_braces' => 'Fjernet tannregulering',
    'life_event_sentence_surgery' => 'Fikk kirurgi',
    'life_event_sentence_dentist' => 'Var til tannlegen',
    'life_event_sentence_new_sport' => 'Startet med en idrett',
    'life_event_sentence_new_hobby' => 'Begynte med en hobby',
    'life_event_sentence_new_instrument' => 'Lærte et nytt instrument',
    'life_event_sentence_new_language' => 'Lærte et nytt språk',
    'life_event_sentence_tattoo_or_piercing' => 'Fikk en tatovering eller piercing',
    'life_event_sentence_new_license' => 'Fikk et sertifikat',
    'life_event_sentence_travel' => 'Reiste',
    'life_event_sentence_achievement_or_award' => 'Fikk en pris',
    'life_event_sentence_changed_beliefs' => 'Endret tro',
    'life_event_sentence_first_word' => 'Snakket for første gang',
    'life_event_sentence_first_kiss' => 'Kysset for før første gang',

    // documents
    'document_list_title' => 'Dokumenter',
    'document_list_cta' => 'Last opp dokument',
    'document_list_blank_desc' => 'Her kan du lagre dokumenter som er relatert til denne personen.',
    'document_upload_zone_cta' => 'Laste opp en fil',
    'document_upload_zone_progress' => 'Laster opp dokumentet…',
    'document_upload_zone_error' => 'Det oppsto en feil ved opplasting av dokumentet. Vennligst prøv igjen nedenfor.',

    // Photos
    'photo_title' => 'Bilder',
    'photo_list_title' => 'Relaterte bilder',
    'photo_list_cta' => 'Last opp bilde',
    'photo_list_blank_desc' => 'Du kan lagre bilder om denne kontakten. Last opp en nå!',
    'photo_upload_zone_cta' => 'Last opp et bilde',
    'photo_current_profile_pic' => 'Nåværende profilbilde',
    'photo_make_profile_pic' => 'Lag profilbilde',
    'photo_delete' => 'Slett bilde',
    'photo_next' => 'Neste bilde ❯',
    'photo_previous' => '❮ Forge bilde',

    // Avatars
    'avatar_change_title' => 'Endre din avatar',
    'avatar_question' => 'Hvilken avatar vil du bruke?',
    'avatar_default_avatar' => 'Standard avatar',
    'avatar_adorable_avatar' => 'Den fantastiske avatar',
    'avatar_gravatar' => 'Gravatar tilknyttet e-postadressen til denne personen. <a href="https://gravatar.com/">Gravatar</a> er et globalt system som lar brukere knytte e-postadresser til bilder.',
    'avatar_current' => 'Keep the current avatar',
    'avatar_photo' => 'From a photo that you upload',
    'avatar_crop_new_avatar_photo' => 'Crop new avatar photo',

    // emotions
    'emotion_this_made_me_feel' => 'This made you feel…',

    // logs
    'auditlogs_link' => 'History',
    'auditlogs_title' => 'Everything that happened to :name',
    'auditlogs_breadcrumb' => 'History',
    'auditlogs_author' => 'By :name on :date',

    // contact field label
    'contact_field_label_home' => 'Home',
    'contact_field_label_work' => 'Arbeid',
    'contact_field_label_cell' => 'Mobil',
    'contact_field_label_fax' => 'Faks',
    'contact_field_label_pager' => 'Personsøker',
    'contact_field_label_main' => 'Hoved',
    'contact_field_label_other' => 'Annet',
    'contact_field_label_personal' => 'Personlig',
];

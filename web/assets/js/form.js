

$('#form_android').change(function(){
    if($(this).prop("checked")) {
        $('.fileUploadsAT, .descShort, .form_tablette, .fileUploadsAndroid, .spanA').removeClass('hidden');


        $('').removeClass('hidden');
    } else {
        // $('#hideDiv').hide();
        $('.fileUploadsAT, .descShort, .form_tablette, .fileUploadsAndroid, .spanA').addClass('hidden');
    }

});
$('#form_ios').change(function(){
    if($(this).prop("checked")) {
        $('.spanI, .fileUploadsIos, .fileUploadsAI').removeClass('hidden');
    } else {
        $('.spanI, .fileUploadsAI, .fileUploadsIos').addClass('hidden');
    }
});

$('#form_ipad').change(function(){
    if($(this).prop("checked")) {


        // $('#fileUploadsAndroid').show();
    } else {
        // $('#hideDiv').hide();

    }
});
$('#form_tablette').change(function(){
    if($(this).prop("checked")) {
        $('.fileUploadsAT').removeClass('hidden');
        // $('#fileUploadsAndroid').show();
    } else {
        // $('#hideDiv').hide();
        $('.fileUploadsAT').addClass('hidden');
    }
});















//
// $('#form_tablette').on('click', function() {
//     $('.fileUploadsAT').toggleClass('hidden');
// });
// .fileUploadsIos, .fileUploadsAndroid, .fileUploadsAT, .fileUploadsAI{

// unchecked: true
// nouveautes:
//     '#type': textarea
// '#title': 'Nouveautés de cette version'
// '#states':
// visible:
//     ':input[name="maj"]':
// checked: true
// invisible:
//     ':input[name="maj"]':
// unchecked: true
// mots_cles:
//     '#type': textarea
// '#title': Mots-Clés
// '#placeholder': 'limité à 100 caratères, séparés par des virgules.'
// '#counter_type': character
// '#counter_maximum': '100'
// '#counter_message': 'caractères restants'
// '#states':
// visible:
//     ':input[name="ios"]':
// checked: true
// invisible:
//     ':input[name="ios"]':
// unchecked: true
// firstcontainer:
//     '#type': layout_container
// '#states':
// visible:
//     ':input[name="androïd"]':
// checked: true
// ':input[name="ios"]':
// checked: true
// invisible:
//     ':input[name="androïd"]':
// unchecked: true
// ':input[name="ios"]':
// unchecked: true
// image_full:
//     '#type': layout_container
// '#states':
// visible:
//     ':input[name="androïd"]':
// checked: true
// invisible:
//     ':input[name="androïd"]':
// unchecked: true
// '#align': vert
// file_upload_android_1:
//     '#type': image_file
// '#title': 'Image Android n°1'
// file_upload_android_2:
//     '#type': image_file
// '#title': 'Image Android n°2'
// file_upload_android_3:
//     '#type': image_file
// '#title': 'Image Android n°3'
// iamge_ios:
//     '#type': layout_container
// '#states':
// visible:
//     ':input[name="ios"]':
// checked: true
// invisible:
//     ':input[name="ios"]':
// unchecked: true
// '#align': vert
// file_upload_ios_1:
//     '#type': image_file
// '#title': 'Image ios n°1'
// file_upload_ios_2:
//     '#type': image_file
// '#title': 'Image ios n°2'
// file_upload_ios_3:
//     '#type': image_file
// '#title': 'Image ios n°3'
// img_tab_ipad:
//     '#type': layout_container
// '#attributes':
// style: 'margin-top:40px;'
// tablette:
//     '#type': checkbox
// '#title': Images-tablette
// '#states':
// visible:
//     ':input[name="androïd"]':
// checked: true
// invisible:
//     ':input[name="androïd"]':
// unchecked: true
// iPad:
//     '#type': checkbox
// '#title': Images-iPad
// '#states':
// visible:
//     ':input[name="ios"]':
// checked: true
// invisible:
//     ':input[name="ios"]':
// unchecked: true
// images_tab:
//     '#type': layout_container
// images_tablette:
//     '#type': layout_container
// '#align': vert
// '#states':
// visible:
//     ':input[name="tablette"]':
// checked: true
// invisible:
//     ':input[name="tablette"]':
// unchecked: true
// file_upload_android_tablette_1:
//     '#type': image_file
// '#title': 'Image Android Tablette n°1'
// file_upload_android_tablette_2:
//     '#type': image_file
// '#title': 'Image Android Tablette n°2'
// file_upload_android_tablette_3:
//     '#type': image_file
// '#title': 'Image Android Tablette n°3'
// images_ipad:
//     '#type': layout_container
// '#align': vert
// '#states':
// visible:
//     ':input[name="iPad"]':
// checked: true
// invisible:
//     ':input[name="iPad"]':
// unchecked: true
// file_upload_ipad_1:
//     '#type': image_file
// '#title': 'Image iPad n°1'
// file_upload_ipad_2:
//     '#type': image_file
// '#title': 'Image iPad n°2'
// file_upload_ipad_3:
//     '#type': image_file
// '#title': 'Image iPad n°3'
// 'Site Web':
// '#type': textfield
// '#title': 'Site Web'
// url_assistance:
//     '#type': textfield
// '#title': 'Url de l''Assitance'
// adresse_mail:
//     '#type': textfield
// '#title': 'Adresse e-mail'
// regles_de_confidentialité:
//     '#type': textfield
// '#title': 'Règles de Confidentialité'
// url_marketing:
//     '#type': textfield
// '#title': 'Url de Marketing'
// '#placeholder': facultatif
// copyright:
//     '#type': textfield
// '#title': Copyright
// android_categories:
//     '#type': layout_container
// '#states':
// visible:
//     ':input[name="androïd"]':
// checked: true
// invisible:
//     ':input[name="androïd"]':
// unchecked: true
// categorie_android:
//     '#type': select
// '#title': 'Categorie Android'
// '#options':
// 'Actualités et magazines': 'Actualités et magazines'
// 'Art et design': 'Art et design'
// 'Auto et véhicules': 'Auto et véhicules'
// 'Bandes dessinées': 'Bandes dessinées'
// Beauté: Beauté
// Communication: Communication
// 'Cuisine et boissons': 'Cuisine et boissons'
// Divers: Divers
// Divertissement: Divertissement
// Enseignement: Enseignement
// Finance: Finance
// 'Habitat et décoration': 'Habitat et décoration'
// 'Lecteurs et éditeurs vidéo': 'Lecteurs et éditeurs vidéo'
// 'Livres et références': 'Livres et références'
// Médecine: Médecine
// Météo: Météo
// 'Musique et audio': 'Musique et audio'
// Outils: Outils
// Parents: Parents
// Personnalisation: Personnalisation
// Photographie: Photographie
// 'Plans et navigation': 'Plans et navigation'
// Productivité: Productivité
// Professionnel: Professionnel
// Rencontres: Rencontres
// 'Réseaux sociaux': 'Réseaux sociaux'
// 'Santé et remise en forme': 'Santé et remise en forme'
// Shopping: Shopping
// 'Spectacles et billets': 'Spectacles et billets'
// Sports: Sports
// 'Style de vie': 'Style de vie'
// 'Voyages et infos locales': 'Voyages et infos locales'
// 'categorie Android Secondaire':
// '#type': select
// '#title': 'Categorie Android Secondaire (facultative)'
// '#options':
// 'Actualités et magazines': 'Actualités et magazines'
// 'Art et design': 'Art et design'
// 'Auto et véhicules': 'Auto et véhicules'
// 'Bandes dessinées': 'Bandes dessinées'
// Beauté: Beauté
// Communication: Communication
// 'Cuisine et boissons': 'Cuisine et boissons'
// Divers: Divers
// Divertissement: Divertissement
// Enseignement: Enseignement
// Finance: Finance
// 'Habitat et décoration': 'Habitat et décoration'
// 'Lecteurs et éditeurs vidéo': 'Lecteurs et éditeurs vidéo'
// 'Livres et références': 'Livres et références'
// Médecine: Médecine
// Météo: Météo
// 'Musique et audio': 'Musique et audio'
// Outils: Outils
// Parents: Parents
// Personnalisation: Personnalisation
// Photographie: Photographie
// 'Plans et navigation': 'Plans et navigation'
// Productivité: Productivité
// Professionnel: Professionnel
// Rencontres: Rencontres
// 'Réseaux sociaux': 'Réseaux sociaux'
// 'Santé et remise en forme': 'Santé et remise en forme'
// Shopping: Shopping
// 'Spectacles et billets': 'Spectacles et billets'
// Sports: Sports
// 'Style de vie': 'Style de vie'
// 'Voyages et infos locales': 'Voyages et infos locales'
// ios_categories:
//     '#type': layout_container
// '#states':
// visible:
//     ':input[name="ios"]':
// checked: true
// invisible:
//     ':input[name="ios"]':
// unchecked: true

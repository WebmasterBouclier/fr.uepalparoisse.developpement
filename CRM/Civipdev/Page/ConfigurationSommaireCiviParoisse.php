<?php
use CRM_Civipdev_ExtensionUtil as E;

class CRM_Civipdev_Page_ConfigurationSommaireCiviParoisse extends CRM_Core_Page {

  function buildMenuCiviParoisse (&$menu) {
    $maxKey = ( max( array_keys($menu) ) );

    $dataMenuPrincipalParoisse = array(
      'label' => E::ts('Paroisse'),
      'name' => 'menu-civiparoisse',
      'navID' => $maxKey+1,
      'url' => 'civicrm/sommaire-civiparoisse',
      'separator' => null,
      'active' => 1,
      'icon' => 'crm-i fa-handshake-o',
      'permission' => null,
    );

    $dataSubMenuParoisse = array(
      '1' => array(
        'label' => E::ts('Nouveau Foyer'),
        'name' => 'menu-formulaire-foyer',
        'url' => 'civicrm/formulaire-foyer',
        'navID' => 1,
        'active' => 1,
        'separator' => null,
        'icon' => 'crm-i fa-address-card',
        'permission' => null,
        'image' => 'images/form_particulier.png',
      ),
      '2' => array(
        'label' => E::ts('Nouvel Individu'),
        'name' => 'menu-formulaire-individu',
        'url' => 'civicrm/controle-individu',
        'navID' => 2,
        'active' => 1,
        'separator' => null,
        'icon' => 'crm-i fa-user-plus',
        'permission' => null,
      ),
      '3' => array(
        'label' => E::ts('Nouvelle organisation'),
        'name' => 'menu-formulaire-organisation',
        'url' => null,
        'navID' => 3,
        'active' => 1,
        'separator' => 1,
        'icon' => 'crm-i fa-building-o',
        'permission' => null,
      ),
      '4' => array(
        'label' => E::ts('Anniversaires'),
        'name' => 'menu-anniversaires',
        'url' => '',
        'navID' => 4,
        'active' => 1,
        'separator' => 1,
        'icon' => 'crm-i fa-birthday-cake',
        'permission' => null,
      ),
      '5' => array(
        'label' => E::ts('Listes'),
        'name' => 'menu-listes',
        'url' => 'civicrm/sommaire-listes',
        'navID' => 5,
        'active' => 1,
        'separator' => null,
        'icon' => 'crm-i fa-list-alt',
        'permission' => null,
      ),
      '6' => array(
        'label' => E::ts('Contrôles'),
        'name' => 'menu-controles',
        'url' => 'civicrm/controle-qualite',
        'navID' => 6,
        'active' => 1,
        'separator' => 1,
        'icon' => 'crm-i fa-check-square',
        'permission' => null,
      ),
      '7' => array(
        'label' => E::ts('Aide en ligne'),
        'name' => 'menu-aide',
        'url' => 'civicrm/files/Mode_Emploi_Base_De_Données_Paroissiale_CiviCRM.pdf',
        'navID' => 6,
        'active' => 1,
        'separator' => 1,
        'icon' => 'crm-i fa-question-circle-o',
        'permission' => null,
      ),
      '8' => array(
        'label' => E::ts('Paramètres'),
        'name' => 'menu-parametres',
        'url' => '',
        'navID' => 8,
        'active' => 1,
        'separator' => 1,
        'icon' => 'crm-i fa-cog',
        'permission' => null,
      ),
    );

    _Civipdev_civix_insert_navigation_menu($menu, NULL, $dataMenuPrincipalParoisse);
    
    foreach ($dataSubMenuParoisse as $key => $value) {
      _Civipdev_civix_insert_navigation_menu($menu, 'menu-civiparoisse', $value);
    }

  }

}

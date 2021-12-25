<?php
use CRM_Civipdev_ExtensionUtil as E;

class CRM_Civipdev_Page_ConfigurationSommaireCiviParoisse  {


/**
 * Construction du menu Paroisse
 * 
 * @param int     $maxKey                     Rang du menu Paroisse dans les entrées du menu
 * @param array   $dataMenuPrincipalParoisse  Construction de l'entrée de menu Paroisse
 * @param string  $dataSubMenuParoisse        Construction du détail du menu, par appel à la fonction 
 *                                            SubMenuParoisse
 *
 */ 
  static function buildMenuCiviParoisse (&$menu) {
    $maxKey = ( max( array_keys($menu) ) );

    $dataMenuPrincipalParoisse = array(
      'label' => E::ts('Paroisse'),
      'name' => 'menu-civiparoisse',
      'navID' => $maxKey+1,
      'url' => 'civicrm/sommaire-civiparoisse',
      'separator' => null,
      'active' => 1,
      'icon' => 'crm-i fa-handshake-o',
      'permission' => 'access CiviCRM',
    );

    $dataSubMenuParoisse = self::SubMenuParoisse();
    
    _Civipdev_civix_insert_navigation_menu($menu, NULL, $dataMenuPrincipalParoisse);
    
    foreach ($dataSubMenuParoisse as $key => $value) {
      _Civipdev_civix_insert_navigation_menu($menu, 'menu-civiparoisse', $value);
    }

  }

/**
 * Fonction qui crée chaque ligne du menu Paroisse
 * 
 * @param int     $indexMenu  Variable de rang de chaque ligne du menu Paroisse
 * @param string  $data       Détail de chaque ligne du menu Paroisse
 * 
 * @return string             Ensemble des détails (par ligne) du menu Paroisse
 *  
 */
  static function SubMenuParoisse(){
    $indexMenu = 1;

    $data = [
        [
          'label' => E::ts('Nouveau Foyer'),
          'name' => 'menu-formulaire-foyer',
          'url' => 'civicrm/formulaire-foyer',
          'navID' => $indexMenu++,
          'active' => 1,
          'separator' => null,
          'icon' => 'crm-i fa-address-card',
          'permission' => 'access CiviCRM',
          'image' => null,
        ],
        [
          'label' => E::ts('Nouvel Individu'),
          'name' => 'menu-formulaire-individu',
          'url' => 'civicrm/formulaire-individu',
          'navID' => $indexMenu++,
          'active' => 1,
          'separator' => null,
          'icon' => 'crm-i fa-user-plus',
          'permission' => 'access CiviCRM',
          'image' => 'images/form_particulier.png',
        ],
        [
          'label' => E::ts('Nouvelle organisation'),
          'name' => 'menu-formulaire-organisation',
          'url' => null,
          'navID' => $indexMenu++,
          'active' => 1,
          'separator' => 1,
          'icon' => 'crm-i fa-building-o',
          'permission' => 'access CiviCRM',
          'image' => 'images/form_entreprise.png',
        ],
        [
          'label' => E::ts('Anniversaires'),
          'name' => 'menu-anniversaires',
          'url' => '',
          'navID' => $indexMenu++,
          'active' => 1,
          'separator' => 1,
          'icon' => 'crm-i fa-birthday-cake',
          'permission' => 'access CiviCRM',
          'image' => 'images/anniversaires.png',
        ],
        [
          'label' => E::ts('Listes'),
          'name' => 'menu-listes',
          'url' => 'civicrm/sommaire-listes',
          'navID' => $indexMenu++,
          'active' => 1,
          'separator' => null,
          'icon' => 'crm-i fa-list-alt',
          'permission' => 'access CiviCRM',
          'image' => 'images/listes.png',
        ],
        [
          'label' => E::ts('Contrôles'),
          'name' => 'menu-controles',
          'url' => 'civicrm/controle-qualite',
          'navID' => $indexMenu++,
          'active' => 1,
          'separator' => 1,
          'icon' => 'crm-i fa-check-square',
          'permission' => 'access CiviCRM',
          'image' => 'images/controles.png',
        ],
        [
          'label' => E::ts('Aide en ligne'),
          'name' => 'menu-aide',
          'url' => 'civicrm/files/Mode_Emploi_Base_De_Données_Paroissiale_CiviCRM.pdf',
          'navID' => $indexMenu++,
          'active' => 1,
          'separator' => 1,
          'icon' => 'crm-i fa-question-circle-o',
          'permission' => 'access CiviCRM',
          'image' => 'images/aide.png',
        ],
        [
          'label' => E::ts('Paramètres'),
          'name' => 'menu-parametres',
          'url' => '',
          'navID' => $indexMenu++,
          'active' => 1,
          'separator' => 1,
          'icon' => 'crm-i fa-cog',
          'permission' => 'access CiviCRM',
          'image' => null,
        ],
      ];
      return $data;
  }


}
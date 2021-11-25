<?php
use CRM_Civipdev_ExtensionUtil as E;

class CRM_Civipdev_Page_ConfigurationSommaireCiviParoisse extends CRM_Core_Page {

// Définition des menus
/*  function setMenuCiviParoisse($idKey) {
  $data = array(
      'label' => E::ts('Paroisse'),
      'name' => 'menu-civiparoisse',
      'navID' => $idKey+1,
      'url' => 'civicrm/sommaire-civiparoisse',
      'icon' => 'fa fa-clock-o',

    );
  return $data;
  }
*/





 function buildMenuCiviParoisse (&$menu) {
  $maxKey = ( max( array_keys($menu) ) );

  $dataMenuPrincipal = array(
      'label' => E::ts('Paroisse'),
      'name' => 'menu-civiparoisse',
      'navID' => $maxKey+1,
      'url' => 'civicrm/sommaire-civiparoisse',
      'separator' => null,
      'active' => 1,
      'icon' => 'crm-i fa-handshake-o', //fa-clock-o
      'permission' => null,
    );


  $dataMenuContenu1 = array(
    'label' => E::ts('Nouveau Foyer'),
    'name' => 'menu-formulaire-foyer',
    'url' => 'civicrm/formulaire-foyer',
    'navID' => 1,
    'active' => 1,
    'separator' => null,
    'icon' => 'crm-i fa-address-card',
    'permission' => null,
  );

  $dataMenuContenu2 = array(
    'label' => E::ts('Nouvel Individu'),
    'name' => 'menu-formulaire-individu',
    'url' => 'civicrm/controle-individu',
    'navID' => 2,
    'active' => 1,
    'separator' => null,
    'icon' => 'crm-i fa-user-plus',
    'permission' => null,
  );

  $dataMenuContenu3 = array(
    'label' => E::ts('Nouvelle entreprise'),
    'name' => 'menu-formulaire-entreprise',
    'url' => null,
    'navID' => 3,
    'active' => 1,
    'separator' => 1,
    'icon' => 'crm-i fa-university',
    'permission' => null,
  );

  $dataMenuContenu4 = array(
    'label' => E::ts('Anniversaires'),
    'name' => 'menu-anniversaires',
    'url' => '',
    'navID' => 4,
    'active' => 1,
    'separator' => 1,
    'icon' => 'crm-i fa-birthday-cake',
    'permission' => null,
  );

  $dataMenuContenu5 = array(
    'label' => E::ts('Listes'),
    'name' => 'menu-listes',
    'url' => 'civicrm/sommaire-listes',
    'navID' => 5,
    'active' => 1,
    'separator' => null,
    'icon' => 'crm-i fa-list-alt',
    'permission' => null,
  );

  $dataMenuContenu6 = array(
    'label' => E::ts('Contrôles'),
    'name' => 'menu-controles',
    'url' => 'civicrm/controle-qualite',
    'navID' => 6,
    'active' => 1,
    'separator' => 1,
    'icon' => 'crm-i fa-check-square',
    'permission' => null,
  );

  $dataMenuContenu7 = array(
    'label' => E::ts('Aide en ligne'),
    'name' => 'menu-aide',
    'url' => 'civicrm/files/Mode_Emploi_Base_De_Données_Paroissiale_CiviCRM.pdf',
    'navID' => 6,
    'active' => 1,
    'separator' => 1,
    'icon' => 'crm-i fa-question-circle-o',
    'permission' => null,
  );


 // $MenuCiviParoisse = $this->setMenuCiviParoisse($maxKey);

_Civipdev_civix_insert_navigation_menu($menu, NULL, $dataMenuPrincipal);
_Civipdev_civix_insert_navigation_menu($menu, 'menu-civiparoisse', $dataMenuContenu1); 
_Civipdev_civix_insert_navigation_menu($menu, 'menu-civiparoisse', $dataMenuContenu2); 
_Civipdev_civix_insert_navigation_menu($menu, 'menu-civiparoisse', $dataMenuContenu3); 
_Civipdev_civix_insert_navigation_menu($menu, 'menu-civiparoisse', $dataMenuContenu4); 
_Civipdev_civix_insert_navigation_menu($menu, 'menu-civiparoisse', $dataMenuContenu5); 
_Civipdev_civix_insert_navigation_menu($menu, 'menu-civiparoisse', $dataMenuContenu6); 
_Civipdev_civix_insert_navigation_menu($menu, 'menu-civiparoisse', $dataMenuContenu7); 

/*
 _Civipdev_civix_insert_navigation_menu($menu, NULL, array(
      'label' => E::ts('Paroisse'),
      'name' => 'menu-civiparoisse',
      'navID' => $maxKey+1,
      'url'        => 'civicrm/sommaire-civiparoisse',
      'icon' => 'fa fa-clock-o',
    ));
*/
/*  $menu[$maxKey+1] = array (
        'attributes' => array (
            'label'      => E::ts('Paroisse'),
            'name'       => 'menu-civiparoisse',
            'url'        => 'civicrm/sommaire-civiparoisse',
            'permission' => null,
            'operator'   => null,
            'separator'  => null,
            'parentID'   => null,
            'navID'      => $maxKey+1,
            'active'     => 1
    ),
        'child' =>  array (
            '1' => array (
                'attributes' => array (
                    'label'      => E::ts('Formulaire de création Individu'),
                    'name'       => 'menu-formulaire-individu',
                    'url'        => 'civicrm/formulaire-foyer',
                    'operator'   => null,
                    'separator'  => 1,
                    'parentID'   => $maxKey+1,
                    'navID'      => 1,
                    'active'     => 1,
                    'icon'     => 'crm-i fa-address-card'
                ),
                'child' => null
            ) 
        ) 
    );
*/
  }









/*
  public function run() {
    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(E::ts('ConfigurationSommaireCiviParoisse'));

//    $this->civipdev_civicrm_navigationMenu();





    parent::run();
  }


public static function buildMenuItem(&$menu) {
    // Find the "Home" menu item for retrieving its weight.
    $menu_item_search = array(
      'name' => 'Home',
    );
    $menu_items = array();
    CRM_Core_BAO_Navigation::retrieve($menu_item_search, $menu_items);

    _recentitems_civix_insert_navigation_menu($menu, NULL, array(
      'label' => E::ts('Recent'),
      'name' => 'recently_viewed',
      'navID' => _recentitems_navhelper_create_unique_nav_id($menu),
      // Place directly after the "Home" item, using its weight.
      // See https://github.com/civicrm/civicrm-core/pull/11772 for weight.
      'weight' => (isset($menu_items['weight']) ? $menu_items['weight'] : 0),
      'icon' => 'fa fa-clock-o',
    ));
  }
public static function buildMenuItem(&$menu) {
    // Find the "Home" menu item for retrieving its weight.
    $menu_item_search = array(
      'name' => 'Home',
    );
    $menu_items = array();
    CRM_Core_BAO_Navigation::retrieve($menu_item_search, $menu_items);

    _recentitems_civix_insert_navigation_menu($menu, NULL, array(
      'label' => E::ts('Recent'),
      'name' => 'recently_viewed',
      'navID' => _recentitems_navhelper_create_unique_nav_id($menu),
      // Place directly after the "Home" item, using its weight.
      // See https://github.com/civicrm/civicrm-core/pull/11772 for weight.
      'weight' => (isset($menu_items['weight']) ? $menu_items['weight'] : 0),
      'icon' => 'fa fa-clock-o',
    ));
  }

  function civipdev_civicrm_navigationMenu(&$menu) {
    _civipdev_civix_insert_navigation_menu($menu, 'CiviParoisse', [
      'label' => E::ts('Paroisse'),
      'name' => 'menu-civiparoisse',
      'url' => 'civicrm/sommaire-civiparoisse',
      'active' => 1,
    ]);
  }




*/
}

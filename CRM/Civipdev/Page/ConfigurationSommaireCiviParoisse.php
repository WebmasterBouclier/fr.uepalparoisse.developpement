<?php
use CRM_Civipdev_ExtensionUtil as E;

class CRM_Civipdev_Page_ConfigurationSommaireCiviParoisse extends CRM_Core_Page {

  public function run() {
    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(E::ts('ConfigurationSommaireCiviParoisse'));

//    $this->civipdev_civicrm_navigationMenu();





    parent::run();
  }

/*
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
*/
  function civipdev_civicrm_navigationMenu(&$menu) {
    _civipdev_civix_insert_navigation_menu($menu, 'CiviParoisse', [
      'label' => E::ts('Paroisse'),
      'name' => 'menu-civiparoisse',
      'url' => 'civicrm/sommaire-civiparoisse',
      'active' => 1,
    ]);
  }





}

<?php
use CRM_Civipdev_ExtensionUtil as E;

/**
 * TO DO
 * 
 * Rajouter les permissions Access CiviCRM
 * 
 */


class CRM_Civipdev_Page_SommaireCiviparoisse extends CRM_Core_Page {

  public function run() {
    CRM_Utils_System::setTitle(E::ts('Sommaire Civiparoisse'));

// Récupération de toutes les données du menu Paroisse
    $dataMenuParoisse = CRM_Civipdev_Page_ConfigurationSommaireCiviParoisse::SubMenuParoisse();

// Sélection des données nécessaires pour la page SommaireCiviParoisse
    foreach ($dataMenuParoisse as $key => $value) {
      if ($value['name'] == 'menu-parametres') {
        continue; // boucle d'évitement pour ne pas afficher le menu Paramètres
      }
      else {
        $menuCiviParoisse[$value['name']] = $this->addMenuCiviParoisse($value['image'], $value['label'], $value['url']);
      }
    }

// Assignation des variables pour la création de la page SommaireCiviParoisse.tpl
    $this->assign('PageSommaireCiviParoisse', $menuCiviParoisse);

    parent::run();
  }

/**
 * Renvoie les variables nécessaires à la création de la page SommaireCiviParoisse.tpl
 * 
 * @param array $content  
 * 
 */
  function addMenuCiviParoisse ($lienLogo, $titre, $lienURL) {
    $content = array(
      "Logo" => $lienLogo,
      "Titre"=> $titre,
      "URL" => $lienURL
    );

    return $content;
  }

}

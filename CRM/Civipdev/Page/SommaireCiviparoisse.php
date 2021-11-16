<?php
use CRM_Civipdev_ExtensionUtil as E;

class CRM_Civipdev_Page_SommaireCiviparoisse extends CRM_Core_Page {

  public function run() {
      // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(E::ts('Sommaire Civiparoisse'));

/*    $contactID = CRM_Core_Session::singleton()->get('userID');
*/

/* A TRAVAILLER
    $donnees = array (
      "FormulaireIndividu" => array ('images/form_particulier.png', 'Formulaire de création Individu', 'formulaire-individu'),
      "FormulaireEntreprise" => array ('images/form_entreprise.png', 'Formulaire de création Entreprise', ''),



    ); 

  //print_r($donnees);

    foreach ($donnees as $key1 => $value1) {
      
      print_r($value1);
      print_r($key1);
      $test = serialize($value1);
      var_dump($test);
      $menuCiviParoisse[$key1] = $this->addMenuCiviParoisse(implode("\',\'",$value1));        
      
    }


*/


    $menuCiviParoisse['FormulaireIndividu'] = $this->addMenuCiviParoisse('images/form_particulier.png', 'Formulaire de création Individu', 'formulaire-foyer');
    $menuCiviParoisse['FormulaireEntreprise'] = $this->addMenuCiviParoisse('images/form_entreprise.png', 'Formulaire de création Entreprise', '');
    $menuCiviParoisse['Dates_Anniversaires'] = $this->addMenuCiviParoisse('images/anniversaires.png', 'Listes des dates d\'anniversaires', '');
    $menuCiviParoisse['Listes'] = $this->addMenuCiviParoisse('images/listes.png', 'Listes', 'sommaire-listes');
    $menuCiviParoisse['Controles'] = $this->addMenuCiviParoisse('images/controles.png', 'Contrôles', 'controle-qualite');
    $menuCiviParoisse['Mode_Emploi'] = $this->addMenuCiviParoisse('images/aide.png', 'Mode d\'emploi', 'files/Mode_Emploi_Base_De_Données_Paroissiale_CiviCRM.pdf');
    
    $this->assign('TestDashboard', $menuCiviParoisse);


    parent::run();
  }


  function addMenuCiviParoisse ($lienLogo, $titre, $lienURL) {
    $content = array(
      "Logo" => $lienLogo,
      "Titre"=> $titre,
      "URL" => $lienURL
    );

    return $content;
  }

/*  function civipdev_civicrm_dashboard($contactID, &$contentPlacement = self::DASHBOARD_BELOW) {
  // REPLACE Activity Listing with custom content
    $contentPlacement = 2;
    $content = array(
      'Custom Content' => "Here is some custom content: $contactID",
      'Custom Table' => "
        <table>
        <tr><th>Contact Name</th><th>Date</th></tr>
        <tr><td>Foo</td><td>Bar</td></tr>
        <tr><td>Goo</td><td>Tar</td></tr>
        </table>",
    );

print_r ($contactID);
print_r($contentPlacement);
print_r($content);



    return $content;

} */


/*

$result = civicrm_api3('dashboard', 'create', array(
  'label' => 'Sommaire CiviParoisse',
  'name' => 'sommaire_civiparoisse',
  'url' => 'civicrm/sommaire-civiparoisse',
  'fullscreen_url' => 'civicrm/sommaire-civiparoisse&reset=1&context=dashletFullscreen',
));

*/




}

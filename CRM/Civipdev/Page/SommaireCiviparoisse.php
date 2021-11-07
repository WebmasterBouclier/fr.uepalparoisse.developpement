<?php
use CRM_Civipdev_ExtensionUtil as E;

class CRM_Civipdev_Page_SommaireCiviparoisse extends CRM_Core_Page {

  








  public function run() {
    
    function civipdev_civicrm_dashboard($contactID, &$contentPlacement) {
  // REPLACE Activity Listing with custom content
  $contentPlacement = 3;
  $content = array(
    'Custom Content' => "Here is some custom content: $contactID",
    'Custom Table' => "
      <table>
      <tr><th>Contact Name</th><th>Date</th></tr>
      <tr><td>Foo</td><td>Bar</td></tr>
      <tr><td>Goo</td><td>Tar</td></tr>
      </table>",
  );
  return $content;
} 





    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(E::ts('SommaireCiviparoisse'));

    // Example: Assign a variable for use in a template
    $this->assign('currentTime', date('Y-m-d H:i:s'));

    parent::run();
  }

}

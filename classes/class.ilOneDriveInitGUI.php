<?php
require_once('./Modules/Cloud/classes/class.ilCloudPluginInitGUI.php');
/**
 * Class ilOneDriveInitGUI
 *
 * @author  Fabian Schmid <fs@studer-raimann.ch>
 * @version 1.0.0
 */
class ilOneDriveInitGUI extends ilCloudPluginInitGUI {

	public function beforeInitGUI() {
//		echo '<pre>' . print_r($this->getGuiClass()->object, 1) . '</pre>';

//		$this->getGuiClass()->object->setRootFolder('/ILIASCloud'.$this->getGuiClass()->object->getRootFolder());


		parent::beforeInitGUI(); // TODO: Change the autogenerated stub
	}
}

?>
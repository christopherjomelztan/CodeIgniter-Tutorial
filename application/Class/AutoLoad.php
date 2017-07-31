<?php
/*Directories that contain classes*/
require_once dirname(__DIR__) . "\\Interface\\IAutoLoad.php";

class AutoLoad implements IAutoLoad {
	public function Load($className) {
		$classesDir = array ("\\Interface\\","\\Class\\");
		foreach ($classesDir as $directory) {
			if (file_exists(dirname(__DIR__) . $directory . $className . '.php')) {
				require_once (dirname(__DIR__) . $directory . $className . '.php');
				return;
			}
		}
	}
}
?>
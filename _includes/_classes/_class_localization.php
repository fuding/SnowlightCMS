<?php
class Localization {
var $xml;

	function loadTranslationFile($file) {
		if (is_file($file)) {
			if ($this->xml = simplexml_load_file($file)) {
				return true;
			}
		} else {
			echo "The file could not be load!";
			break;
		}
	}
	function pT( $txt_id) {
		if ($this->xml != "") {
			$path = "loctext[@id=\"$txt_id\"]";
			$res = $this->xml->xpath($path);
			echo $res[0]->text;
		} else {
			echo "Please load a languagefile first!";
		}
	}
	function lT($txt_id) {
		if ($this->xml != "") {
			$path = "loctext[@id=\"$txt_id\"]";
			$res = $this->xml->xpath($path);
			$translation = $res[0]->text;
		} else {
			echo "Please load a languagefile first!";
		}
		return $translation;
	}
	function loadLangArray($lang) {
		if ($this->xml != "") {
			$translations = array();
			$path = "/language[@id=\"$lang\"]";
			$res = $this->xml->xpath($path);
		} else {
			echo "Please load a languagefile first!";
		}
		return $res;
	}
}
?>
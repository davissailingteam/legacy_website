<?php  	

defined('C5_EXECUTE') or die(_("Access Denied."));

class ThemeSmashingHtmlFivePackage extends Package {

	protected $pkgHandle ='theme_smashing_html_five';
	protected $appVersionRequired = '5.1';
	protected $pkgVersion = '1.0';
	
	public function getPackageDescription() {
		return t("Installs Smashing Html5 theme");
	}
	
	public function getPackageName() {
		return t("Smashing Html5");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block	    
		PageTheme::add('smashing_html5', $pkg); 	   
	}




}
<?php 

defined('C5_EXECUTE') or die(_("Access Denied."));

class ThemeYosemitePackage extends Package {

 protected $pkgHandle = 'theme_yosemite';
 protected $appVersionRequired = '5.3';
 protected $pkgVersion = '1.0';
 
 public function getPackageDescription() {
  return t("Installs the Yosemite theme.");
 }
 
 public function getPackageName() {
  return t("Yosemite");
 }
 
 public function install() {
  $pkg = parent::install();  
  PageTheme::add('yosemite', $pkg);  
 }
}
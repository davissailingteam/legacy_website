<?php 
$bvt = new BlockViewTemplate($b); 
$bvt->setBlockCustomTemplate(false);
 
function callback($buffer) 
{
  return (str_replace('class="nav"', 'class="sf-menu" id="nav"', $buffer));
}
 
ob_start("callback");
include($bvt->getTemplate());
ob_end_flush();
?>

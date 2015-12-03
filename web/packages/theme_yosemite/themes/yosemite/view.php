<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>

	<div id="page" class="full_width">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content" class="full">
					<?php  print $innerContent; ?>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->

<?php  $this->inc('elements/footer.php'); ?>

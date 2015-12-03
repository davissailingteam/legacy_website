<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>

	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<?php 
					$a = new Area('Main');
					$a->display($c);
					?>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<?php 
						$a = new Area('Sidebar');
						$a->setBlockWrapperStart('<li>');
						$a->setBlockWrapperEnd('</li>');
						$a->display($c);
						?>
					</ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->

<?php  $this->inc('elements/footer.php'); ?>

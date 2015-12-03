<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>

	<div id="page" class="left_sidebar">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="sidebar" class="left">
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
				<div id="content" class="right">
					<?php 
					$a = new Area('Main');
					$a->display($c);
					?>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->

<?php  $this->inc('elements/footer.php'); ?>

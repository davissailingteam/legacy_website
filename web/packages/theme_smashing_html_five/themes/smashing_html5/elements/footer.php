<?php  	   defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
		<span class="bio"> <?php    $a = new Area('Footer');
$a->display($c); ?></span>

	       </address><!-- /#about -->
	
		       
Theme Made by Enrique Ramírez for <a href="http://www.smashingmagazine.com">Smashing Magazine. Powered by <a href="http://www.concrete5.org/r/-/27444">Concrete5</a><br>
			&copy; <?php  	 echo date('Y')?> <a href="<?php       echo DIR_REL?>/"><?php  	echo SITE?></a>.
			  
			<?php  	  echo t('All rights reserved.')?>
			
			<?php  	  
			$u = new User();
			if ($u->isRegistered()) { ?>
				<?php  	   
				if (Config::get("ENABLE_USER_PROFILES")) {
					$userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
				} else {
					$userName = $u->getUserName();
				}
				?>
			<?php  	  echo t('Currently logged in as <b>%s</b>.', $userName)?> <a href="<?php       echo $this->url('/login', 'logout')?>"><?php       echo t('Sign Out')?></a>
			<?php  	   } else { ?>
<a href="<?php  	   echo $this->url('/login')?>"><?php  	  echo t('Sign In to Edit this Site')?></a>
			<?php  	   } ?>
	 </p>
</footer><!-- /#contentinfo --> 		    
</div>

<?php  	   Loader::element('footer_required'); ?>

</body>
</html>
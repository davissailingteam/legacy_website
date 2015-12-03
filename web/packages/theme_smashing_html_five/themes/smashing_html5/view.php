
<?php       

defined('C5_EXECUTE') or die(_("Access Denied."));

$this->inc('elements/header.php'); ?>


<header id="banner" class="body">
        <h1>                <a href="<?php  echo DIR_REL?>/"><?php   print SITE; ?></a></h1>

        <nav><ul>
                <?php    $a = new Area('Header Nav');
$a->display($c); ?>
        </ul></nav>

</header><!-- /#banner -->  

<aside id="featured" class="body"><article>
      
        <p><?php    $a = new Area('Main');
$a->display($c); ?></p>

</article></aside><!-- /#featured -->

<section id="content" class="body">
        <ol id="posts-list" class="hfeed">
                <li><article class="hentry">
                       

                        <footer class="post-info">
         <p><?php    $a = new Area('Sidebar');
$a->display($c); ?></p>                   
                        </footer><!-- /.post-info -->

                        <div class="entry-content">

                                <p><?php  

print $innerContent;

?>                                      
</p>
                        </div><!-- /.entry-content -->
                </article></li>

        </ol><!-- /#posts-list -->
</section><!-- /#content -->


<footer id="contentinfo" class="body">
        <address id="about" class="vcard body">

             

<?php           $this->inc('elements/footer.php'); ?>

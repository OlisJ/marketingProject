<?php  get_header();?>
<nav class="navbar navbar-expand-lg " style="background-color:	#38658b;" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1 id="h1">Web 3</h1>


<div class="card" style="width: 18rem;">
  <img src="<?php echo get_template_directory_uri();?> /img/bc.png" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


<div >

    <?php
    if(have_posts()):
        while(have_posts()): the_post();
    ?>

    <h2><?php the_title();  ?></h2>
    <small class='post-categories'><?php  the_time("Y/m/d");   ?> in <?php the_category();   ?></small>
    <?php the_post_thumbnail(array(200,200)); ?>
    <p><?php the_content(); ?></p>
    <?php endwhile;  ?>
    <?php endif; ?>
</div>


<div id="sidebar-primary" class='sidebar'>
    <?php if(is_active_sidebar('primary')):  ?>
        <?php dynamic_sidebar('primary');  ?>
        <?php else: ?>
        
            <?php endif; ?>
</div>


</div>
<?php get_footer();?>
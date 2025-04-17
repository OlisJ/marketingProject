<?php  get_header();?>
<nav class="navbar navbar-expand-lg " style="background-color:	#38658b;" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ChainPulse</a>
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

<h1 id='compname'>ChainPulse</h1>
<br><br>

<div class='cardgrid'>
   <div class="card" style="width: 21rem;">
    <img src="<?php echo get_template_directory_uri();?> /img/bitcoin.jpg" class="card-img-top" >
    <div class="card-body">
      <h5 class="card-title">Whale Strategy Revealed As BTC Spikes 37%</h5>
      <p class="card-text">While the crypto market remains shaken by speculative tremors, a subtle signal captures the insiders’ attention.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  <div class="card" style="width: 21rem;">
    <img src="<?php echo get_template_directory_uri();?> /img/pi.png" class="card-img-top" >
    <div class="card-body">
      <h5 class="card-title">Pi Network’s Coin Risks Crashing Another 25%</h5>
      <p class="card-text">Pi Coin (PI), may implode further after crashing 80% from its yearly high.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  <div class="card" style="width: 21rem;">
    <img src="<?php echo get_template_directory_uri();?> /img/bitcoin.jpg" class="card-img-top" >
    <div class="card-body">
      <h5 class="card-title">Ethereum fees drop to a 5-year low </h5>
      <p class="card-text">Transaction costs on the Ethereum network have dropped to the lowest level in five years</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  <div class="card" style="width: 21rem;">
    <img src="<?php echo get_template_directory_uri();?> /img/eth1.jpg" class="card-img-top" >
    <div class="card-body">
      <h5 class="card-title">Bitcoin Trades Around $84,000 as Crypto Stocks Slip</h5>
      <p class="card-text">The leading currency recently traded around $84,000, rising back above the prices below $77,000 seen late last week</p>
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
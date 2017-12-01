<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
  <!-- Example row of columns -->

  <section class="home_elmt row">
        <!-- Accordeon Menu -->
        <article class="col-md-3">
            <div class="accordion">
                <a href="<?php echo base_url('produits/lampesP'); ?>" class="accordion-item">
                    <h2>Lampes</h2>
                    <div class="accordion-item-content">
                      <img src="<?php echo img_url('accordeon/macbook-690276_1280.jpg'); ?>">

                    </div>
                </a>
                <a href="<?php echo base_url('produits/lampadairesP'); ?>" class="accordion-item">
                    <h2>Lampadaires</h2>
                    <div class="accordion-item-content">
                       <img src="<?php echo img_url('accordeon/lounge-609383_1280.jpg'); ?>">
                    </div>
                </a>
                <a href="<?php echo base_url('produits/suspensionsP'); ?>" class="accordion-item accordion-item--default">
                    <h2>Suspensions</h2>
                    <div class="accordion-item-content">
                      <img src="<?php echo img_url('accordeon/bright-1851267_1280-2.jpg'); ?>">
                    </div>
                </a>
                <a href="<?php echo base_url('produits/ampoulesP'); ?>" class="accordion-item">
                    <h2>Ampoules</h2>
                    <div class="accordion-item-content">
                     <img src="<?php echo img_url('accordeon/ceiling-lamp-335975_1280.jpg'); ?>">
                    </div>
                </a>
                <a href="<?php echo base_url('produits/cordonsP'); ?>" class="accordion-item">
                    <h2>Cordons</h2>
                    <div class="accordion-item-content">
                       <img src="<?php echo img_url('accordeon/lighting-1565982_1920-2.jpg'); ?>">
                    </div>
                </a>
                <a href="<?php echo base_url('produits/piecesP'); ?>" class="accordion-item">
                    <h2>Pièces détachées</h2>
                    <div class="accordion-item-content">
                       <img src="<?php echo img_url('accordeon/light-bulbs-1125016_960_720.jpg'); ?>">
                    </div>
                </a>
            </div>
        </article>
        <!-- Grille nouveautés -->
        <article class="col-md-9">
            <p>
</p>
            <h2 class="title_nouv"><a href="<?php echo base_url('produits/suspensions'); ?>"><i class="fa fa-th-large vignet" aria-hidden="true" ></i></a>Les Suspensions</h2>
             <!-- Produits -->
         <div class="row">
                <?php for ($i=0; $i < count($list_prod); $i++) { ?>
                    
                <div class="col-md-2 product_itemP">
                    <h3><?php echo $list_prod[$i]['nom']?></h3>
                    <a href="<?php echo base_url('produits/detail').'?ref='.$list_prod[$i]['ref'].'&P';?>">
                        <img class="img-responsive" src=<?php echo img_url('produits/'.$list_prod[$i]['image'])?>>
                    </a><p>Ref. <?php echo $list_prod[$i]['ref'];?></p>
                </div>
               <?php }?>

            </div> 
        <div class="row">
            <div class="col-md-offset-5 pag_page">
                <?php echo $pagination;?>
            </div>
        </div>
        
        
          
          
           
        </article>
    </section>
</div>
<!-- /container --> 
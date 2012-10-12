<?php use_stylesheet('index.css') ?>
<?php use_helper('gle') ?>


<!-- Slots -->
<?php slot('title') ?>
  <?php if($sf_request->hasParameter('slug')): ?>
  <?php echo __('Kendafrik.com - Categorie %category% - Achetez et vendez vos objets neufs ou d\'occasion, prix fixe, petites annonces', array('%category%' => $sf_request->getParameter('slug'))) ?>    
  <?php else : ?>
    <?php echo __('Kendafrik.com - Achetez et vendez vos objets neufs ou d\'occasion, prix fixe, petites annonces') ?>  
  <?php endif ?>
<?php end_slot(); ?>

<?php slot('keywords') ?>
  <?php if($sf_request->hasParameter('slug')): ?>
  <?php echo __('Kendafrik.com, %category% , Acheter, vendre, petites annonces, acheter occasions, annonces afrique', array('%category%' => $sf_request->getParameter('slug'))) ?>    
  <?php else : ?>
    <?php echo __('kendafrik.com, Acheter, vendre, petites annonces, acheter occasions, annonces afrique') ?>
  <?php endif ?>
<?php end_slot(); ?>

<?php slot('description') ?>
  <?php if($sf_request->hasParameter('slug')): ?>
  <?php echo __('Sur kendafrik.com, retrouvez les catégories %category%. achetez et vendez vos vêtements, téléphones, bijoux, livres, jeux, collections, DVD, portables, ou votre voiture, à prix fixe ou en petites annonces gratuites!', array('%category%' => $sf_request->getParameter('slug'))) ?>      
  <?php else : ?>
  <?php echo __('Sur kendafrik.com, achetez et vendez vos vêtements, téléphones, bijoux, livres, jeux, collections, DVD, portables, ou votre voiture, à prix fixe ou en petites annonces gratuites!') ?>
  <?php endif ?>
<?php end_slot(); ?>


<?php slot('categories') ?>
<?php $culture = $sf_user->getCulture() ?>
<div id="categories">      
  <ul>
    <?php foreach($categories as $category): ?>
    <?php if( $category['Translation'][$culture]['slug'] == $sf_request->getParameter('slug')) : ?>
    <li class="catchosen">
    <a href="<?php echo url_for('@category?slug='.$category['Translation'][$culture]['slug']) ?>"/>
      <?php echo $category['Translation'][$culture]['name']  ?>
    </a>
    </li>    
    <?php else: ?>
    <li>
    <a href="<?php echo url_for('@category?slug='.$category['Translation'][$culture]['slug']) ?>"/>
      <?php echo $category['Translation'][$culture]['name']  ?></a>
    </li>    
    <?php endif ?>
    <?php endforeach ?>
  </ul>
</div>
<?php end_slot(); ?>
<?php slot('nouveauken') ?>
<div id="nouveauken">
  <a href="<?php echo url_for('ken/new') ?>"><?php echo __('Nouveau Ken') ?></a>
</div>
<?php end_slot(); ?>
<!-- FIN SLOTS -->


<div id="kens">
<div id="contenu">  
<div id="options">
  <div id="witchflag">
    <?php if($sf_user->hasAttribute('country')): ?>
      <img src="<?php echo '/images/flags/'.$sf_user->getAttribute('country').'.jpg' ?>" alt="" title="" />
    <?php else: ?>
      <img src="<?php echo '/images/flags/WW.jpg' ?>" alt="world" title="world" />  
    <?php endif ?>
  </div>
  <div id="reseausociaux">
      <a href="http://www.facebook.com/pages/kenDAfrik/110817942334904?ref=ts">
      <img src="<?php echo '/images/facebook.png' ?>" target="_blank" alt="facebook" title="<?php echo __('Rejoingnez nous sur facebook') ?>" /></a>
      <a href=""><img src="<?php echo '/images/twitter.png' ?>" alt="twitter" title="<?php echo __('Rejoingnez nous sur twitter') ?>" /></a>      
      <a href=""><img src="<?php echo '/images/feed.png' ?>" alt="feed" title="<?php echo __('Abonnez vous à nos flux rss') ?>" /></a>            
  </div>
</div>
  <?php foreach ($kens as $i => $ken): ?>
    <div class="ken">
      <?php if($ken['image']): ?>
        <img src="<?php echo '/uploads/annonces/'.$ken['image'] ?>" alt="" title="" />
      <?php endif ?>
      <div class="annonce">
        <?php echo $ken->getTypeName() ?>
        <a href="<?php echo url_for('ken/show?id='.$ken['id']) ?>"><?php echo $ken['objet'] ?></a>
        <?php echo __('Prix : '.$ken['prix'].' '.$ken->getDeviseName()) ?>
        <span class="negociable"><?php echo $ken->getDebattreName() ?></span>
        <small><?php echo __('postée il y a %date%', array('%date%' => myDate(strtotime($ken['created_at'])))) ?></small>            
      </div>
    </div>
    <?php if($i > 1 and $i%10 == 0): ?>
      <div id="adannonces">
      <script type="text/javascript"><!--
      google_ad_client = "ca-pub-9482595601836319";
      /* kendafrik2 */
      google_ad_slot = "9892940986";
      google_ad_width = 300;
      google_ad_height = 250;
      //-->
      </script>
      <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>  
      </div>    
    <?php endif ?>
  <?php endforeach; ?>
</div>
</div>

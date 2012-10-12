<?php use_stylesheet('index.css') ?>
<?php use_helper('gle') ?>

<?php slot('categories') ?>
<div id="categories">      
  <ul>
    <?php foreach($categories as $category): ?>
    <li><a href="<?php echo url_for('@category?slug='.$category['slug']) ?>"/><?php echo $category['name']  ?></a></li>
    <?php endforeach ?>
  </ul>
</div>
<?php end_slot(); ?>
<?php slot('nouveauken') ?>
<div id="nouveauken">
  <a href="<?php echo url_for('ken/new') ?>"><?php echo __('Nouveau Ken') ?></a>
</div>
<?php end_slot(); ?>

<div id="kens">
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
        <small><?php echo __('postée il y a '.myDate(strtotime($ken['created_at']))) ?> </small>
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

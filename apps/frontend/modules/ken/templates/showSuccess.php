<?php use_stylesheet('show.css') ?>
<?php use_helper('gle') ?>
<?php use_helper('Text') ?>

<!-- Slots -->
<?php slot('title') ?>
  <?php echo __('%name% %objet% %etat% - %pays%', array('%name%' => $ken->getTypeName(),
                                            '%objet%' => $ken['objet'],
                                            '%etat%' => $ken->getEtatName(),                                            
                                            '%pays%' => $ken->getPaysName() )) ?>
<?php end_slot(); ?>

<?php slot('keywords') ?>
  <?php echo __('KenDAfrik.com, %name%, %objet%, %etat%, %pays%, %ville%', array('%name%' => $ken->getTypeName(),
  '%objet%' => $ken['objet'],
  '%etat%' => $ken->getEtatName(),                                            
  '%ville%' => $ken['ville'],                                                                                        
  '%pays%' => $ken->getPaysName() )) ?>
<?php end_slot(); ?>
<?php slot('description') ?>
  <?php echo __('KenDAfrik pour vous, %name% %objet% %etat% %price% %devise% - %pays%... Achetez et vendez vos objets neufs ou d\'occasion sur kenDAfrik.com', 
  array('%name%' => $ken->getTypeName(),
  '%objet%' => $ken['objet'],
  '%etat%' => $ken->getEtatName(),                                            
  '%price%' => $ken['prix'],
  '%devise%' => $ken->getDeviseName(),                                                
  '%pays%' => $ken->getPaysName() )) ?>
<?php end_slot(); ?>

<?php slot('url') ?>
<?php echo url_for('ken/show?id='.$ken['id'],true) ?>
<?php end_slot(); ?>

<?php slot('img') ?>
<?php echo 'http://kendafrik.com/uploads/annonces/'.$ken['image'] ?>
<?php end_slot(); ?>

<?php slot('categories') ?>
<?php $culture = $sf_user->getCulture() ?>
<div id="categories">      
  <ul>
    <?php foreach($categories as $category): ?>
    <li>
      <a href="<?php echo url_for('@category?slug='.$category['Translation'][$culture]['slug']) ?>"/>
        <?php echo $category['Translation'][$culture]['name']  ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</div>
<?php end_slot(); ?>
<?php slot('nouveauken') ?>
<div id="nouveauken">
  <a href="<?php echo url_for('ken/new') ?>"><?php echo __('Nouveau Ken') ?></a>
</div>
<?php end_slot(); ?>

<!-- fin slot -->

<div id="ken">
  <div id="contenu">        
  
    <a href="<?php echo $sf_request->getReferer() ?>">
      <img src="/images/back.jpg" alt="<?php echo __('Retourner à la liste') ?>" title="<?php echo __('Retourner à la liste') ?>" />
    </a>        
    
    <div id="annoncetitre">
        <?php echo $ken['objet'] ?> | 
        <small><?php echo __('postée il y a %date%', array('%date%' => myDate(strtotime($ken['created_at'])))) ?></small>  

      <div id="facebooklike">
        <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>      
        <fb:like href="<?php echo url_for('ken/show?id='.$ken['id'],true) ?>" show_faces="false" width="450" font=""></fb:like>        
      </div>
      
    </div>
    
    
    <?php if($ken['image']): ?>
        <div id="annonceimg"><img src="<?php echo '/uploads/annonces/'.$ken['image'] ?>" alt="<?php echo $ken['objet'] ?>" title="<?php echo $ken['objet'] ?>" /></div>
      <?php endif ?>

    <div id="adannonce">
      <script type="text/javascript"><!--
      google_ad_client = "ca-pub-9482595601836319";
      /* kendafrik3 */
      google_ad_slot = "4372757564";
      google_ad_width = 250;
      google_ad_height = 250;
      //-->
      </script>
      <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
    </div>
          
    <div id="details">
        <h2><?php echo __('Detail de l\'annonce')  ?></h2>
        
      <ul>
        <li><span class="libelle"><?php echo __('Type d\'opération : ') ?></span><?php echo $ken->getTypeName() ?></li>
        <li><span class="libelle"><?php echo __('Nom du produit : ') ?></span> <?php echo $ken['objet'] ?></li>        
        <li>
          <span class="libelle"><?php echo __('Prix du produit : ') ?></span><?php echo $ken['prix'].' '.$ken->getDeviseName() ?>
          - <?php echo $ken->getDebattreName() ?>
        </li>                        
        <?php if($ken['supplement']): ?>
          <li id="supplement"><span class="libelle"><?php echo __('Caractéristiques du produit : ') ?></span><div id="supplementtext"><?php echo simple_format_text(auto_link_text($ken['supplement']))  ?></div></li>                                                                
        <?php endif ?>        
        <?php if($ken['etat']): ?>
          <li><span class="libelle"><?php echo __('Etat : ') ?></span> <?php echo $ken->getEtatName() ?></li>                                
        <?php endif ?>
        <?php if($ken['pays']): ?>
          <li><span class="libelle"><?php echo __('Pays : ') ?></span> <?php echo $ken->getPaysName() ?></li>                                
        <?php endif ?>
        <?php if($ken['ville']): ?>
          <li><span class="libelle"><?php echo __('ville : ') ?></span> <?php echo $ken['ville'] ?></li>                                
        <?php endif ?>
        <?php if($ken['email']): ?>
          <li><span class="libelle"><?php echo __('Email : ') ?></span> <?php echo $ken['email'] ?></li>                                
        <?php endif ?>        
        <?php if($ken['tel1']): ?>
          <li><span class="libelle"><?php echo __('Téléphone 1 : ') ?></span> <?php echo $ken['tel1'] ?></li>                                
        <?php endif ?>        
        <?php if($ken['tel2']): ?>
          <li><span class="libelle"><?php echo __('Téléphone 2 : ') ?></span> <?php echo $ken['tel2'] ?></li>                                
        <?php endif ?>                
      </ul>
    </div>
  </div>
</div>

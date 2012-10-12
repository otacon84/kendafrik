<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>

  <?php $keywords = __('Petites annonces, annonces gratuites, petites annonces gratuites, produits d\'occasion, immobilier, vehicules, informatique, tablette, auto...') ?>
  <?php $description = __('Petites annonces gratuites d\'occasion (immobilier, voiture, moto, produits d\'occasion, locations de vacances, offres d\'emploi, services de proximité, animaux...)') ?>
  
  <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
  <meta name="keywords" 
        content="<?php include_slot('keywords', $keywords) ?>" />
  <meta name="description" 
        content="<?php include_slot('description', $description) ?>" /> 
  <meta name="robots" content="index,follow" /> 
  
  <!-- Facebook metas -->  
<meta property="og:title" content="<?php include_slot('title', 'kendafrik.com') ?>"/>
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php include_slot('url') ?>"/>
<meta property="og:image" content="<?php include_slot('img') ?>"/>
<meta property="og:site_name" content="kendafrik.com" />
<meta property="fb:admins" content="599890481" />
<meta property="og:description" content="<?php include_slot('description') ?>"/>

  <!-- Rels -->
  <title><?php include_slot('title', 'Petites annonces gratuites d\'occasion en Afrique - kendafrik.com') ?></title>        
  <link rel="shortcut icon" href="/images/favicon.ico" />
    
  
    <link rel="shortcut icon" href="/favicon.ico" /> 
    <?php include_stylesheets() ?>
  </head>
  <body>  
    <div id="header">
    <?php include_component('language', 'language') ?>
    </div>
    <div id="flags">
      <?php $pays = array('WW'=>'World',
                             'DZ'=>__('Algerie'),
                             'AO'=>__('Angola'),
                             'BJ'=>__('Benin'),
                             'BW'=>__('Botswana'),
                             'BF'=>__('Burkina Faso'),
                             'BI'=>__('Burundi'),
                             'CM'=>__('Cameroun'),
                             'CV'=>__('Cape Verde'),
                             'EA'=>__('Ceuta'),
                             'TD'=>__('Chad'),
                             'CI'=>__('Côte d\'Ivoire'),
                             'DJ'=>__('Djibouti'),
                             'EG'=>__('Egypt'),
                             'GQ'=>__('Guinée Equatoriale'),
                             'ER'=>__('Eritrea'),
                             'ET'=>__('Ethiopia'),
                             'FR'=>__('France'),
                             'GA'=>__('Gabon'),
                             'GH'=>__('Ghana'),
                             'GN'=>__('Guinée'),
                             'GW'=>__('Guinée Bissau'),
                             'KE'=>__('Kenya'),
                             'LS'=>__('Lesotho'),
                             'LR'=>__('Liberia'),
                             'LY'=>__('Libya'),
                             'MG'=>__('Madagascar'),
                             'PT'=>__('Madeira'),
                             'MW'=>__('Malawi'),
                             'ML'=>__('Mali'),                             
                             'MR'=>__('Mauritanie'),
                             'MU'=>__('Maurice'),
                             'EA'=>__('Melilia'),                             
                             'MA'=>__('Maroc'),
                             'MZ'=>__('Mozambique'),
                             'NA'=>__('Namibie'),
                             'NE'=>__('Niger'),
                             'NG'=>__('Nigeria'),
                             'RW'=>__('Rwanda'),
                             'FR'=>__('Saint Hélène'),
                             'ST'=>__('Sao Tomé et principe'),
                             'SN'=>__('Sénégal'),                             
                             'SL'=>__('Sierra Léone'),
                             'SO'=>__('Somalie'),
                             'ZA'=>__('South Africa'),
                             'SD'=>__('Sudan'),
                             'SZ'=>__('Swaziland'),
                             'TZ'=>__('Tanzania'),
                             'IC'=>__('Îles Canaries'),
                             'CF'=>__('Republique de la Centre Afrique'),
                             'KM'=>__('Comores'),
                             'CD'=>__('République Démocratique du Congo'),
                             'GM'=>__('Gambie'),
                             'CG'=>__('République du Congo'),
                             'SC'=>__('Seychelles'),
                             'TG'=>__('Togo'),
                             'UG'=>__('Uganda'),
                             'ZM'=>__('Zambia'), 
                             'ZW'=>__('Zimbabwe')) ?>
      <?php foreach($pays as $i => $nom): ?>
        <div><a href="<?php echo url_for('@localized_homepage?cn='.$i) ?>"><img src="<?php echo '/images/flags/'.$i.'.jpg' ?>" class="bulle" title="<?php echo $nom ?>" alt="<?php echo $nom ?>" /></a></div>                                                
      <?php endforeach ?>
    </div>    
    <div id="logo">
      <a href="<?php echo url_for('@homepage') ?>" alt="KenDAfrik.com" title="kenDAfrik.com"/><img src="/images/logo.jpg" alt="KenDAfrik.com" title="KenDAfrik.com" /></a>
    </div>
    <div id="search">
      <form action="<?php echo url_for('ken_search') ?>" method="get">
        <input type="text" name="keywords"  id="search_keywords" />
        <img id="loader" src="/images/loader.gif" style="vertical-align: middle; display: none" />
      </form>
    </div>
    <div id="menu">
      <?php include_slot('nouveauken') ?>      
      <?php include_slot('categories') ?>
      <div id="pubmenu">
        <script type="text/javascript"><!--
        google_ad_client = "ca-pub-9482595601836319";
        /* menu kendafrik */
        google_ad_slot = "8116440187";
        google_ad_width = 120;
        google_ad_height = 600;
        //-->
        </script>
        <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>      
      </div>
    </div>
    <div id="content">
      <?php echo $sf_content ?>      
    </div>
    <div id="footer">
      <?php echo __('KenDAfrik 2011')  ?> | 
      <a href=""><?php echo __('Created by Eldon Labs')  ?></a>
    </div>


    <?php use_javascript('jquery-1.4.2.min.js') ?>
    <?php use_javascript('search.js') ?>        
    <?php //use_javascript('jquery.jscrollpane.min.js') ?>    
    <?php //use_javascript('jquery.mousewheel.js') ?>        
    <?php use_javascript('bulle.js') ?>      
    <?php use_javascript('main.js') ?>    
    <?php include_javascripts() ?>    
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11061228-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>        
  </body>
</html>

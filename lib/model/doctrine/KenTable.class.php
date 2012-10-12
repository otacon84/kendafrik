<?php

class KenTable extends Doctrine_Table
{
  static public $pays = array('DZ'=>'Algerie',
                             'AO'=>'Angola',
                             'BJ'=>'Benin',
                             'BW'=>'Botswana',
                             'BF'=>'Burkina Faso',
                             'BI'=>'Burundi',
                             'CM'=>'Cameroun',
                             'CV'=>'Cape Verde',
                             'EA'=>'Ceuta',
                             'TD'=>'Chad',
                             'CI'=>'Côte d\'Ivoire',
                             'DJ'=>'Djibouti',
                             'EG'=>'Egypt',
                             'GQ'=>'Guinée Equatoriale',
                             'ER'=>'Eritrea',
                             'ET'=>'Ethiopia',
                             'FR'=>'France',
                             'GA'=>'Gabon',
                             'GH'=>'Ghana',
                             'GN'=>'Guinée',
                             'GW'=>'Guinée Bissau',
                             'KE'=>'Kenya',
                             'LS'=>'Lesotho',
                             'LR'=>'Liberia',
                             'LY'=>'Libya',
                             'MG'=>'Madagascar',
                             'PT'=>'Madeira',
                             'MW'=>'Malawi',
                             'ML'=>'Mali',                             
                             'MR'=>'Mauritanie',
                             'MU'=>'Maurice',
                             'EA'=>'Melilia',                             
                             'MA'=>'Maroc',
                             'MZ'=>'Mozambique',
                             'NA'=>'Namibie',
                             'NE'=>'Niger',
                             'NG'=>'Nigeria',
                             'RW'=>'Rwanda',
                             'FR'=>'Saint Hélène',
                             'ST'=>'Sao Tomé et principe',
                             'SN'=>'Sénégal',                             
                             'SL'=>'Sierra Léone',
                             'SO'=>'Somalie',
                             'ZA'=>'South Africa',
                             'SD'=>'Sudan',
                             'SZ'=>'Swaziland',
                             'TZ'=>'Tanzania',
                             'IC'=>'Îles Canaries',
                             'CF'=>'Republique de la Centre Afrique',
                             'KM'=>'Comores',
                             'CD'=>'République Démocratique du Congo',
                             'GM'=>'Gambie',
                             'CG'=>'République du Congo',
                             'SC'=>'Seychelles',
                             'TG'=>'Togo',
                             'UG'=>'Uganda',
                             'ZM'=>'Zambia', 
                             'ZW'=>'Zimbabwe');
  public function getPays()
  {
    return self::$pays;
  }                   
  
  static public $type = array('vente' => 'Vente', 
                      'achat' => 'Achat', 
                      'location' => 'Location');              
                      
  public function getType()
  {
    return self::$type;
  }                   

  static public $etat = array('neuf' => 'Neuf Amballé', 
                      'neuf' => 'Neuf', 
                      'utilise' => 'Utilisé');      
  public function getEtat()
  {
    return self::$etat;
  }                   
  
  static public $devise = array(
                      'EUR' => 'Euro', 
                      'USD' => 'USD',                       
                      'DZD' => 'Algerian dinar',                       
                      'AOA' => 'Kwanza',                                             
                      'XOF' => 'franc CFA',                       
                      'BWP' => 'Pula',  
                      'BIF' => 'Burundi franc',                                                                                         
                      'XAF' => 'franc CFA',                      
                      'CVE' => 'Cape Verdean escudo',                            
                      'DJF' => 'Franc Djiboutien',                                                  
                      'EGP' => 'Egyptian pound',
                      'ERN' => 'Nakfa',                      
                      'ETB' => 'Birr',
                      'GHS' => 'Ghana cedi',  
                      'KES' => 'Kenyan shilling', 
                      'LSL' => 'Loti',                       
                      'LRD' => 'Liberian dollar',                                             
                      'LYD' => 'Lybian Dinar',                       
                      'MGA' => 'Malagasy ariary',                                                                   
                      'MWK' => 'Kwacha',                                                                                         
                      'MRO' => 'Ouguiya',                      
                      'MUR' => 'Mauritian rupee',                            
                      'MAD' => 'Dirham Marocain',                                                  
                      'MZN' => 'Mozambican metical',
                      'NAD' => 'Namibian dollar',                      
                      'NGN' => 'Naira',
                      'RWF' => 'Rwandan franc',                      
                      'SHP' => 'Saint Helena pound',
                      'STD' => 'Dobra',                      
                      'SLL' => 'Leone',
                      'SOS' => 'Somali shilling',                      
                      'ZAR' => 'Rand',
                      'SDG' => 'Sudanese pound',                      
                      'SZL' => 'Lilangeni',
                      'TZS' => 'Tanzanian shilling',                                                                  
                      'KMF' => 'Comorian franc',
                      'GMD' => 'Dalasi',
                      'SCR' => 'Seychellois rupee',
                      'UGX' => 'Ugandan shilling',
                      'ZMK' => 'Zambian kwacha');                              
  public function getDevise()
  {
    return self::$devise;
  }                   
  static public $debattre = array('fixe' => 'Prix fixe',
                      'negociable' => 'Prix négociable');                                                                                    
  public function getDebattre()
  {
    return self::$debattre;
  }                                                               


  public function getLastKens($country = null)
  {
    if($country and $country != 'WW')
    {
    $q = $this->createQuery('k')
      ->select('k.type, k.image,k.prix,k.devise,k.created_at,k.objet,k.debattre,k.pays')
      ->orderBy('k.created_at DESC')
      ->where('k.pays = ?', $country)
      ->limit(50);    
    }
    else
    {
    $q = $this->createQuery('k')
      ->select('k.type, k.image,k.prix,k.devise,k.created_at,k.objet,k.debattre')
      ->orderBy('k.created_at DESC')
      ->limit(50);        
    }

 
    return $q->execute();
  }
  
  public function getKensByCat($cat, $country = null)
  {
    if($country and $country != 'WW')
    {
    $q = $this->createQuery('k')
      ->select('k.id, k.type, k.image,k.prix,k.devise,k.created_at,k.objet,k.debattre,k.pays, t.slug, c.id')
      ->leftJoin('k.Category c')      
      ->leftJoin('c.Translation t')
      ->orderBy('k.created_at DESC')
      ->where('k.pays = ?', $country)
      ->andWhere('t.slug = ?', $cat)
      ->limit(50);    
    }
    else
    {
    $q = $this->createQuery('k')
      ->select('k.type, k.image,k.prix,k.devise,k.created_at,k.objet,k.debattre, k.pays, t.slug, c.id')
      ->leftJoin('k.Category c')      
      ->leftJoin('c.Translation t')      
      ->orderBy('k.created_at DESC')
      ->Where('t.slug = ?', $cat)      
      ->limit(50);        
    }

 
    return $q->execute();
  }  
  
  public function addkensQuery(Doctrine_Query $q = null)
  {
    if (is_null($q))
    {
      $q = Doctrine_Query::create()
        ->from('Ken k');
    }
 
    $alias = $q->getRootAlias();
 
    $q->addOrderBy($alias . '.created_at DESC');
 
    return $q;
  }  
  
  
  static public function getLuceneIndex()
  {
    ProjectConfiguration::registerZend();
 
    if (file_exists($index = self::getLuceneIndexFile()))
    {
      return Zend_Search_Lucene::open($index);
    }
    else
    {
      return Zend_Search_Lucene::create($index);
    }
  }
 
  static public function getLuceneIndexFile()
  {
    return sfConfig::get('sf_data_dir').'/kens.'.sfConfig::get('sf_environment').'.index';
  }  
  public function getForLuceneQuery($query,$country = null)
  {
    $hits = self::getLuceneIndex()->find($query);
 
    $pks = array();
    foreach ($hits as $hit)
    {
      $pks[] = $hit->pk;
    }
 
    if (empty($pks))
    {
      return array();
    }
     
    if($country and $country != 'WW')
    {
    $q = $this->createQuery('k')
      ->whereIn('k.id', $pks)
      ->limit(20)
      ->andWhere('k.pays = ?',$country);    
    }
    else
    {
    $q = $this->createQuery('k')
      ->whereIn('k.id', $pks)
      ->limit(20);    
    }
 
    $q = $this->addkensQuery($q);
 
    return $q->execute();
  }  
}

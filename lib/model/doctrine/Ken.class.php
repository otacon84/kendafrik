<?php

/**
 * Ken
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    kendafrik
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
class Ken extends BaseKen
{

  public function getDebattreName()
  {
    $debattre = Doctrine_Core::getTable('ken')->getDebattre();
    return $this->getDebattre() ? __($debattre[$this->getDebattre()]) : '';
  }                       
  public function getDeviseName()
  {
    $devise = Doctrine_Core::getTable('ken')->getDevise();
    return $this->getDevise() ? $devise[$this->getDevise()] : '';
  }                
  public function getEtatName()
  {
    $etat = Doctrine_Core::getTable('ken')->getEtat();
    return $this->getEtat() ? __($etat[$this->getEtat()]) : '';
  }           
  public function getTypeName()
  {
    $type = Doctrine_Core::getTable('ken')->getType();
    return $this->getType() ? __($type[$this->getType()]) : '';
  }        
  public function getPaysName()
  {
    $pays = Doctrine_Core::getTable('ken')->getPays();
    return $this->getPays() ? __($pays[$this->getPays()]) : '';
  }         

  public function save(Doctrine_Connection $conn = null)
  {
    $conn = $conn ? $conn : $this->getTable()->getConnection();
    $conn->beginTransaction();
    try
    {
      $ret = parent::save($conn);
  
      $this->updateLuceneIndex();
 
      $conn->commit();
 
       return $ret;
    }
    catch (Exception $e)
    {
      $conn->rollBack();
      throw $e;
    }
  }
  public function delete(Doctrine_Connection $conn = null)
  {
    $index = kenTable::getLuceneIndex();
 
    foreach ($index->find('pk:'.$this->getId()) as $hit)
    {
      $index->delete($hit->id);
    }
 
    return parent::delete($conn);
  }  
  public function updateLuceneIndex()
  {
    $index = KenTable::getLuceneIndex();
 
    // remove existing entries
    foreach ($index->find('pk:'.$this->getId()) as $hit)
    {
      $index->delete($hit->id);
    }
 
    $doc = new Zend_Search_Lucene_Document();
 
    // store ken primary key to identify it in the search results
    $doc->addField(Zend_Search_Lucene_Field::Keyword('pk', $this->getId()));
 
    // index ken fields
    $doc->addField(Zend_Search_Lucene_Field::UnStored('objet', $this->getObjet(), 'utf-8'));
    $doc->addField(Zend_Search_Lucene_Field::UnStored('type', $this->getType(), 'utf-8'));
    $doc->addField(Zend_Search_Lucene_Field::UnStored('etat', $this->getEtat(), 'utf-8'));
    $doc->addField(Zend_Search_Lucene_Field::UnStored('prix', $this->getPrix(), 'utf-8'));
    $doc->addField(Zend_Search_Lucene_Field::UnStored('debattre', $this->getDebattre(), 'utf-8'));
    $doc->addField(Zend_Search_Lucene_Field::UnStored('pays', $this->getPays(), 'utf-8'));
    $doc->addField(Zend_Search_Lucene_Field::UnStored('ville', $this->getVille(), 'utf-8'));    
 
    // add ken to the index
    $index->addDocument($doc);
    $index->commit();
  }  
}
<?php

/**
 * BaseKen
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $category_id
 * @property string $type
 * @property string $objet
 * @property string $etat
 * @property int $prix
 * @property string $devise
 * @property string $debattre
 * @property string $pays
 * @property string $ville
 * @property string $email
 * @property string $tel1
 * @property string $tel2
 * @property string $supplement
 * @property string $image
 * @property boolean $is_activated
 * @property Category $Category
 * 
 * @method integer  getCategoryId()   Returns the current record's "category_id" value
 * @method string   getType()         Returns the current record's "type" value
 * @method string   getObjet()        Returns the current record's "objet" value
 * @method string   getEtat()         Returns the current record's "etat" value
 * @method int      getPrix()         Returns the current record's "prix" value
 * @method string   getDevise()       Returns the current record's "devise" value
 * @method string   getDebattre()     Returns the current record's "debattre" value
 * @method string   getPays()         Returns the current record's "pays" value
 * @method string   getVille()        Returns the current record's "ville" value
 * @method string   getEmail()        Returns the current record's "email" value
 * @method string   getTel1()         Returns the current record's "tel1" value
 * @method string   getTel2()         Returns the current record's "tel2" value
 * @method string   getSupplement()   Returns the current record's "supplement" value
 * @method string   getImage()        Returns the current record's "image" value
 * @method boolean  getIsActivated()  Returns the current record's "is_activated" value
 * @method Category getCategory()     Returns the current record's "Category" value
 * @method Ken      setCategoryId()   Sets the current record's "category_id" value
 * @method Ken      setType()         Sets the current record's "type" value
 * @method Ken      setObjet()        Sets the current record's "objet" value
 * @method Ken      setEtat()         Sets the current record's "etat" value
 * @method Ken      setPrix()         Sets the current record's "prix" value
 * @method Ken      setDevise()       Sets the current record's "devise" value
 * @method Ken      setDebattre()     Sets the current record's "debattre" value
 * @method Ken      setPays()         Sets the current record's "pays" value
 * @method Ken      setVille()        Sets the current record's "ville" value
 * @method Ken      setEmail()        Sets the current record's "email" value
 * @method Ken      setTel1()         Sets the current record's "tel1" value
 * @method Ken      setTel2()         Sets the current record's "tel2" value
 * @method Ken      setSupplement()   Sets the current record's "supplement" value
 * @method Ken      setImage()        Sets the current record's "image" value
 * @method Ken      setIsActivated()  Sets the current record's "is_activated" value
 * @method Ken      setCategory()     Sets the current record's "Category" value
 * 
 * @package    kendafrik
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseKen extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ken');
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('objet', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('etat', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('prix', 'int', null, array(
             'type' => 'int',
             ));
        $this->hasColumn('devise', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('debattre', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('pays', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('ville', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('tel1', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('tel2', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('supplement', 'string', 4000, array(
             'type' => 'string',
             'length' => '4000',
             ));
        $this->hasColumn('image', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('is_activated', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Category', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}
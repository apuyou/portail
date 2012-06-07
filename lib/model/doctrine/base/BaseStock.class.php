<?php

/**
 * BaseStock
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $materiel_id
 * @property integer $etat_id
 * @property integer $nombre
 * @property Materiel $Materiel
 * @property Etat $Etat
 * 
 * @method integer  getMaterielId()  Returns the current record's "materiel_id" value
 * @method integer  getEtatId()      Returns the current record's "etat_id" value
 * @method integer  getNombre()      Returns the current record's "nombre" value
 * @method Materiel getMateriel()    Returns the current record's "Materiel" value
 * @method Etat     getEtat()        Returns the current record's "Etat" value
 * @method Stock    setMaterielId()  Sets the current record's "materiel_id" value
 * @method Stock    setEtatId()      Sets the current record's "etat_id" value
 * @method Stock    setNombre()      Sets the current record's "nombre" value
 * @method Stock    setMateriel()    Sets the current record's "Materiel" value
 * @method Stock    setEtat()        Sets the current record's "Etat" value
 * 
 * @package    simde
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseStock extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('stock');
        $this->hasColumn('materiel_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('etat_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             ));
        $this->hasColumn('nombre', 'integer', null, array(
             'type' => 'integer',
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Materiel', array(
             'local' => 'materiel_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasOne('Etat', array(
             'local' => 'etat_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}
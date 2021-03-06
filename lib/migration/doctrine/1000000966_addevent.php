<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addevent extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('event', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'asso_id' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 8,
             ),
             'type_id' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 8,
             ),
             'name' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 50,
             ),
             'description' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => NULL,
             ),
             'start_date' => 
             array(
              'type' => 'timestamp',
              'notnull' => true,
              'length' => 25,
             ),
             'end_date' => 
             array(
              'type' => 'timestamp',
              'notnull' => true,
              'length' => 25,
             ),
             'is_public' => 
             array(
              'type' => 'boolean',
              'default' => 1,
              'length' => 25,
             ),
             'is_weekmail' => 
             array(
              'type' => 'boolean',
              'default' => 0,
              'length' => 25,
             ),
             'place' => 
             array(
              'type' => 'string',
              'length' => NULL,
             ),
             'affiche' => 
             array(
              'type' => 'string',
              'length' => NULL,
             ),
             'summary' => 
             array(
              'type' => 'string',
              'length' => 150,
             ),
             'created_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             'updated_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'utf8_unicode_ci',
             'charset' => 'utf8',
             ));
    }

    public function down()
    {
        $this->dropTable('event');
    }
}
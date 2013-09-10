<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Adduseruv extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('user_uv', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'uv_id' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'user_semestre_id' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'note' => 
             array(
              'type' => 'string',
              'length' => 2,
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
        $this->dropTable('user_uv');
    }
}
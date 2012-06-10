<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version12 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('annonce', 'annonce_categorie_id_annonces_categorie_id', array(
             'name' => 'annonce_categorie_id_annonces_categorie_id',
             'local' => 'categorie_id',
             'foreign' => 'id',
             'foreignTable' => 'annonces_categorie',
             'onUpdate' => 'CASCADE',
             'onDelete' => '',
             ));
        $this->createForeignKey('annonce', 'annonce_departement_id_departement_id', array(
             'name' => 'annonce_departement_id_departement_id',
             'local' => 'departement_id',
             'foreign' => 'id',
             'foreignTable' => 'departement',
             'onUpdate' => 'CASCADE',
             'onDelete' => '',
             ));
        $this->createForeignKey('annonce', 'annonce_branche_id_branche_id', array(
             'name' => 'annonce_branche_id_branche_id',
             'local' => 'branche_id',
             'foreign' => 'id',
             'foreignTable' => 'branche',
             'onUpdate' => 'CASCADE',
             'onDelete' => '',
             ));
        $this->addIndex('annonce', 'annonce_categorie_id', array(
             'fields' => 
             array(
              0 => 'categorie_id',
             ),
             ));
        $this->addIndex('annonce', 'annonce_departement_id', array(
             'fields' => 
             array(
              0 => 'departement_id',
             ),
             ));
        $this->addIndex('annonce', 'annonce_branche_id', array(
             'fields' => 
             array(
              0 => 'branche_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('annonce', 'annonce_categorie_id_annonces_categorie_id');
        $this->dropForeignKey('annonce', 'annonce_departement_id_departement_id');
        $this->dropForeignKey('annonce', 'annonce_branche_id_branche_id');
        $this->removeIndex('annonce', 'annonce_categorie_id', array(
             'fields' => 
             array(
              0 => 'categorie_id',
             ),
             ));
        $this->removeIndex('annonce', 'annonce_departement_id', array(
             'fields' => 
             array(
              0 => 'departement_id',
             ),
             ));
        $this->removeIndex('annonce', 'annonce_branche_id', array(
             'fields' => 
             array(
              0 => 'branche_id',
             ),
             ));
    }
}
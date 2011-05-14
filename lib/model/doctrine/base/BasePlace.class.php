<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Place', 'doctrine');

/**
 * BasePlace
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $street
 * @property string $zipcode
 * @property string $city
 * @property string $country
 * @property string $phone
 * @property Doctrine_Collection $Profile
 * 
 * @method string              getStreet()  Returns the current record's "street" value
 * @method string              getZipcode() Returns the current record's "zipcode" value
 * @method string              getCity()    Returns the current record's "city" value
 * @method string              getCountry() Returns the current record's "country" value
 * @method string              getPhone()   Returns the current record's "phone" value
 * @method Doctrine_Collection getProfile() Returns the current record's "Profile" collection
 * @method Place               setStreet()  Sets the current record's "street" value
 * @method Place               setZipcode() Sets the current record's "zipcode" value
 * @method Place               setCity()    Sets the current record's "city" value
 * @method Place               setCountry() Sets the current record's "country" value
 * @method Place               setPhone()   Sets the current record's "phone" value
 * @method Place               setProfile() Sets the current record's "Profile" collection
 * 
 * @package    simde
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePlace extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('place');
        $this->hasColumn('street', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('zipcode', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('city', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('country', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('phone', 'string', 15, array(
             'type' => 'string',
             'length' => 15,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Profile', array(
             'local' => 'id',
             'foreign' => 'home_place'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}
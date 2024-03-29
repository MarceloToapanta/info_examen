<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ExaTubo', 'doctrine');

/**
 * BaseExaTubo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $ext_id_tubo
 * @property string $ext_nombre_color
 * @property string $ext_codigo_color
 * @property Doctrine_Collection $ExaTuboExamen
 * 
 * @method integer             getExtIdTubo()        Returns the current record's "ext_id_tubo" value
 * @method string              getExtNombreColor()   Returns the current record's "ext_nombre_color" value
 * @method string              getExtCodigoColor()   Returns the current record's "ext_codigo_color" value
 * @method Doctrine_Collection getExaTuboExamen()    Returns the current record's "ExaTuboExamen" collection
 * @method ExaTubo             setExtIdTubo()        Sets the current record's "ext_id_tubo" value
 * @method ExaTubo             setExtNombreColor()   Sets the current record's "ext_nombre_color" value
 * @method ExaTubo             setExtCodigoColor()   Sets the current record's "ext_codigo_color" value
 * @method ExaTubo             setExaTuboExamen()    Sets the current record's "ExaTuboExamen" collection
 * 
 * @package    info_examen
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseExaTubo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('exa_tubo');
        $this->hasColumn('ext_id_tubo', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('ext_nombre_color', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('ext_codigo_color', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 10,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('ExaTuboExamen', array(
             'local' => 'ext_id_tubo',
             'foreign' => 'ett_id_tubo'));
    }
}
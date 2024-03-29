<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ExaUsuario', 'doctrine');

/**
 * BaseExaUsuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $exa_id_usuario
 * @property string $exa_nombre_usuario
 * @property string $exa_login
 * @property string $exa_pass_usuario
 * @property integer $exa_permiso_usuario
 * 
 * @method integer    getExaIdUsuario()        Returns the current record's "exa_id_usuario" value
 * @method string     getExaNombreUsuario()    Returns the current record's "exa_nombre_usuario" value
 * @method string     getExaLogin()            Returns the current record's "exa_login" value
 * @method string     getExaPassUsuario()      Returns the current record's "exa_pass_usuario" value
 * @method integer    getExaPermisoUsuario()   Returns the current record's "exa_permiso_usuario" value
 * @method ExaUsuario setExaIdUsuario()        Sets the current record's "exa_id_usuario" value
 * @method ExaUsuario setExaNombreUsuario()    Sets the current record's "exa_nombre_usuario" value
 * @method ExaUsuario setExaLogin()            Sets the current record's "exa_login" value
 * @method ExaUsuario setExaPassUsuario()      Sets the current record's "exa_pass_usuario" value
 * @method ExaUsuario setExaPermisoUsuario()   Sets the current record's "exa_permiso_usuario" value
 * 
 * @package    info_examen
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseExaUsuario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('exa_usuario');
        $this->hasColumn('exa_id_usuario', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('exa_nombre_usuario', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 80,
             ));
        $this->hasColumn('exa_login', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('exa_pass_usuario', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('exa_permiso_usuario', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}
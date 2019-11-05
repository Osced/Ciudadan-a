<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosFixture
 *
 */
class UsuariosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'usuario_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombres' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'apellidos' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'username' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'token' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'paisNacimiento_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => '46', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'municipio_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pais_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => '46', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sector' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha_nacimiento' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'correo' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'genero' => ['type' => 'string', 'length' => 6, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'genero_' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'zona_horaria' => ['type' => 'decimal', 'length' => 5, 'precision' => 1, 'unsigned' => false, 'null' => false, 'default' => '-5.0', 'comment' => ''],
        'Activacion' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['usuario_id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'usuario_id' => 1,
                'nombres' => 'Lorem ipsum dolor sit amet',
                'apellidos' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'username' => 'Lorem ipsum dolor sit amet',
                'token' => 'Lorem ipsum dolor sit amet',
                'paisNacimiento_id' => 1,
                'municipio_id' => 1,
                'pais_id' => 1,
                'sector' => 'Lorem ipsum dolor sit amet',
                'fecha_nacimiento' => '2019-03-10',
                'correo' => 'Lorem ipsum dolor sit amet',
                'genero' => 'Lore',
                'genero_' => 1,
                'zona_horaria' => 1.5,
                'Activacion' => 1,
                'created' => '2019-03-10 16:08:07',
                'modified' => '2019-03-10 16:08:07'
            ],
        ];
        parent::init();
    }
}

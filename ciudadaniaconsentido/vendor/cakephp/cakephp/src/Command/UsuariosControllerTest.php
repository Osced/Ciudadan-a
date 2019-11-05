<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsuariosController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\UsuariosController Test Case
 */
class UsuariosControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Usuarios',
        'app.Barrios',
        'app.Comunas',
        'app.Municipios',
        'app.Departamentos',
        'app.Pais',
        'app.DocumentoTipos',
        'app.Grupos',
        'app.TrabajoBarrios',
        'app.TrabajoComunas',
        'app.TrabajoMunicipios',
        'app.TrabajoDepartamentos',
        'app.TrabajoPais',
        'app.PreferidoPais',
        'app.PreferidoDepartamentos',
        'app.PreferidoMunicipios',
        'app.PreferidoComunas',
        'app.PreferidoBarrios',
        'app.Colectivos',
        'app.Iniciativas',
        'app.ColectivosUsuarios',
        'app.IniciativasUsuarios'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

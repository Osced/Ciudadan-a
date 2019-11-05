<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

use Cake\Mailer\Email;
use Cake\Mailer\TransportFactory;

// Sample Mail configuration
// Prior to 3.7.0 use Email::configTransport()



class UserMailer extends Mailer
{
	private function buidTransport() {

		TransportFactory::setConfig('live', [
		    'host' => 'mail02.upb.edu.co',
            'port' => 587,
            'timeout' => 30,
            'username' => 'ciudadania-noreply@upb.edu.co',
            'password' => 'sIRVzA5FbBUwCO5JAXKg',
			'className' => 'Smtp',
			'tls' => true
		]);

	}
	public function activacion($usuario,$codigo)
    {
    	$this->buidTransport();
		if($codigo){
			$this
			->setTemplate('activacion','default')
			->transport('live')
            ->setTo($usuario->correo)
            ->setSubject('Ciudadanía Con Sentido - Activacion de cuenta')
			->emailFormat('html')
			->helpers(['Html','Text','Url'])
			->viewVars(['codigo' => $codigo]);
		}
		else
		{
			$this
			->setTemplate('activacion_error','default')
			->transport('live')
            ->setTo($usuario->correo)
            ->setSubject('Ciudadanía Con Sentido - Activacion de cuenta')
			->emailFormat('html')
			->helpers(['Html','Text','Url']);
		}
    }
	public function recuperacion($usuario,$codigo)
    {
    	$this->buidTransport();
		if($codigo){
			$this
			->setTemplate('recuperacion','default')
			->transport('live')
            ->setTo($usuario->correo)
            ->setSubject('Ciudadanía Con Sentido -  Recuperacion de contraseña')
			->emailFormat('html')
			->helpers(['Html','Text','Url'])
			->viewVars(['codigo' => $codigo]);
		}
		else
		{
			$this
			->setTemplate('recuperacion_error','default')
			->transport('live')
            ->setTo($usuario->correo)
            ->setSubject('Ciudadanía Con Sentido - Recuperacion de contraseña')
			->emailFormat('html')
			->helpers(['Html','Text','Url']);
		}
    }
	
    public function welcome($usuario)
    {
    	$this->buidTransport();
    	if($usuario){
	        $this
			->setTemplate('welcome', 'default')
			->transport('live')
	        ->setTo($usuario->correo)
	        ->setSubject('Bienvenido a Ciudadanía Con Sentido')
			->emailFormat('html');
		}
    }
	public function invitacion($usuario,$colectivo)
    {
    	$this->buidTransport();
    	if($usuario){
	        $this
			->setTemplate('invitacion', 'default')
			->transport('live')
	        ->setTo($usuario->correo)
	        ->setSubject('Inivitacion a ser parte de colectivo')
			->emailFormat('html')
			->viewVars(['usuario' => $usuario,'colectivo'=>$colectivo]);
		}
    }
}

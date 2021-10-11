<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;
use Cake\Event\EventInterface;
use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Homes',
                'action' => 'inicio'
            ],
            'loginRedirect' =>['controller' => 'Homes', 'action' => 'index'],
            'logoutRedirect' => ['controller' => 'Homes', 'action' => 'inicio'],
        ]);
        // Permite a ação display, assim nosso pages controller
        // continua a funcionar.
        $this->Auth->allow(['display']);
    }
    protected function layoutAdm():void{
        $this->viewBuilder()->setLayout('default_adm');
    }

    protected function getIdUserLogado(){
        $session = $this->request->getSession();
        $session = $this->request->getAttribute('session');
        return $session->read('Auth.User.id');
    }

    protected function getEmailUserLogado(){
        $session = $this->request->getSession();
        $session = $this->request->getAttribute('session');
        return $session->read('Auth.User.email');
    }
    protected function getExtensaoArquivo($nome){
        return  ".".substr($nome->getClientFilename(), -3);
     }

    protected function getMenssagem($msg){
        $mensagens = [
            "success" => "Salvo com Sucesso!",
            "error" => "Erro ao Salvar!",
            'successDelete'=>"Excluido com sucesso!",
            'errorDelete' => "Erro ao excluir!",
        ];
        return $mensagens[$msg];
    }
}

<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Event\EventInterface;

/**
 * Homes Controller
 *
 * @property \App\Model\Table\HomesTable $Homes
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomesController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        $this->Auth->allow(['inicio', 'curso']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->layoutAdm();
        $homes = $this->paginate($this->Homes);

        $this->set(compact('homes'));
    }
    public function inicio(){
        $cidades = $this->Homes->Cidades->find('all',array('conditions' => array('status' => 'Ativo')))->order(['texto' => 'ASC']);;
        $homes = $this->Homes->find('all',array('contain' => ['Cidades'], 'conditions' => array('homes.status' => 'Ativo')))->order(['ordem' => 'ASC']);
        $selectCidades = $this->Homes->newEmptyEntity();
        $select_cidade= 0;
        if ($this->request->is('post')) {
            $select_cidade = $this->request->getData()['cidade'];

        }
        $this->set(compact('selectCidades','homes','cidades','select_cidade'));
    }
    public function curso($id = null){
        $this->loadModel('Cursos');
        $curso = $this->Cursos->get($id, [
            'contain' => [],
        ]);
        $this->set(compact('curso'));
    }

    /**
     * View method
     *
     * @param string|null $id Home id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->layoutAdm();
        $home = $this->Homes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('home'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->layoutAdm();
        $home = $this->Homes->newEmptyEntity();
        if ($this->request->is('post')) {
            $home = $this->Homes->patchEntity($home, $this->request->getData());
            if ($this->Homes->save($home)) {
                $this->Flash->success(__($this->getMenssagem("success")));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__($this->getMenssagem("error")));
        }
        $cidades = $this->Homes->Cidades->find('list', ['keyField' => 'id', 'valueField' => 'texto','limit' => 200]);
        $this->set(compact('home','cidades'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Home id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->layoutAdm();
        $home = $this->Homes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $home = $this->Homes->patchEntity($home, $this->request->getData());
            if ($this->Homes->save($home)) {
                $this->Flash->success(__($this->getMenssagem("success")));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__($this->getMenssagem("error")));
        }
        $cidades = $this->Homes->Cidades->find('list', ['keyField' => 'id', 'valueField' => 'texto','limit' => 200]);
        $this->set(compact('home', 'cidades'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Home id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $home = $this->Homes->get($id);
        if ($this->Homes->delete($home)) {
            $this->Flash->success(__($this->getMenssagem("successDelete")));
        } else {
            $this->Flash->error(__($this->getMenssagem("errorDelete")));
        }

        return $this->redirect(['action' => 'index']);
    }
}

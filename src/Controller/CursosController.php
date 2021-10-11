<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Cursos Controller
 *
 * @property \App\Model\Table\CursosTable $Cursos
 * @method \App\Model\Entity\Curso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CursosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->layoutAdm();
        $cursos = $this->paginate($this->Cursos);

        $this->set(compact('cursos'));
    }

    /**
     * View method
     *
     * @param string|null $id Curso id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->layoutAdm();
        $curso = $this->Cursos->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('curso'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->layoutAdm();
        $curso = $this->Cursos->newEmptyEntity();
        if ($this->request->is('post')) {
            $curso = $this->Cursos->patchEntity($curso, $this->request->getData());
            if(!$curso->getErros){
                $arquivo = $this->request->getData("arquivo1");
                if ($arquivo->getClientFilename() != ""){
                    $name = "icone".$this->getIdUserLogado().time().$this->getExtensaoArquivo($arquivo);
                    $targetPath = WWW_ROOT."imagens".DS.$name;
                    if($name)
                        $arquivo->moveTo($targetPath);
                    $curso->icone = $name;
                }
                $imagem = $this->request->getData("arquivo2");
                if ($imagem->getClientFilename() != ""){
                    $name = $this->getIdUserLogado().time().$this->getExtensaoArquivo($imagem);
                    $targetPath = WWW_ROOT."imagens".DS.$name;
                    if($name)
                        $imagem->moveTo($targetPath);
                    $curso->imagem = $name;
                }
                
            }
            if ($this->Cursos->save($curso)) {
                $this->Flash->success(__($this->getMenssagem("success")));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__($this->getMenssagem("error")));
        }
        $this->set(compact('curso'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Curso id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->layoutAdm();
        $curso = $this->Cursos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $curso = $this->Cursos->patchEntity($curso, $this->request->getData());
            if(!$curso->getErros){
                $arquivo = $this->request->getData("arquivo1");
                if ($arquivo->getClientFilename() != ""){
                    $name = "icone".$this->getIdUserLogado().time().$this->getExtensaoArquivo($arquivo);
                    $targetPath = WWW_ROOT."imagens".DS.$name;
                    if($name)
                        $arquivo->moveTo($targetPath);
                    $curso->icone = $name;
                }
                $imagem = $this->request->getData("arquivo2");
                if ($imagem->getClientFilename() != ""){
                    $name = $this->getIdUserLogado().time().$this->getExtensaoArquivo($imagem);
                    $targetPath = WWW_ROOT."imagens".DS.$name;
                    if($name)
                        $imagem->moveTo($targetPath);
                    $curso->imagem = $name;
                }
                
            }
            if ($this->Cursos->save($curso)) {
                $this->Flash->success(__($this->getMenssagem("success")));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__($this->getMenssagem("error")));
        }
        $this->set(compact('curso'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Curso id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $curso = $this->Cursos->get($id);
        if ($this->Cursos->delete($curso)) {
            $this->Flash->success(__($this->getMenssagem("successDelete")));
        } else {
            $this->Flash->error(__($this->getMenssagem("errorDelete")));
        }

        return $this->redirect(['action' => 'index']);
    }
}

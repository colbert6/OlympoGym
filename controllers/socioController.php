<?php
class socioController extends controller{

    private $_socio;
    private $_tipo_socio;
    private $_id_padre;
    private $_id_hijo;

    public function __construct() {
        /*if (!$this->acceso(42)) {
            $this->redireccionar('error/access/5050');
        }*/
        parent::__construct();
        $this->_socio = $this->loadModel('socio');
        $this->_tipo_socio = $this->loadModel('tipo_socio');
        
        $this->_modulos->url = 'socio';
        $modulo= $this->_modulos->selecciona_filtro();
        $this->_id_padre=$modulo[0]['ID_PADRE'];
        $this->_id_hijo=$modulo[0]['ID_MODULO'];
    }
    

    public function index() {
        
        $this->_view->datos = $this->_socio->selecciona();
        $this->_view->setCss(array('jquery.dataTables'),true);// con el true es public
        $this->_view->setJs(array('jquery.dataTables.min','run_table'),true);
        $this->_view->titulo = 'Lista de Socios';
        $this->_view->renderizar('index',$this->_id_padre,$this->_id_hijo);
    }
    public function nuevo() {
        if (@$_POST['guardar'] == 1) {
            //$this->_socio->id_socio = $_POST['id_socio'];
            $this->_socio->id_tipo_socio = $_POST['id_tipo_socio'];
            $this->_socio->id_ubigeo = $_POST['id_ubigeo'];
            $this->_socio->dni = $_POST['dni'];
            $this->_socio->alias = $_POST['aliass'];
            $this->_socio->nombre = $_POST['nombre'];
            $this->_socio->apellido_paterno = $_POST['apellido_paterno'];
            $this->_socio->apellido_materno = $_POST['apellido_materno'];
            $this->_socio->email = $_POST['email'];
            $this->_socio->telefono = $_POST['telefono'];
            $this->_socio->celular = $_POST['celular'];
            $this->_socio->direccion = $_POST['direccion'];
            $this->_socio->fecha_nacimiento = $_POST['fecha_nacimiento'];
            $this->_socio->sexo = $_POST['sexo'];
            $this->_socio->estado_civil = $_POST['estado_civil'];
            $this->_socio->ocupacion = $_POST['ocupacion'];
            $this->_socio->grupo_sanguineo = $_POST['grupo_sanguineo'];
            $this->_socio->hobby = $_POST['hobby'];
            $this->_socio->nacionalidad = $_POST['nacionalidad'];
            $this->_socio->seguro_medico = $_POST['seguro_medico'];
            $this->_socio->observacion = $_POST['observacion'];
            $this->_socio->antecedente_medico = $_POST['antecedente_medico'];
            $this->_socio->codigo_postal = $_POST['codigo_postal'];
            $this->_socio->fax = $_POST['fax'];
            $this->_socio->numero_hijo = $_POST['numero_hijo'];
            $this->_socio->sector = $_POST['sector'];
            $this->_socio->grado_estudio = $_POST['grado_estudio'];
            $this->_socio->ingresos = $_POST['ingresos'];
            
            
            $this->_socio->inserta();
            $this->redireccionar('socio');
        }
        $this->_view->tipo_socio = $this->_tipo_socio->selecciona();
        $this->_view->titulo = 'Registrar Socio';
        $this->_view->action = BASE_URL . 'socio/nuevo';
        //$this->_view->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }
    public function vermas($id){
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('cat_empleado');
        }
    }
    public function editar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('cat_empleado');
        }
        
        if (@$_POST['guardar'] == 1) {
            $this->_socio->id_ambiente = $_POST['id_ambiente'];
            $this->_socio->descripcion = $_POST['descripcion'];
            $this->_socio->editar();
            
            $this->redireccionar('ambiente');
        }
        $this->_socio->id_ambiente = $this->filtrarInt($id);
        $this->_view->datos = $this->_socio->selecciona_filtro();
        
        $this->_view->titulo = 'Actualizar Ambiente';
        $this->_view->action = BASE_URL . 'ambiente/editar/'.$id;
        
        //$this->_vista->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }

    public function eliminar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('ambiente');
        }
        $this->_socio->id_ambiente = $this->filtrarInt($id);
        $this->_socio->elimina();
        $this->redireccionar('ambiente');
    }
    
}
?>
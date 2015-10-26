<?php
class empleadoController extends controller{

    private $_empleado;
    private $_cat_empleado;
    private $_perfil;
    private $_id_padre;
    private $_id_hijo;

    public function __construct() {
        /*if (!$this->acceso(42)) {
            $this->redireccionar('error/access/5050');
        }*/
        parent::__construct();
        $this->_empleado = $this->loadModel('empleado');
        $this->_cat_empleado = $this->loadModel('cat_empleado');
        $this->_perfil = $this->loadModel('perfil');
        
        $this->_modulos->url = 'empleado';
        $modulo= $this->_modulos->selecciona_filtro();
        $this->_id_padre=$modulo[0]['ID_PADRE'];
        $this->_id_hijo=$modulo[0]['ID_MODULO'];
    }
    

    public function index() {
        
        $this->_view->datos = $this->_empleado->selecciona();
        $this->_view->setCss(array('jquery.dataTables'),true);// con el true es public
        $this->_view->setJs(array('jquery.dataTables.min','run_table'),true);
        $this->_view->titulo = 'Lista de Empleado';
        $this->_view->renderizar('index',$this->_id_padre,$this->_id_hijo);
    }
    public function nuevo() {//34
        if (@$_POST['guardar'] == 1) { //35
            $this->_empleado->id_categoria_empleado = $_POST['id_categoria_empleado'];//36
            $this->_empleado->nombre = $_POST['nombre'];//37
            $this->_empleado->apellido_paterno = $_POST['apellido_paterno'];//38
            $this->_empleado->apellido_materno = $_POST['apellido_materno'];//39
            $this->_empleado->dni = $_POST['dni'];//40
            $this->_empleado->email = $_POST['email'];//41
            $this->_empleado->telefono = $_POST['telefono'];//42
            $this->_empleado->celular = $_POST['celular'];//43
            $this->_empleado->sexo = $_POST['sexo'];//44
            $this->_empleado->direccion = $_POST['direccion'];//45
            $this->_empleado->fecha_nacimiento = $_POST['fecha_nacimiento'];//46
            $this->_empleado->estado_civil = $_POST['estado_civil'];//47
            $this->_empleado->grupo_sanguineo = $_POST['grupo_sanguineo'];//48
            $this->_empleado->hobby = $_POST['hobby'];//49
            $this->_empleado->alias = $_POST['aliass'];//50
            $this->_empleado->nacionalidad = $_POST['nacionalidad'];//51
            $this->_empleado->seguro_medico = $_POST['seguro_medico'];//52
            $this->_empleado->observacion = $_POST['observacion'];//53
            $this->_empleado->antecedente_medico = $_POST['antecedente_medico'];//54
            $this->_empleado->codigo_postal = $_POST['codigo_postal'];//55
            $this->_empleado->numero_hijo = $_POST['numero_hijo'];//56
            $this->_empleado->sector = $_POST['sector'];//57
            $this->_empleado->grado_estudio = $_POST['grado_estudio'];//58
            $this->_empleado->tipo_vivienda = $_POST['tipo_vivienda'];//59
            $this->_empleado->anio_contratacion = $_POST['anio_contratacion'];//60
            $this->_empleado->usuario = $_POST['usuario'];//61
            $this->_empleado->clave = $_POST['clave'];//62
            $this->_empleado->id_perfil_usuario = $_POST['id_perfil_usuario'];//63
            
            
            $this->_empleado->inserta();
            $this->redireccionar('empleado');
        }
        $this->_view->isReadOnly = false;
        $this->_view->cat_empleado = $this->_cat_empleado->selecciona();
        //print_r($this->_view->cat_empleado);  exit;
        $this->_view->perfil = $this->_perfil->selecciona();
        //$this->_view->datos = $this->_empleado->selecciona_filtro();
        $this->_view->titulo = 'Registrar Empleado';

        $this->_view->action = BASE_URL . 'empleado/nuevo';
        //$this->_view->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }
    public function vermas($id){
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('empleado');
        }
        
        $this->_empleado->id_empleado = $this->filtrarInt($id);
        $this->_view->isReadOnly = true;
        $this->_view->cat_empleado = $this->_cat_empleado->selecciona();
        $this->_view->perfil = $this->_perfil->selecciona();
        $this->_view->datos = $this->_empleado->selecciona_filtro();

        $this->_view->titulo = 'Datos del Empleado';
        $this->_view->action = BASE_URL . 'empleado/vermas/'.$id;

        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
        

    }
    public function editar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('empleado');
        }
        
        if (@$_POST['guardar'] == 1) {//103
            $this->_empleado->id_empleado = $_POST['id_empleado'];//104
            $this->_empleado->id_categoria_empleado = $_POST['id_categoria_empleado'];//105
            $this->_empleado->nombre = $_POST['nombre'];//106
            $this->_empleado->apellido_paterno = $_POST['apellido_paterno'];//107
            $this->_empleado->apellido_materno = $_POST['apellido_materno'];//108
            $this->_empleado->dni = $_POST['dni'];//109
            $this->_empleado->email = $_POST['email'];//110
            $this->_empleado->telefono = $_POST['telefono'];//111
            $this->_empleado->celular = $_POST['celular'];//112
            $this->_empleado->sexo = $_POST['sexo'];//113
            $this->_empleado->direccion = $_POST['direccion'];//114
            $this->_empleado->fecha_nacimiento = $_POST['fecha_nacimiento'];//115
            $this->_empleado->estado_civil = $_POST['estado_civil'];//116
            $this->_empleado->grupo_sanguineo = $_POST['grupo_sanguineo'];//117
            $this->_empleado->hobby = $_POST['hobby'];//118
            $this->_empleado->alias = $_POST['aliass'];//119
            $this->_empleado->nacionalidad = $_POST['nacionalidad'];//120
            $this->_empleado->seguro_medico = $_POST['seguro_medico'];//121
            $this->_empleado->observacion = $_POST['observacion'];//122
            $this->_empleado->antecedente_medico = $_POST['antecedente_medico'];//123
            $this->_empleado->codigo_postal = $_POST['codigo_postal'];//124
            $this->_empleado->numero_hijo = $_POST['numero_hijo'];//125
            $this->_empleado->sector = $_POST['sector'];//126
            $this->_empleado->grado_estudio = $_POST['grado_estudio'];//127
            $this->_empleado->tipo_vivienda = $_POST['tipo_vivienda'];//128
            $this->_empleado->anio_contratacion = $_POST['anio_contratacion'];//129
            $this->_empleado->usuario = $_POST['usuario'];//130
            $this->_empleado->clave = $_POST['clave'];//131
            $this->_empleado->id_perfil_usuario = $_POST['id_perfil_usuario'];//132
            
            $this->_empleado->editar();
            
            $this->redireccionar('empleado');
        }
        $this->_view->isReadOnly = false;
        
        $this->_empleado->id_empleado = $this->filtrarInt($id);
        $this->_view->cat_empleado = $this->_cat_empleado->selecciona();
        $this->_view->perfil = $this->_perfil->selecciona();
        $this->_view->datos = $this->_empleado->selecciona_filtro();
        
        $this->_view->titulo = 'Actualizar Empleado';
        $this->_view->action = BASE_URL . 'empleado/editar/'.$id;
        
        //$this->_vista->setJs(array('funciones_form'));
        $this->_view->renderizar('form',$this->_id_padre,$this->_id_hijo);
    }

    public function eliminar($id) {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('empleado');
        }
        $this->_empleado->id_empleado = $this->filtrarInt($id);
        $this->_empleado->elimina();
        $this->redireccionar('empleado');
    }
    
}
?>

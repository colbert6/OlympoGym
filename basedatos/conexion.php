<?php
class conexion extends PDO{

    protected static $instancia = null;
    public static $_servidor = null;
    
    public function __construct() {
        if (!is_null(self::$instancia)) {
            return self::$instancia;
        }
        $file = 'config.ini';
        @$settings = parse_ini_file($file, TRUE);
        $dsn = $settings['database']['driver'] . ':dbname=' . $settings['database']['basedatos'] . '; host=' . $settings['database']['host'] . '; port=' . $settings['database']['puerto'];
        self::$_servidor=$settings['database']['driver'];
        $user = $settings['database']['usuario'];
        $password = trim($settings['database']['password']);
        try {
            self::$instancia = parent::__construct($dsn, $user, $password);
            return self::$instancia;
        } catch (PDOException $e) {
                      
            
            set_time_limit(20);
            if(isset($_POST['guardar'])){
            if ($_POST['guardar'] == 1) {
                $host = $_POST['host'];
                $comando = "ping " . $host . " -n 5";
                $salida = shell_exec($comando);
                if (strstr($salida, 'unreachable') || strstr($salida, 'failed') || strstr($salida, 'could not find host')) {//0 = error, 1 = bien
                    $err = 0;
                } else {
                    $err = 1;
                }
                if ($err == 1) {
                    $driver = $_POST['sgbd'];
                    $user = $_POST['usuario'];
                    $password = $_POST['clave'];
                    $port = $_POST['puerto'];
                    $dbname = $_POST['basedatos'];
                    $archivo = '';
                    if ($driver == 'oci') {
                        $archivo = 'OCI';
                    } else {
                        $archivo = 'PDO';
                    }
                    $configuracion = array("archivo" => $archivo, "driver" => $driver, "usuario" => $user, "password" => $password, "host" => $host,
                        "puerto" => $port, "basedatos" => $dbname);
                    $fp = fopen(ROOT . DS . "basedatos" . DS . "config.ini", "w");
                    fwrite($fp, "[database]");
                    $fp = fopen(ROOT . DS . "basedatos" . DS . "config.ini", "a+");
                    foreach ($configuracion as $key => $valor) {
                        fwrite($fp, "\n" . $key . " = " . $valor);
                    }
                    fclose($fp);
                    //            conexion::conexionSingleton();
                    echo '<script>
                                alert("Datos GRABADOS Correctamente");
                                window.location="' . BASE_URL . '";
                            </script>';
                } else {
                    echo '<script>
                                alert("No se pudo obtener respuesta del HOST indicado. Los datos seran descartados.");
                                window.location="' . BASE_URL . '";
                        </script>';
                }
            }
            }
            ?>

            <html xmlns="http://www.w3.org/1999/xhtml">
                <head>
                    <link href="<?php echo BASE_URL ?>public/css/bootstrap.css" rel="stylesheet">
                    <script type="text/javascript">
                        alert("¡Conexion Fallida!. El sistema se inicializara, los datos que hayan sido guardados no se perderan.");

                    </script>
                </head>
                <body>
                    <div class="row" style="width: 800; margin:0 auto;">
                        <img src="<?php echo BASE_URL ?>public/img/logo.png" height="100" width="800" />
                    </div>
                     <div class="row" style="width: 800; margin:0 auto;">
                         <h2>ES NECESARIO LLENAR ALGUNOS DATOS</h2>
                         <h4>Para mayor informacion contacte con la FISI</h4>
                    </div>
                    <div class="row" style="width: 800; margin:1% auto ;">
                        <form method="post" action="#"  class="form-horizontal" role="form">
                        <fieldset>    
                            <input type="hidden" name="guardar" id="guardar" value="1"/>
                            <div class="form-group">
                                <label for="sgbd" class="col-lg-4 control-label">SGBD: </label>
                                <div class="col-lg-4">
                                  <select placeholder="Seleccione..." class="form-control" name="sgbd" required id="sqbd">
                                            <option></option>
                                            <option value="mysql">MySQL</option>
                                            <option value="pgsql">PostgreSQL</option>
                                            <option value="mssql">SQL Server</option>
                                            <option value="oci">Oracle</option>
                                        </select>    
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="usuario" class="col-lg-4 control-label"> Usuario: </label>
                                <div class="col-lg-4">
                                <input type="text" placeholder="Ingrese usuario" required class="form-control" name="usuario" value="" />
                                </div> 
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-lg-4 control-label"> Clave: </label>
                                <div class="col-lg-4">
                                <input type="password" placeholder="Ingrese contrase&ntilde;a" class="form-control" name="clave" value="" />
                                </div> 
                            </div>
                            <div class="form-group">
                                <label for="host" class="col-lg-4 control-label"> Host: </label>
                                <div class="col-lg-4">
                                <input type="text" placeholder="Ingrese host" class="form-control" required name="host" value="" />
                                </div> 
                            </div> 
                            <div class="form-group">
                                <label for="puerto" class="col-lg-4 control-label"> Puerto: </label>
                                <div class="col-lg-4">
                                <input type="text" placeholder="Ingrese puerto" class="form-control" required name="puerto" value="" />
                                </div> 
                            </div>
                            <div class="form-group">
                                <label for="basedatos" class="col-lg-4 control-label"> Base de Datos: </label>
                                <div class="col-lg-4">
                                <input type="text" placeholder="Ingrese nombre bd" class="form-control" required name="basedatos" value="" />
                                </div> 
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 control-label"> </label>
                                 <div class="col-lg-2">
                                   <button type="submit" class="btn btn-success" >Guardar</button>
                                </div>
                                <div class="col-lg-4">
                                    <button type="button" class="btn btn-danger" onclick="window.location = '<?php echo BASE_URL ?>'">Cancelar</button>
                                
                                </div>
                            </div>    
                                
                                
                        </fieldset>    
                        </form>
                    </div>
                </body>
            </html>

            <?php
            die();
        }
    }

    public static function __callStatic($name, $args) {
        $callback = array(self :: conexionSingleton(), $name);
        return call_user_func_array($callback, $args);
    }

    public static function get_servidor() {
        switch (self::$_servidor) {
            case 'mssql': $_servidor = "SQL Server ";
                break;
            case 'mysql': $_servidor = "MySql ";
                break;
            case 'pgsql': $_servidor = "PostgreSQL";
                break;
            case 'oci': $_servidor = "Oracle";
                break;
            default :
                echo "<script>alert('No existe este servidor');
                            window.location='/localhost/';
                        </script>";
                break;
        }
        return $_servidor;
    }

}

?>

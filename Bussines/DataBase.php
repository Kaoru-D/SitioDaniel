<php include_once("../Entidades/Configuracion.php"); include_once("../DataAccess/ConfiguracionData.php"); $_POST["txtDireccionDB"]; $_POST["txtNombreDB"]; $_POST["txtUsuario"]; $_POST["PsContrasenia"]; $objetoClassConfiguracionEntidad=new clConfigEntidad(); $objetoClassConfiguracionEntidad-setearServidor =$_POST["txtDireccionDB"];
$objetoClassConfiguracionEntidad->setearBaseDatos =$_POST["txtNombreDB"];
$objetoClassConfiguracionEntidad->setearUsuario =$_POST["txtUsuario"];
    $objetoClassConfiguracionEntidad->setearClave =$_POST["PsContrasenia"];

    $objetoClassConfiguracion = new clsConfiguracion();
    $objetoClassConfiguracion->actualizarArchivo($objetoClassConfiguracionEntidad);
    ?>
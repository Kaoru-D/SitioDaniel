<?php
include_once('../Entidades/usuario.php');
include_once('../DataAccess/usuariosData.php');
if (isset($_POST['txtOperacion'])) {
  $operacion = $_POST['txtOperacion'];
  if ($operacion === "Registrar") {
    $objClsUsuarioData = new clsUsuariosData();
    if ($objClsUsuarioData->registrarUsuario(ObtenerDatosFormulario())) {
      $mensaje = "Operación ejecutada correctamente";
      header('Location:../pages/?MsgType=Ext&MsgValue' . urldecode($mensaje));
    } else {
      $objClsUsuarioEntidad = new clsUsuariosData();
      $resultado = $objClsUsuarioEntidad->listarUsuarios();
      if ($resultado != false) {
        echo '<div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Consulta de Usuarios</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                          <thead>
                          <tr>
                            <th>Nombre de Usuario</th>
                            <th>Nombre Completo</th>
                            <th>Email</>
                            <th>Cedula</th>
                            <th>Celular</th>
                            <th>Dirección</th>
                            <th>Perfil de Usuario</th>
                            <th>Estado de Usuario</th>
                          </tr>
                          </thead> 
                          <tbody>';
        foreach ($resultado as $fila) {
          echo '<tr>';
          for ($i = 0; $i < 8; $i++) {
            echo '<td>' . $fila[$i] . '</td>';
            if ($i === 7) {
              echo '<td>';
              if ($fila[$i] === '1') {
                echo 'Activo';
              } else {
                echo 'Inactivo';
              }
              echo '</td>';
            } elseif ($i === 4) {
              echo '<td>';
              if ($fila[$i] === '1') {
                echo 'Inventario';
              }
              if ($fila[$i] === '2') {
                echo 'Vendedor';
              }
              if ($fila[$i] === '3') {
                echo 'Admin';
              }
              if ($fila[$i] === '4') {
                echo 'Super Usuario';
              }
              echo '</td>';
            }
          }
        }
        echo '</tbody> </table> <div></div>';
      }
    }
  } elseif ($operacion === "Login") {
    $objClsUsuarioData = new clsUsuariosData();
    $objClsUsuarioEntidad = new clsUsuarioEntidad();
    if (isset($_POST['txtUsuario'])) {
      $objClsUsuarioEntidad->setearNombreUsuario($_POST['txtUsuario']);
      if (isset($_POST['txtClave'])) {
        $objClsUsuarioEntidad->setearPassUsuario($_POST['txtClave']);
        $resultado = $objClsUsuarioData->autenticarUsuario($objClsUsuarioEntidad);
        if ($resultado) {
          $mensaje = "Verifica los datos... <br>Intenta nuevamente";
          header('Location:../?MsgType=Err&MsgValue' . urldecode($mensaje));
        } else {
          $mensaje = "Bienvenido";
          header('Location:../pages/?MsgType=Ext&MsgValue' . urldecode($mensaje));
        }
      } else {
        EnviarMensajeError();
      }
    } else {
      EnviarMensajeError();
    }
  } else {
  }
}
function EnviarMensajeError()
{
  $mensaje = "Ocurrió un error en la operación ...</br>Intenta nuevamente";
  header('Location:../pages?MsgType=Err&MsgValue=' . urlencode($mensaje));
}
function ObtenerDatosFormulario()
{
  $objClsUsuarioEntidad = new clsUsuarioEntidad();
  if (isset($_POST['txtNombreUsuario'])) {
    $objClsUsuarioEntidad->setearNombreUsuario($_POST['txtNombreUsuario']);
    if (isset($_POST['txtPrimerNombre'])) {
      $objClsUsuarioEntidad->setearPrimerNombre($_POST['txtPrimerNombre']);
      if (isset($_POST['txtSegundoNombre'])) {
        $objClsUsuarioEntidad->setearSegunNombre($_POST['txtSegundoNombre']);
        if (isset($_POST['txtPrimerApellido'])) {
          $objClsUsuarioEntidad->setearPrimerApellido($_POST['txtPrimerApellido']);
          if (isset($_POST['txtSegundoApellido'])) {
            $objClsUsuarioEntidad->setearSegundoApellido($_POST['txtSegundoApellido']);
            if (isset($_POST['txtEmail'])) {
              $objClsUsuarioEntidad->setearEmail($_POST['txtEmail']);
              if (isset($_POST['txtCedula'])) {
                $objClsUsuarioEntidad->setearIdentificacion($_POST['txtCedula']);
                if (isset($_POST['txtCelular'])) {
                  $objClsUsuarioEntidad->setearCelular($_POST['txtCelular']);
                  if (isset($_POST['txtDireccion'])) {
                    $objClsUsuarioEntidad->setearDireccion($_POST['txtDireccion']);
                    if (isset($_POST['txtClave'])) {
                      $objClsUsuarioEntidad->setearPassUsuario($_POST['txtClave']);
                      if (isset($_POST['txtClave'])) {
                        $objClsUsuarioEntidad->setearPassUsuario($_POST['txtClave']);
                        if (isset($_POST['cmbPerfil'])) {
                          $objClsUsuarioEntidad->setearPerfilUsuario($_POST['cmbPerfil']);
                          return $objClsUsuarioEntidad;
                        } else {
                          EnviarMensajeError();
                        }
                      } else {
                        EnviarMensajeError();
                      }
                    } else {
                      EnviarMensajeError();
                    }
                  } else {
                    EnviarMensajeError();
                  }
                } else {
                  EnviarMensajeError();
                }
              } else {
                EnviarMensajeError();
              }
            } else {
              EnviarMensajeError();
            }
          } else {
            EnviarMensajeError();
          }
        } else {
          EnviarMensajeError();
        }
      } else {
        EnviarMensajeError();
      }
    } else {
      EnviarMensajeError();
    }
  } else {
    EnviarMensajeError();
  }
}

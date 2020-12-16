<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('email');
    $this->load->helper(array('form'));
    $this->load->library('form_validation');
    $this->load->library('session');
  }

  public function index()
  {
    $this->load->view('landing.view.php');
  }



  public function gracias()
  {
    $this->load->view('gracias.view.php');
  }


  public function aviso()
  {
    $this->load->view('aviso.php');
  }

  public function enviar()
  {

    if (empty($_POST))
      redirect('/');
    $datos = $_POST;
    $datos = $this->limpiarDatos($datos);

    if (!$this->validarDatos($datos))
      redirect("/");

    $this->enviarCorreo($_POST);
    redirect("gracias");
  }
  // VALIDAR DATOS

  private function validarDatos()
  {
    $this->form_validation->set_rules('nombre', 'nombre', 'required', array(
      'required' => 'El campo nombre es requerido'
    ));
    if ($_POST['lp'] === 'depas') {
      $this->form_validation->set_rules('telefono', 'telefono', 'required', array(
        'required' => 'El campo ciudad es requerido'
      ));
    } else {
      $this->form_validation->set_rules('empresaSize', 'empresaSize', 'required', array(
        'required' => 'El campo ciudad es requerido'
      ));
    }
    $this->form_validation->set_rules('correo', 'correo', 'required|valid_email', array(
      'required' => 'El campo correo es requerido',
      'valid_emai' => 'Debes ingresar un correo valido'
    ));


    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('error', validation_errors('<li>', '</li>'));
      return false;
    } else {
      return true;
    }
  }

  private function limpiarDatos($datos)
  {

    foreach ($datos as $dato => $value) {
      $datos[$dato] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
      $datos[$dato] = filter_var($value, FILTER_SANITIZE_URL);
      $datos[$dato] = trim($value);
      $datos[$dato] = htmlspecialchars($value);
    }

    return $datos;
  }

  // ENVIAR CORREOS
  private function enviarCorreo($datos)
  {
    $mensaje = "<p>Tienes un nuevo contacto </p>";
    $mensaje .= "<ul>";

    $campos = array("nombre", "telefono", "correo", "empresaSize", "utm_source", "utm_medium", "utm_campaign", "utm_term", "utm_content");


    foreach ($campos as $value) {
      if ($value == 'empresaSize') {
        $mensaje .= "<li>Tamaño de la empresa: $datos[$value]</li>";
      } else {
        $mensaje .= "<li>$value: $datos[$value]</li>";
      }
    }
    $mensaje .= "</ul>";

    $configMail =  array(
      'charset' => 'utf-8',
      'mailtype' => 'html'
    );
    $this->email->initialize($configMail);
    $this->email->from('noreplay@anks.mx', 'Notificación');

    $this->email->to('pablocruzmkt@gmail.com,ventas@anks.mx');

    $this->email->cc('luis.mendoza.0896@gmail.com');
    $this->email->subject("Nueva contacto");
    $this->email->message($mensaje);
    $this->email->send();
  }

  // debugMail

  public function debugMail()
  {

    $configMail =  array(
      'charset' => 'utf-8',
      'mailtype' => 'html'
    );
    $this->email->initialize($configMail);
    $this->email->from('noreplay@anks.mx', 'Notificación');
    $this->email->to('luis.mendoza@olozfera.com');
    $this->email->subject("test");
    $this->email->message("<h1>Prueba áéíóú@ñ</h1>");
    $this->email->send();
  }

  // VALIDAR RECAPTCHA
  public function validarRecaptcha($post)
  {

    if (isset($post['g-recaptcha-response']) and !empty($post['g-recaptcha-response'])) {
      $captcha = $post['g-recaptcha-response'];
      $key  = "6LcH96UZAAAAAFSLcr-hGd1XQ4c0pF22s0a7KXZp";

      $ch = curl_init("https://www.google.com/recaptcha/api/siteverify?secret=" . $key . "&response=$captcha");

      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $verify = curl_exec($ch);

      $respuesta = json_decode($verify);

      if ($respuesta->success == true)
        return true;
    }

    return false;
  }
}


/* End of file Landing.php */
/* Location: ./application/controllers/Landing.php */
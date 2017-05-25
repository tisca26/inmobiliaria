<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller
{
    public function index()
    {
        $this->cargar_idioma->carga_lang('contacto/contacto_index');
        $this->load->view('contacto/contacto_index');
    }

    public function enviar_correo()
    {
        session_cache_limiter('nocache');
        header('Expires: ' . gmdate('r', 0));

        header('Content-type: application/json');
        require_once(APPPATH . 'libraries/phpmailer/PHPMailerAutoload.php');

        $email_recipient = 'gerardo.tiscareno@oficinas-virtuales-amuebladas.com';
        $usr_mail = 'gerardo.tiscareno@oficinas-virtuales-amuebladas.com';
        $pass_mail = 'Bianconeri26!Pinturicchio10';

        $debug = 2;

        $subject = 'Solicitud de información';
        $nombre = $this->input->post('name');
        $email = $this->input->post('email');
        $tel = $this->input->post('telefono');
        $mensaje = $this->input->post('message');

        $mail = new PHPMailer();
        try {

            $mail->SMTPDebug = $debug;                                 // Debug Mode
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            // Step 2 (Optional) - If you don't receive the email, try to configure the parameters below:

            $mail->IsSMTP();                                         // Set mailer to use SMTP
            $mail->Host = 'mail.oficinas-virtuales-amuebladas.com';                       // Specify main and backup server
            $mail->SMTPAuth = true;                                  // Enable SMTP authentication
            $mail->Username = $usr_mail;                    // SMTP username
            $mail->Password = $pass_mail;                              // SMTP password
            $mail->SMTPSecure = 'ssl';                               // Enable encryption, 'ssl' also accepted
            $mail->Port = 465;                                       // TCP port to connect to

            $mail->AddAddress($email);                                   // Add another recipient

            //$mail->AddAddress('person2@domain.com', 'Person 2');     // Add a secondary recipient
            //$mail->AddCC('person3@domain.com', 'Person 3');          // Add a "Cc" address.
            //$mail->AddBCC('person4@domain.com', 'Person 4');         // Add a "Bcc" address.

            $mail->SetFrom($email, $nombre);
            $mail->AddReplyTo($email_recipient, "Gerry");

            $mail->IsHTML(true);                                  // Set email format to HTML

            $mail->CharSet = 'UTF-8';

            $mail->Subject = $subject;
            $mail->Body = $mensaje;

            $mail->Send();
            $arrResult = array('response' => 'success');

        } catch (phpmailerException $e) {
            $arrResult = array('response' => 'error', 'errorMessage' => $e->errorMessage());
        } catch (Exception $e) {
            $arrResult = array('response' => 'error', 'errorMessage' => $e->getMessage());
        }

        if ($debug == 0) {
            echo json_encode($arrResult);
        }
    }
}
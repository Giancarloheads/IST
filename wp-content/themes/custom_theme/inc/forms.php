<?php

add_action('rest_api_init', function () {

    register_rest_route(
        '/wp/v2',
        '/contact-form',
        array(
            'methods' => array('POST', 'GET'),
            'callback' => 'send_contact',
            'permission_callback' => function () {
                return true;
            }
        )
    );

    register_rest_route(
        '/wp/v2',
        '/cv-form',
        array(
            'methods' => 'POST',
            'callback' => 'cv_send',
            'permission_callback' => function () {
                return true;
            }
        )
    );
});


function dyname_contact_form()
{
    global $messages;
    $data = $_POST;
    $messages = $_POST;
    $messages['uri'] = $_SERVER['SERVER_NAME'];
    $success_message = 'La richiesta è stata inviata con successo!';
    $missing_data_message = 'Compila tutti i campi!';
    $error_message = 'Ops! C\'è stato un errore! Riprovare più tardi!';
    $recaptcha_message = "C'è stato un errore nell'elaborazione della richiesta. Riprovare più tardi.";
    if (true) {
        $messages['recaptcha_status'] = 'ReCAPTCHA verification passed!';
        if (isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['mail']) && isset($_POST['phone'])) {
            try {
                $name = $data['name'] . ' ' . $data['lastname'];
                $company = $data['company'];
                $mail = $data['mail'];
                $phone = $data['phone'];
                $privacy = $data['privacy'] == 'true' ? 'Sì' : 'No';
                $message = "<h1 style=\"margin-bottom: 50px;\">Richiesta di informazioni</h1>
					<p style=\"margin-bottom: 30px;\">&Egrave; stata ricevuta una richiesta di contatto, di seguito i dettagli:</p>
					<table style=\"text-align: left; max-width: 500px; margin-bottom: 50px\">
					<tr>
					<th style=\"width: 170px;\">Nome</th>
					<td>$name</td>
					</tr>
					<tr>
					<th style=\"width: 170px;\">Email</th>
					<td>$mail</td>
					</tr>
					<tr>
					<th style=\"width: 170px;\">Telefono</th>
					<td>$phone</td>
					</tr>
					<tr>
					<th style=\"width: 170px;\">Azienda</th>
					<td>$company</td>
					</tr>
					</table>
					<table style=\"text-align: left; margin-top: 50px\">
					<tr>
					<th style=\"width: 170px;\">Privacy</th>
					<td>Accettata</td>
					</tr>
					</table>";
                /* Set the mail sender. */
                $headers = '';
                $headers .= "MIME-Version: 1.0 \r\n";
                $headers .= "Content-type: text/html; charset=\"UTF-8\" \r\n";
                $headers .= "From: Landing page Dyname \r\n";
                $headers .= "Reply-To: $name <$mail> \r\n";
                $headers_2 = '';
                $headers_2 .= "MIME-Version: 1.0 \r\n";
                $headers_2 .= "Content-type: text/html; charset=\"UTF-8\" \r\n";
                $headers_2 .= "From: Dyname \r\n";
                $headers_2 .= "Reply-To: <noreply@rrgroup.it> \r\n";
                $ty_message = '<head><style>
				.title{font-size:40px;} .par{font-size:22px;}.btn{font-size:15px;}.footer{font-size:15px;}
				@media(max-width:619px){.title{font-size: 30px;} .par{font-size:20px;}.btn{font-size:12px;}.footer{font-size:12px;}}
				@media(max-width:450px){.title{font-size: 30px;} .par{font-size:18px;}.btn{font-size:12px;}.footer{font-size:12px;}}
				</style></head><section style="margin:0;padding:2vw;"><section style="font-family:Arial, Helvetica, sans-serif;padding:0;margin:0;"><div style="padding-bottom:55px;margin:auto;"><img style="width:200px;height:auto;" src="https://www.rrgroup.it/mail-logo.png" alt=""></div><div class="title" style="font-family:Arial, Helvetica, sans-serif;font-weight:600;line-height:1.1;color:#0071CE;">Grazie per aver <br> compilato il form!</div><div class="par" style="padding-top:30px;padding-bottom:30px;color:#0071CE">Verrai ricontattato al più presto da un nostro specialista per ricevere una consulenza energetica su misura per te.</div></div><div class="footer" style="padding-top:10px;color:#0071CE;font-family:Arial, Helvetica, sans-serif;font-weight:400"><strong>Dyname S.r.l</strong> <a style="text-decoration:none!important;"  target="_blank" href="https://maps.google.com/?q=Vicolo Cadore 45 31020 San Vendemiano, TV"> <br>Vicolo Cadore 45 <br>31020 San Vendemiano, TV <br> <a style="text-decoration:none!important;color:#0071CE" href="tel:0423095682">T 0423 095682</a> <br><a href="mailto:info@dyname.it" style="text-decoration:none!important; ">info@dyname.it</a></div></section></section>';
                $to = "info@dyname.it";
                $to_2 = $mail;
                $subject = 'Richiesta Contatto - Dyname';
                $subject_2 = 'Grazie della richiesta!';
                try {
                    $mail_sent = wp_mail($to, $subject, $message, $headers);
                    $ty_mail = wp_mail($to_2, $subject_2, $ty_message, $headers_2);
                    $messages['mail_response'] = $mail_sent;
                    $messages['ty_mail'] = $ty_mail;
                    if ($mail_sent) {
                        $messages['type'] = 'success';
                        $messages['msg'] = $success_message;
                        return $messages;
                    } else {
                        $messages['type'] = 'error';
                        $messages['msg'] = $error_message;
                        return $messages;
                    }
                } catch (Exception $e) {
                    $messages['type'] = 'error';
                    $messages['msg'] = $e->errorMessage();
                    return $messages;
                }
            } catch (Exception $e) {
                $messages['type'] = 'error';
                $messages['msg'] = $e->errorMessage();
                return $messages;
            }
        } else {
            $messages['type'] = 'error';
            $messages['msg'] = $missing_data_message;
            return $messages;
        }
    } else {
        $messages['type'] = 'recaptcha';
        $messages['msg'] = $recaptcha_message;
        return $messages;
    }
}

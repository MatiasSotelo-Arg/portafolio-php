<?php
    if(isset($_POST['enviar'])) {

        if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['mensaje']) ) {
            $nombre = $_POST['nombre'];
            $asunto = $_POST['asunto'];
            $email = $_POST['email'];
            $mensaje = $_POST['mensaje'];

            $emailDestinatario = 'matysotelo07@gmail.com';

            $header = "From: $nombre <$email>" . "\r\n";
            $header.= "Reply-To: $email". "\r\n";
            $header.= "X-Mailer: PHP/". phpversion();
            // primero al correo que se le envia
            $mail = @mail($emailDestinatario,$asunto,$mensaje,$header);

            if($mail) {
                echo " <div class='alerta'> 
                            <h3>Email enviado exitosamente! ✔</h3>
                       </div>
                      ";
            } else {
                echo "<div class='alerta'> 

                        <h3 >Se produjo un error! :(</h3>

                        <a href='mailto:matysotelo07@gmail.com'>
                            <svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-mail' width='44' height='44' viewBox='0 0 24 24' stroke-width='1.5' stroke='black' fill='none' stroke-linecap='round' stroke-linejoin='round'>
                                <path stroke='none' d='M0 0h24v24H0z' fill='none'></path>
                                <path d='M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z'></path>
                                <path d='M3 7l9 6l9 -6'></path>
                            </svg>
                        </a>    
                        
                        </div> 
                ";
            }
        }
    }

?>

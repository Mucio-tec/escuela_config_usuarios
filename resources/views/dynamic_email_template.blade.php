
<!DOCTYPE html>
<html lang="en">

    <head>
        
    </head>

    <body>
            <p> Recibiste un mensaje de {{ $data['visitor_name']}} {{ $data['visitor_lastname']}} ({{ $data['visitor_email']}})</p>
            <p> <strong>Asunto: </strong> {{ $data['email_title']}}  </p>
            <p> <strong>Mensaje: </strong> {{ $data['visitor_message']}}  </p>
    </body>

</html>
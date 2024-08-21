<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .ticket {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
            background-color: #fff; /* Fondo blanco */
            color: black; /* Texto negro */
        }
        .ticket-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .ticket-header img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .ticket-body {
            padding: 15px;
        }
        .ticket-footer {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 0 0 8px 8px;
            text-align: center;
        }
        .ticket p {
            margin-bottom: 10px;
        }
        .ticket p.hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <div class="ticket-header">
            <img src="https://i.ibb.co/gSmhVyR/logo.png" alt="Logo">
            <h4>Nuevo Booking Registrado</h4>
        </div>
        <div class="ticket-body">
            <!-- Eliminar campos Nombre, Fecha, Marca y Modelo -->
            <p><strong>Año:</strong> {{ $booking->anio }}</p>
            <p><strong>Color:</strong> {{ $booking->color }}</p>
            <p><strong>Servicio Extra:</strong> {{ $booking->servicio_extra }}</p>
            <p><strong>Nombre del Cliente:</strong> {{ $booking->nombre_cliente }}</p>
            <p><strong>Apellido del Cliente:</strong> {{ $booking->apellido_cliente }}</p>
            <p><strong>Email del Cliente:</strong> {{ $booking->email_cliente }}</p>
            <p><strong>Teléfono del Cliente:</strong> {{ $booking->telefono_cliente }}</p>
            <p><strong>Dirección del Cliente:</strong> {{ $booking->direccion_cliente }}</p>
            <p><strong>Ciudad del Cliente:</strong> {{ $booking->ciudad_cliente }}</p>
            <p><strong>Estado:</strong> {{ $booking->estado_cliente }}</p>
            <p><strong>Código Postal del Cliente:</strong> {{ $booking->codigo_postal_cliente }}</p>
            <p><strong>Petición del Cliente:</strong> {{ $booking->peticion_cliente }}</p>
            <p><strong>Descripción del Servicio:</strong> {{ $booking->descripcion_servicio }}</p>
            <p><strong>Acepto Vehículo:</strong> {{ $booking->acepto_veicle ? 'Sí' : 'No' }}</p>
            <p><strong>Los Términos y Condiciones:</strong> {{ $booking->la_tos ? 'Sí' : 'No' }}</p>
        </div>
        <div class="ticket-footer">
            <p>Gracias por usar nuestros servicios.</p>
        </div>
    </div>
</body>
</html>

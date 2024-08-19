<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Booking</title>
</head>
<body>
    <h1>Nuevo Booking Registrado</h1>
    <p><strong>Marca:</strong> {{ $booking->marca }}</p>
    <p><strong>Modelo:</strong> {{ $booking->modelo }}</p>
    <p><strong>Año:</strong> {{ $booking->anio }}</p>
    <p><strong>Color:</strong> {{ $booking->color }}</p>
    <p><strong>Servicio Extra:</strong> {{ $booking->servicio_extra }}</p>
    <p><strong>Nombre:</strong> {{ $booking->nombre }}</p>
    <p><strong>Fecha:</strong> {{ $booking->fecha }}</p>
    <p><strong>Nombre del Cliente:</strong> {{ $booking->nombre_cliente }}</p>
    <p><strong>Apellido del Cliente:</strong> {{ $booking->apellido_cliente }}</p>
    <p><strong>Email del Cliente:</strong> {{ $booking->email_cliente }}</p>
    <p><strong>Teléfono del Cliente:</strong> {{ $booking->telefono_cliente }}</p>
    <p><strong>Dirección del Cliente:</strong> {{ $booking->direccion_cliente }}</p>
    <p><strong>Ciudad del Cliente:</strong> {{ $booking->ciudad_cliente }}</p>
    <p><strong>Estado del Servicio:</strong> {{ $booking->estado_servico }}</p>
    <p><strong>Código Postal del Cliente:</strong> {{ $booking->codigo_postal_cliente }}</p>
    <p><strong>Petición del Cliente:</strong> {{ $booking->peticion_cliente }}</p>
    <p><strong>Descripción del Servicio:</strong> {{ $booking->descripcion_servicio }}</p>
    <p><strong>Charges for Dirt:</strong> {{ $booking->dirt_charges ? 'Sí' : 'No' }}</p>
    <p><strong>Acepto Vehicle:</strong> {{ $booking->acepto_veicle ? 'Sí' : 'No' }}</p>
    <p><strong>LA_TOS:</strong> {{ $booking->la_tos ? 'Sí' : 'No' }}</p>
    <p><strong>Fecha del Servicio:</strong> {{ $booking->fecha_servicio }}</p>
</body>
</html>

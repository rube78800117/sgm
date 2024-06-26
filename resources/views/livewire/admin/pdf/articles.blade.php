<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="assets/vendor/fonts/remixicon/remixicon.css" />
        <title>Titulo</title>
       <link rel="stylesheet" href="{{ public_path("assets/sass/report-print.scss") }}" media="all"/> 

       
    </head>
   
<body>
    

<table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Código QR</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>
                        <img src="data:image/png;base64, {{ DNS2D::getBarcodePNG(url('/articulo/' . $item->id), 'QRCODE') }}" alt="barcode" class="barcode">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
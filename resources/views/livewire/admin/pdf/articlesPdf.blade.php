<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="assets/vendor/fonts/remixicon/remixicon.css" />
    <title>Titulo</title>
    <link rel="stylesheet" href="{{ public_path('assets/sass/report-print.scss') }}" media="all" />



    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.css"
        integrity="sha512-YM6sLXVMZqkCspZoZeIPGXrhD9wxlxEF7MzniuvegURqrTGV2xTfqq1v9FJnczH+5OGFl5V78RgHZGaK34ylVg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles


    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Tres columnas iguales */
            gap: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 2py; /* Reducir el padding */
            font-size: 14px; /* Ajustar el tamaño de fuente si es necesario */
        }
        th {
            background-color: #f2f2f2;
        }
        .barcode {
            width: 100px; /* Ancho fijo */
            height: 100px; /* Alto fijo */
        }
        .fixed-width {
            width: 150px; /* Ancho fijo para las celdas */
        }
        .table-container {
            break-inside: avoid; /* Evita que la tabla se divida en dos páginas al generar el PDF */
        }
    </style>





</head>

<body>
    <div class="container">
        @foreach ($articles as $item)

            <div class="table-container">
                <table>
                    <tr>
                       
                        <th class="fixed-width px-4" colspan="3">{{ $item->name }}</th>
                        <td class="fixed-width pl-8" rowspan="3">
                            <img src="data:image/png;base64, {{ DNS2D::getBarcodePNG(url('/articulo/' . $item->id), 'QRCODE') }}"
                                alt="barcode" class="barcode">
                        </td>
                    </tr>
                    <tr>
                        <th class="fixed-width px-4">ID MI TELEFERICO</th>
                        <td class="fixed-width px-4">{{ $item->id_eetc }}</td>
                    </tr>
                    <tr>
                        <th class="fixed-width px-4">ID DOPPELMAYER</th>
                        <td class="fixed-width px-4">{{ $item->id_dopp }}</td>
                    </tr>
                    <!-- Agrega más filas según sea necesario -->
                </table>
            </div>
         
            
        @endforeach
    </div>
</body>

</html>
<div>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="assets/vendor/fonts/remixicon/remixicon.css" />
        <title>Titulo</title>
        {{-- <link rel="stylesheet" href="{{ public_path("assets/sass/report-print.scss") }}" media="all"/> --}}

       
    </head>
    {{-- @include('partials.header', $header) --}}
    <body>
    {{-- @php ($plural = count($lenders) > 1)--}}
    @php ($n = 1)
     
    <div class="block">
        <div class="font-semibold leading-tight text-center m-b-10 text-lg"><span class="mdi mdi-camera-marker"></span>titulo</div>
    </div>
    
    <div class="block text-justify">
        <div>
            El Área de Recuperación y Cobranzas de la Mutual de Servicios al Policía -- MUSERPOL, a petición del interesado (a), procedió a la revisión de la información registrada en el Sistema de Préstamos PVT.<br><br>
            <div class="block">
                <div class="font-semibold leading-tight text-left m-b-10 text-sm">CERTIFICA QUE:</div>
            </div>
            {{-- @foreach ($lenders as $lender)
                El Sr. (a) {{$lender->full_name}} con Cédula de Identidad N° {{$lender->identity_card_ext}} registra descuentos a garante(s), de acuerdo al siguiente detalle:<br><br>
            @endforeach --}}
            <div class="block">
                <div class="font-semibold leading-tight text-left m-b-10 text-sm">{{ $n++ }}.<i class="ri-focus-2-line ri-36px"></i> DATOS DEL PRÉSTAMO</div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>account-cancel</title><path d="M10 4A4 4 0 0 0 6 8A4 4 0 0 0 10 12A4 4 0 0 0 14 8A4 4 0 0 0 10 4M17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13M10 14C5.58 14 2 15.79 2 18V20H11.5A6.5 6.5 0 0 1 11 17.5A6.5 6.5 0 0 1 11.95 14.14C11.32 14.06 10.68 14 10 14M17.5 14.5C19.16 14.5 20.5 15.84 20.5 17.5C20.5 18.06 20.35 18.58 20.08 19L16 14.92C16.42 14.65 16.94 14.5 17.5 14.5M14.92 16L19 20.08C18.58 20.35 18.06 20.5 17.5 20.5C15.84 20.5 14.5 19.16 14.5 17.5C14.5 16.94 14.65 16.42 14.92 16Z" /></svg>
            <div class="block">
                <table style="font-size:11px;" class="table-info w-100 text-center uppercase my-10">
                    <tr class="bg-grey-darker text-white">
                        <td class="w-20">Código Tŕamite</td>
                        <td class="w-20">Fecha de desembolso</td>
                        <td class="w-20">Monto desembolsado</td>
                        <td class="w-20">Fecha Última Amortización</td>
                        <td class="w-20">Saldo a Capital</td>
                        <i class="ri-focus-2-line ri-36px"></i>
                    </tr>
                    @foreach ($purchases as $item)
                    <tr>
                        <td class="data-row py-5">{{$item->id}}</td>
                        <td class="data-row py-5">{{$item->description}}</td>
                        <td class="data-row py-5">{{$item->ndocument }}</td>
                        <td class="data-row py-5">{{ \App\Models\Line::find($item->line_id)->name }}</td>
                        <td class="data-row py-5">{{ \App\Models\User::find($item->user_id)->name }}</td>
                        
                    </tr>  
                    @endforeach
                </table>
            </div>
            <div class="block">
                <div class="font-semibold leading-tight text-left m-b-10 text-sm">{{ $n++}}. DATOS DEL DESCUENTO</div>
            </div>
        </div>
    </div>
    {{-- <div style="width: 70%; margin:0 auto">
        <table>
            <tr>
                @php ($n = 1)
                @if ($guarantors_loan_payments_number === 1)
                <td>
                    <table style="font-size:11px; margin:0 auto;" class="table-info w-50 text-center uppercase my-10">
                        <tr class="bg-grey-darker text-white">
                            <td colspan=3>{{$guarantors_loan_payments[0]['full_name']}}</td>
                        </tr>
                        <tr class="bg-grey-darker text-white">
                            <td colspan=3>{{$guarantors_loan_payments[0]['identity_card']}}</td>
                        </tr>
                        <tr class="bg-grey-darker text-white">
                            <td class="w-5">N°</td>
                            <td class="w-10">FECHA</td>
                            <td class="w-10">MONTO (Bs.)</td>
                        </tr>
                        <tr>
                        @php ($total = 0)
                        @foreach($guarantors_loan_payments[0]['payments'] as $payment)
                            <td class="data-row py-5">{{ $n++ }}</td>
                            <td class="data-row py-5">{{ Carbon::parse($payment->loan_payment_date)->format('d/m/Y') }}</td>
                            <td class="data-row py-5">{{ $payment->estimated_quota }}</td>
                        </tr>
                        @php ($total = $total + $payment->estimated_quota)
                        @endforeach
                        <tr>
                            <td colspan=2>TOTAL</td>
                            <td>{{ $total }} </td>
                        </tr>
                    </table>
                </td>
                @elseif ($guarantors_loan_payments_number > 1) 
                @php ($n = 1)
                <td>
                    <table style="font-size:11px; margin:0 auto;" class="table-info w-75 text-center uppercase my-10">
                        <tr class="bg-grey-darker text-white">
                            <td colspan=3>{{$guarantors_loan_payments[0]['full_name']}}</td>
                        </tr>
                        <tr class="bg-grey-darker text-white">
                            <td colspan=3>{{$guarantors_loan_payments[0]['identity_card']}}</td>
                        </tr>
                        <tr class="bg-grey-darker text-white">
                            <td class="w-5">N°</td>
                            <td class="w-10">FECHA</td>
                            <td class="w-10">MONTO (Bs.)</td>
                        </tr>
                        <tr>
                        @php ($total = 0)
                        @foreach($guarantors_loan_payments[0]['payments'] as $payment)
                            <td class="data-row py-5">{{ $n++ }}</td>
                            <td class="data-row py-5">{{ Carbon::parse($payment->loan_payment_date)->format('d/m/Y') }}</td>
                            <td class="data-row py-5">{{ $payment->estimated_quota }}</td>
                        </tr>
                        @php ($total = $total + $payment->estimated_quota)
                        @endforeach
                        <tr>
                            <td colspan=2>TOTAL</td>
                            <td>{{ $total }} </td>
                        </tr>
                    </table>
                </td>
                @php ($n = 1)
                <td >
                    <table style="font-size:11px; margin:0 auto;" class="table-info w-75 text-center uppercase my-10">
                        <tr class="bg-grey-darker text-white">
                            <td colspan=3>{{$guarantors_loan_payments[1]['full_name']}}</td>
                        </tr>
                        <tr class="bg-grey-darker text-white">
                            <td colspan=3>{{$guarantors_loan_payments[1]['identity_card']}}</td>
                        </tr>
                        <tr class="bg-grey-darker text-white">
                            <td class="w-5">N°</td>
                            <td class="w-10">FECHA</td>
                            <td class="w-10">MONTO (Bs.)</td>
                        </tr>
                        <tr>
                        @php ($total = 0)
                        @foreach($guarantors_loan_payments[1]['payments'] as $payment)
                            <td class="data-row py-5">{{ $n++ }}</td>
                            <td class="data-row py-5">{{ Carbon::parse($payment->loan_payment_date)->format('d/m/Y') }}</td>
                            <td class="data-row py-5">{{ $payment->estimated_quota }}</td>
                        </tr>
                        @php ($total = $total + $payment->estimated_quota)
                        @endforeach
                        <tr>
                            <td colspan=2>TOTAL</td>
                            <td>{{ $total }} </td>
                        </tr>
                    </table>
                </td>
                @endif
            </tr>
        </table>
        <br>
        <span style="font-size: 10px;" class="text-center">Es cuanto se certifica en honor a la verdad para fines consiguientes.</span>
    
    </div> --}}
    <br>
    </body>
    </html>
    

</div>
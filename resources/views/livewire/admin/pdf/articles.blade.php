<div>




    @foreach ($articles as $item)
        <div class="flex">
            <span class="qrcode" style="transform: scale(0.3);">{!! DNS2D::getBarcodeHTML(url('/articulo/' . $item->id), 'QRCODE') !!}

            </span>


            <div>
                {{ $item->name }}
            </div>
        </div>
    @endforeach



</div>

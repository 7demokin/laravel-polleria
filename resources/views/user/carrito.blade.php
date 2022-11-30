@extends('user.layout', ['title' => $title, 'description' => $description, 'logo' => $logo])
@section('content')
    <section class="section">
       
            @if ($carrito)
            <div class="div-table">
            <table id="carrito-tb" class="display table" style="width:100%">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio U.</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Eliminar</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($carrito as $item)
                    <tr>
                        <td>{{ $item->producto->nombre }}</td>
                        <td>S/{{ $item->producto->precio }}</td>
                        <td>{{ $item->cantidad }}</td>
                        <td>S/{{ $item->cantidad * $item->producto->precio }}</td>
                        <td><button class="btn btn-tertiary">Eliminar</button></td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        <div class="bg-white mt-50 text-center w-50 ml p-15">
            <div>Total: S/{{ $total }}</div>
            <div></div>
        </div>
        @else
        @endif
        
        

    </section>
@endsection
@section('scripts')
    <script>

    </script>
@endsection

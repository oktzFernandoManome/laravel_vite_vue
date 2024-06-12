@extends('master')

@section('content')
    <h2>Titulo Products / Tag H2 do Blade</h2>
    <div id="app">
        
        @isset($produtos)
            @if (count($produtos) > 0)
                <p> Tag ul do blade</p>
                <ul>
                    @foreach ($produtos as $chave => $produto)                    
                        @php
                            $nomeProduto = isset($produto->nome) && !empty($produto->nome) ? $produto->nome : '';
                            $precoProduto = isset($produto->preco) && !empty($produto->preco) ? $produto->preco : null;                            
                        @endphp
                        
                        @if ($nomeProduto != '' && $precoProduto != null)
                            <products product-name="{{ $nomeProduto }}" :product-price="{{ $precoProduto }}"></products>
                        @endif
                    @endforeach
                    <p><span>Total compra:</span> {{ "R$ " . $totalCompra }}</p>
                </ul>
            @endif        
        @endisset
    </div>
@endsection

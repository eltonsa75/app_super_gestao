<h3>Fornecedor</h3>

@php

/* 
    if(!<condicao>) {} //enquanto executa se o retorno for true
*/

/*
    if(isset($variavel)) {} //retorna true se a variável estiver definida
*/
/*
    if(empty($variavel)) {} //retorna true se a variável estiver vazia
    - ''
    - 0
    - 0.0
    - null
    - false
    - array()
    - $var

*/
@endphp

@isset($fornecedores)

    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]))
    Fornecedor: {{ $fornecedores[$i]['nome'] }}
    <br>
    Status: {{ $fornecedores[$i]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
    <br>
    Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
    <hr>
    @php $i++ @endphp
 @endwhile
@endisset
  {{--   @switch($fornecedores[0]['ddd'])

        @case ('11')
            São Paulo - SP
        @break
        @case ('32')
            Juiz de Fora - MG
        @break
        @case ('85')
            Fortaleza - CE
        @break
        @default
        Estado não identificado
    @endswitch --}}

    <!--
        $variável testada não estiver definida (isset)
        ou
        $variável testada possuir o valor null
    -->




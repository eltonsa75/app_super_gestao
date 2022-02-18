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
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? '' }}
    <br>
    Telefone: ({{ $fornecedores[0]['ddd'] ?? '' }}) {{ $fornecedores[0]['telefone'] ?? '' }}
    @switch($fornecedores[0]['ddd'])

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
    @endswitch

    <!--
        $variável testada não estiver definida (isset)
        ou
        $variável testada possuir o valor null
    -->
@endisset


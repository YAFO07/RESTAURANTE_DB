@extends('principal')
@section('contenido')
<main class="main">
<template v-if="menu==1">
<Cliente></Cliente>
</template>
<template v-if="menu==2">
<Pedido></Pedido>
</template>
<template v-if="menu==3">
<Plato></Plato>
</template>
<template v-if="menu==4">
<Det_Pedido></Det_Pedido>
</template>
@endsection

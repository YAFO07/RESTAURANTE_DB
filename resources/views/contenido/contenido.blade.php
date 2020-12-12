@extends('principal')
@section('contenido')
<main class="main">
<template v-if="menu==1">
<cliente></cliente>
</template>
<template v-if="menu==2">
<pedido></pedido>
</template>
<template v-if="menu==3">
<plato></plato>
</template>
<template v-if="menu==4">
<det_pedido></det_pedido>
</template>
@endsection

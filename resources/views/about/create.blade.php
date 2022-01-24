@extends('base')
@section('title') About Create @endsection
@section('content')
<div
class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">{{"about create"}}</h1>
</div>


<form action="{{ route("about.store")}}" method="POST"> 
    {{ csrf_field() }}
    <div class="mb-3">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3 ">
        <label for="phone" class="form-label">Telefono</label>
        <input type="phone" class="form-control" id="phone" name="phone">
    </div>
    <div class="mb-3">
         <label for="message" class="form-label">Mensaje</label>
         <textarea name="message" id="message" class="form-control" cols="30" rows="10" ></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>

@endsection

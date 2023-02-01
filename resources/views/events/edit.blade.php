@extends('layouts.main')
@section('title','Editando: '.$event->title)

@section('content')

<div id="event-create-container" class="col-md-6-offset-md-3">

    <h1>Editando:{{$event->title}}</h1>
    <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" name="image"id="image" class="form-control-file" />
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview" />
        </div> 
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{$event->title}}" />
        </div> 
         <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="data do evento" value="{{$event->date->format('Y-m-d')}}" />
        </div> 
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="local do evento" value="{{$event->city}}" />
        </div>
        <div class="form-group">
            <label for="title">o evento é privado:</label>
            <select class="form-control" id="private" name="private" " placeholder="nome do evento">
                <option value="0">Não</option>
                <option value="1" {{$event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="o que vai acontecer no evento?">{{$event->description}}</textarea>
        </div>
          <div class="form-group">
            <label for="title">Adicione intes del infraestrutura:</label>
              <div class="form-group">
                  <input type="checkbox" name="items[]" value="Cadeiras" />Cadeiras
              </div>
              <div class="form-group">
                  <input type="checkbox" name="items[]" value="Palco" />Palco
              </div>
              <div class="form-group">
                  <input type="checkbox" name="items[]" value="Cerveja Gratis" />Cerveja Gratis
              </div>
              <div class="form-group">
                  <input type="checkbox" name="items[]" value="Open Food" />Open Food
              </div>
              <div class="form-group">
                  <input type="checkbox" name="items[]" value="Brindes" />Brindes
              </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Editar Evento" />
    </form>
</div>

@endsection

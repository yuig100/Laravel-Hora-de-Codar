@extends('layouts.main')
@section('title','Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6-offset-md-3">

    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" name="image"id="image" class="form-control-file" />
        </div> 
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="nome do evento"/>
        </div> 
         <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="data do evento"/>
        </div> 
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="local do evento" />
        </div>
        <div class="form-group">
            <label for="title">o evento é privado:</label>
            <select class="form-control" id="private" name="private" " placeholder="nome do evento">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="o que vai acontecer no evento?"></textarea>
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
        <input type="submit" class="btn btn-primary" value="Criar Evento" />
    </form>
</div>

@endsection

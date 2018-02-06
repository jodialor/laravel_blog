@extends('main')

@section('title', '| Contact')

@section('content')
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1> Contactos </h1>
          <br>
          <form>
            <div class="form-group">
              <label name="email">Email:</label>
              <input id="email" name="email" class="form-control">
            </div>

            <div class="form-group">
              <label name="subject">Assunto:</label>
              <input id="subject" name="subject" class="form-control">
            </div>

            <div class="form-group">
              <label name="message">Mensagem:</label>
              <textarea id="message" name="message" class="form-control">Escreva a sua mensagem...</textarea>
            </div>

            <input type="submit" value="Enviar" class="btn btn-success btn-block">
          </form>

        </div>
      </div>
@endsection

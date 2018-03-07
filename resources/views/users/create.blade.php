@extends('main')

@section('title', '| Create New User')

@section('stylesheets')
  {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Create New User</h1>
      <hr>

<!-- Formulario de inserçao de dados para a base de dados -->
      {!! Form::open(['route' => 'users.store', 'data-parsley-validate' => '']) !!}

      <div class='form-group'>
        {!! Form::label('name', 'Name:') !!}
        {{ Form::text('name', null, ['class' => 'form-control input-lg', 'data-parsley-maxlength' => '255','required']) }}
      </div>
      <div class='form-group'>
        {!! Form::label('email', 'Email:') !!}
        {{ Form::email('email', null, ['class' => 'form-control input-lg', 'data-parsley-maxlength' => '255', 'required']) }}
      </div>
      <div class='form-group'>
        {!! Form::label('password', 'Password:') !!}
        <input type="password" name="password" id="password" class="form-control input-lg" data-parsley-minlength="6" required>
      </div>
      <div class='form-group'>
        {!! Form::label('is_admin', 'User Type:') !!}
        <select name="is_admin" id="is_admin" class='form-control input-lg' required>
          <option value=''>-Select one-</option>
          <option value='0'>Normal</option>
          <option value='1'>Administrator</option>
        </select>
      </div>

      <br>
      {{ Form::submit('Create User', ['class' => 'btn btn-success btn-block']) }}

      {!! Form::close() !!}
<!-- Fim de Formulario -->

    </div>
  </div>

@endsection

@section('scripts')
  {!! Html::script('js/parsley.min.js') !!}
@endsection

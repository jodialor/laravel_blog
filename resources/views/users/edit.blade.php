@extends('main')

@section('title', '| Edit User')

@section('content')

  <div class="row">
    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
    <div class="col-md-8">
      <div class='form-group'>
        {!! Form::label('name', 'Name:') !!}
        {{ Form::text('name', null, ['class' => 'form-control input-lg', 'data-parsley-maxlength' => '255']) }}
      </div>
      <div class='form-group'>
        {!! Form::label('email', 'Email:') !!}
        {{ Form::email('email', null, ['class' => 'form-control input-lg', 'data-parsley-maxlength' => '255']) }}
      </div>
      <div class='form-group'>
        {!! Form::label('password', 'Password:') !!}
        <input type="password" name="password" id="password" class="form-control input-lg" data-parsley-minlength="6" required>
      </div>
      <div class='form-group'>
        {!! Form::label('is_admin', 'User Type:') !!}
        <?php
        $isAdmin = ($user->is_admin) ? "selected" : "";
        $isNormal = ($user->is_admin) ? "" : "selected";
         ?>
        <select name="is_admin" id="is_admin" class='form-control input-lg' required>
          <option value=''>-Select one-</option>
          <option value='0' {{ $isNormal }}>Normal</option>
          <option value='1' {{ $isAdmin }}>Administrator</option>
        </select>
      </div>

    </div>

    <div class="col-md-4">
      <div class="well">
        <div class="row">
          <div class="col-sm-6">
            {!! Html::linkRoute('users.show', 'Cancel', array($user->id), array('class' => 'btn btn-danger btn-block')) !!}
          </div>
          <div class="col-sm-6">
            {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
          </div>
          {!! Form::close() !!}
        </div>

        <div class="row">
          <div class="col-md-12">
            {{ Html::linkRoute('users.index', '<< See All Users', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
          </div>
        </div>
      </div>
    </div>

  </div> <!-- end of .row form -->

@stop

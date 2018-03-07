@extends('main')

@section('title', '| View User')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">User Info</h1>
      <hr>
    </div>
    <div class="col-md-8">
      <p class="lead"><b><u>Name:</u></b> {{ $user->name}}</p>

      <p class="lead"> <b><u>Email:</u></b> {{ $user->email}} </p>

      <p class="lead"> <b><u>Type:</u></b>
        <?php
          if($user->is_admin){
            echo "Administrator";
          }else{
            echo "Normal User";
          }
        ?>
        </p>
    </div>

    <div class="col-md-4">
      <div class="well">

        <div class="row">
          <div class="col-sm-6">
            {!! Html::linkRoute('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-primary btn-block')) !!}
          </div>
          <div class="col-sm-6">
            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

            {!! Form::close() !!}
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            {{ Html::linkRoute('users.index', '<< See All Users', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
          </div>
        </div>

      </div>
    </div>
  </div>


@endsection

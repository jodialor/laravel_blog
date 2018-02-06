@extends('main')

@section('title', '| About')

@section('content')
      <div class="row">
        <div class="col-md-6 col-md-offset-3">

          <h1>About Me</h1>

          <h3> Name: {{ $data['fullname'] }} </h3>
          <h3> E-mail: {{ $data['email'] }} </h3>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

          <br>

          <span class="label label-default">Default</span>
          <span class="label label-primary">Primary</span>
          <span class="label label-success">Success</span>
          <span class="label label-info">Info</span>
          <span class="label label-warning">Warning</span>
          <span class="label label-danger">Danger</span>

        </div>
      </div>
@endsection

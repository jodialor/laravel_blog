@extends('main')

@section('title', '| All Users')

@section('content')

  <div class="row">
    <div class="col-md-10">
      <h1>All Users</h1>
    </div>

    <div class="col-md-2">
      {!! Html::linkRoute('users.create', 'Create New User', '', array('class' => 'btn btn-lg btn-primary btn-block btn-h1-spacing')) !!}
    </div>
    <div class="col-md-12">
      <hr>
    </div>
  </div> <!-- end of .row -->

  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Type</th>
          <th></th>
        </thead>

        <tbody>
          @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>
              <?php
                if($user->is_admin){
                  echo "Administrator";
                }else{
                 echo "Normal User";
                }
              ?>
              </td>
              <td>
                <a href="{{ route('users.show', $user->id) }}" class="btn btn-default">View</a>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-default">Edit</a>
                <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-default">Delete</a> <!-- não esta a funcionar -->
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <div class="text-center">
        <!--mostrar a numeracao de paginas-->
        {!! $users->links(); !!}
      </div>
    </div>
  </div> <!-- end of .row -->


@endsection

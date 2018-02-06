@extends('main')

@section('title', '| All Posts')

@section('content')

  <div class="row">
    <div class="col-md-10">
      <h1>All Posts</h1>
    </div>

    <div class="col-md-2">
      {!! Html::linkRoute('posts.create', 'Create New Post', '', array('class' => 'btn btn-lg btn-primary btn-block btn-h1-spacing')) !!}
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
          <th>Title</th>
          <th>Post</th>
          <th>Created At</th>
          <th></th>
        </thead>

        <tbody>
          @foreach ($posts as $post)
            <tr>
              <td>{{ $post->id }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
              <td>{{ date('j M Y H:ia', strtotime($post->created_at)) }}</td>
              <td>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-default">View</a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">Edit</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <div class="text-center">
        <!--mostrar a numeracao de paginas-->
        {!! $posts->links(); !!}
      </div>
    </div>
  </div> <!-- end of .row -->


@endsection

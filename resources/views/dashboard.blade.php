@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Blog Posts</h3>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th> 
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>
                                    <form class="form-horizontal pull-right">
                                        <a href="/posts/{{$post->id}}/edit" class="btn btn-default btn-xs">Edit</a>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger btn-xs'])}}
                                        {!!Form::close()!!}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    @else
                        <p>You have no posts.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

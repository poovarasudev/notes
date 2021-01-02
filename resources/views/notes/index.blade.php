@extends('layouts.base')


@section('content')
<!-- Main component for call to action -->
            <div class="container">
                 <div class="pull-xs-left">
                    <a class="btn btn-info" href="{{route('notebooks.index')}}" role="button">
                         Back
                    </a>
                     </div>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="{{route('notes.createNote',$notebook->id)}}" role="button">
                        New Note +
                    </a>
                </div>
                <div class="clearfix">
                    <br><br>
                   
                     <h1 class="pull-xs-left">
                    Notes
                </h1>
                <div class="clearfix">
                </div>
                <!--============= notes=========== -->
                <div class="list-group notes-group">

                    <!--note1 -->
                    @foreach($notes as $note)
                    <div class="card card-block">
                        <a href="{{route('notes.show', $note->id)}}">
                            <h4 class="card-title">
                                {{$note->title}}
                            </h4>
                        </a>
                        <p class="card-text">
                            {{ new \Illuminate\Support\HtmlString($note->body) }}
                        </p>
                        <a class="btn btn-sm btn-info pull-xs-left" href="{{route('notes.edit',$note->id)}}">
                            Edit
                        </a>
                        <form action="{{route('notes.destroy',$note->id)}}" class="pull-xs-right" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                            
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- /container -->

@endsection
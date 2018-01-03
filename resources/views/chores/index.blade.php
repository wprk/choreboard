@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Chores</div>

                    <div class="panel-body">
                        @foreach ($chores as $chore)
                            <article>
                                <h4>{{ $chore->name }}</h4>
                                <div class="body">{{ $chore->description }}</div>
                            </article>

                            <hr>
                        @endforeach;
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

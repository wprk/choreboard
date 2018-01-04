@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Chores</div>

                    <div class="panel-body">
                        @foreach ($households as $household)
                            <article>
                                <h4>
                                    <a href="{{ $household->path() }}">
                                        {{ $household->name }}
                                    </a>
                                </h4>
                            </article>

                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

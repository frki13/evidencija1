@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="well">
                    <h1>
                        Detalji posiljke [{{$client->name}}]
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Detalji posiljke</div>

                    <div class="panel-body">

                        <div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="name" class="col-md-2">Ime:</label>
                                <p class="col-md-10">{{$client->name}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="name" class="col-md-2">Prodao:</label>
                                <p class="col-md-10">{{$client->CreatedBy->first_name}} {{$client->CreatedBy->last_name}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="name" class="col-md-2">Datum slanja:</label>
                                <p class="col-md-10">{{$client->created_at}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="name" class="col-md-2">Zadnja izmjena:</label>
                                <p class="col-md-10">{{$client->updated_at}}</p>
                            </div>

                            <div class="form-group col-md-12 col-md-offset-2">
                                <label for="name" class="col-md-2">Status:</label>
                                <p class="col-md-10">{{$client->name}}</p>
                            </div>


                            <div class="form-group col-md-10 col-md-offset-2">

                                <a href="{{ route('clients.edit', [$client]) }}" class="btn btn-primary" role="button">Edit</a>

                                {!! Form::open(['method' => 'DELETE', 'route' => ['clients.destroy', $client], 'style' => 'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('extra_js')
    <script>
        //ExtraJS
    </script>
@endsection

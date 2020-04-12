@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="well">
                    <h1>
                        NARUDZBE
                        <a href="{{ route('clients.create') }}" class="btn btn-success pull-right" role="button">Napravi novu</a>
                    </h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <br/>
                @endif

                @if (\Session::has('success'))
                    <div class="alert alert-success alert-dismissable">
                        <p>{!! \Session::get('success')  !!} </p>
                    </div>
                    <br/>
                @endif

                @if (\Session::has('notice'))
                    <div class="alert alert-info alert-dismissable">
                        <p>{!! \Session::get('notice')  !!} </p>
                    </div>
                    <br/>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">

                    <div class="panel-heading">SPISAK NARUDZBI</div>

                    <div class="panel-body">

                        <div class="table-responsive">
                            <table id="datatable" name="datatable" class="table table-hover table-striped table-bordered display">
                                <thead>
                                <tr>
                                    <th class="text-center">Ime</th>
                                    <th class="text-center">Korisnik</th>
                                    <th class="text-center">Datum slanja</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Operacije</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($clients as $client)
                                    <tr>
                                        <td>
                                            {{$client->name}}
                                        </td>
                                        <td>
                                            {{$client->CreatedBy->first_name}} {{$client->CreatedBy->last_name}}
                                        </td>
                                        <td class="text-center">
                                            {{$client->created_at}}
                                        </td>
                                        <td class="text-center">
                                            @if($client->deleted_at == null)
                                                <span class="label label-success">Aktivna</span>
                                            @else

                                                <span class="label label-danger">Stornirana</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if($client->deleted_at == null)
                                                <a href="{{ route('clients.show', [$client]) }}" class="btn btn-primary" role="button">Detalji</a>
                                                <a href="{{ route('clients.edit', [$client]) }}" class="btn btn-info" role="button">Izmjena</a>

                                                {!! Form::open(['method' => 'DELETE', 'route' => ['clients.destroy', $client], 'style' => 'display:inline']) !!}
                                                {!! Form::submit('Deaktiviraj', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            @else
                                                <a href="#" data-toggle="modal" data-target="#access_denied" class="btn btn-primary" role="button">Detalji</a>
                                                <a href="#" data-toggle="modal" data-target="#access_denied" class="btn btn-info" role="button">Izmjena</a>
                                                <a href="#" data-toggle="modal" data-target="#access_denied" class="btn btn-danger" role="button">Deaktiviraj</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra_js')
    <script>
        $(document).ready(function() {
            $('#datatable').dataTable();

            $("[data-toggle=tooltip]").tooltip();

        } );
    </script>
@endsection

@extends('layouts.admin')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Сообщения</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Главная</a></li>
                            <li class="breadcrumb-item active">Сообщения</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="card">
        <div class="card-body">
        <div class="media mb-4">
            <div class="avatar-xs">
                <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                    {{ Illuminate\Support\Str::substr($massages->name, 0, 1) }}
                </span>
            </div>
            <div class="media-body">
                <h5 class="font-size-14 mt-1">{{$massages->name}}</h5>
                <small class="text-muted">{{$massages->email}}</small>
            </div>
        </div>

        <h4 class="mt-0 font-size-16">Содержание сообщения</h4>
        <p>
            {{$massages->massages}}
        </p>
        <hr>

        <a href="{{route('admin.massages.index')}}" class="btn btn-secondary waves-effect mt-4"><i class="mdi mdi-reply">вернутся</i></a>
        </div>
        </div>
    </div>


@endsection

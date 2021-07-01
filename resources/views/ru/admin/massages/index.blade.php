@extends('layouts.admin')
@section('breadcrumbs')
@endsection
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
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <div class="search-box me-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Пошук...">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                <table class="table align-middle table-nowrap table-hover">
                    <thead class="table-light">
                    <tr>
                        <th scope="col" style="width: 70px;">#</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Email</th>
                        <th scope="col">Сообщения</th>
                        <th scope="col">Статус</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($massages as $massag)
                            <tr>
                                <td>
                                    <div class="avatar-xs">
                                        <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                            {{ Illuminate\Support\Str::substr($massag->name, 0, 1) }}
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="{{route('admin.massages.show', $massag)}}" class="text-dark">{{$massag->name}}</a></h5>
                                </td>
                                <td>{{ $massag->email}}</td>
                                <td>{{ Illuminate\Support\Str::substr($massag->massages, 0, 20) }}</td>
                                <td>
                                    @if($massag->see === null)
                                    <ul class="list-inline font-size-20 contact-links mb-0">
                                        <li class="list-inline-item px-2">
                                            <a href="{{route('admin.massages.show', $massag)}}" title="Message"><i class="bx bxs-bell bx-tada bx-md"></i></a>
                                        </li>
                                    </ul>
                                    @else
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
                    {{ $massages->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

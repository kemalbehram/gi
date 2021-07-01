@extends('layouts.admin')
@section('breadcrumbs')
@endsection
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Profile</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                            <li class="breadcrumb-item active">Profile</li>
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
                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <a type="button" href="{{route('admin.news.create')}}" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i>СОЗДАТЬ НОВОСТЬ</a>
                            </div>
                        </div><!-- end col-->
                    </div>
                    <div class="table-responsive">
                <table class="table align-middle table-nowrap table-hover">
                    <thead class="table-light">
                    <tr>
                        <th scope="col" style="width: 70px;">#</th>
                        <th scope="col">Тема</th>
                        <th scope="col">Теги</th>
                        <th scope="col">Текст</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($news as $new)
                            <tr>
                                <td>
                                    <div class="avatar-xs">
                                        <span class="avatar-title rounded-circle" style="text-transform: uppercase; text-decoration:white;">
                                            {{ Illuminate\Support\Str::substr($new->name, 0, 1) }}
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="{{route('admin.news.edit', $new)}}" class="text-dark">{{$new->title}}</a></h5>
                                    @if($new->type === 1)
                                        <p class="text-muted mb-0">Новости</p>
                                    @else
                                        <p class="text-muted mb-0">Видео анонсы</p>
                                    @endif
                                </td>
                                <td>
                                    <div>
                                        <a href="#" class="badge badge-soft-primary font-size-11 m-1">Photoshop</a>
                                        <a href="#" class="badge badge-soft-primary font-size-11 m-1">illustrator</a>
                                    </div>
                                </td>
                                <td>
                                    {{ Illuminate\Support\Str::substr($new->name, 0, 1) }}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
                    {{ $news->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
    @include('admin.floor.categories._nav')
    <p><a href="{{ route('admin.floor.categories.create') }}" class="btn btn-success ">Створити категорію</a></p>
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading"  style="background-color: #8BC34A !important;" >
            <h2>Список категорій</h2>
        </div>

            <table class="table table-bordered table-striped">
                <thead>
                <tr class="warning">
                    <th>Назва</th>
                    <th>Посилання</th>
{{--                    <th>Переміщення</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>
                            @for($i = 0; $i < $category->depth; $i++) &mdash; @endfor
                            <a href="{{ route('admin.floor.categories.show', $category) }}">{{$category->name}}</a>
                        </td>
                        <td>
                            {{$category->slag}}
                        </td>
                        <td>
                            <div class="d-flex flex-row">
                            <form action="{{ route('admin.floor.categories.first', $category) }}" method="POST" class="col-sm-2">
                                {{ csrf_field() }}
                                <button class="btn btn-sm btn-outline-primary" style="border-radius: 50px;">First</button>
                            </form>
                            <form action="{{ route('admin.floor.categories.up', $category) }}" method="POST" class="col-sm-2">
                                {{ csrf_field() }}
                                <button class="btn btn-sm btn-outline-primary" style="border-radius: 50px;">Up</button>
                            </form>
                            <form action="{{ route('admin.floor.categories.down', $category) }}" method="POST" class="col-sm-2">
                                {{ csrf_field() }}
                                <button class="btn btn-sm btn-outline-primary" style="border-radius: 50px;">Down</button>
                            </form>
                            <form action="{{ route('admin.floor.categories.last', $category) }}" method="POST" class="col-sm-2">
                                {{ csrf_field() }}
                                <button class="btn btn-sm btn-outline-primary" style="border-radius: 50px;">Last</button>
                            </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
@endsection

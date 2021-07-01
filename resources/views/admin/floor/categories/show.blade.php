@extends('layouts.app')
@section('content')
    @include('admin.floor.categories._nav')
   <div class="d-flex flex-row mb-3">
        <a href="{{ route('admin.floor.categories.edit', $category) }}" class="btn btn-primary left">Корегувати</a>
        <form method="POST" action="{{ route('admin.floor.categories.destroy', $category) }}">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
            <button class="btn btn-danger left">Видалити</button>
        </form>
    </div>
    <br>
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-body no-padding">
            <table class="table table-striped">
                <tbody>
                <tr class="">
                    <th class="warning">ID</th> <td>{{$category->id}}</td>
                </tr>
                <tr>
                    <th class="warning">Назва</th> <td>{{$category->name}}</td>
                </tr>
                <tr>
                    <th class="warning">Посилання</th> <td>{{$category->slag}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('layouts.admin')
@section('content')
        <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('admin.news.update', $news) }}"  enctype="multipart/form-data" >
                    @csrf
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="title" class="col-form-label">Назва</label>
                                <input id="title" class="form-control{{ $errors->has('title') ? 'is-invalid':''}}" name="title" value="{{ old('title', $news->title) }}" required>
                                @if($errors->has('title'))
                                    <span class="invalid-feedback"><strong>{{$errors->first('title')}}</strong></span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="title1" class="col-form-label">Name</label>
                                <input id="title1" class="form-control{{ $errors->has('title1') ? 'is-invalid':''}}" name="title1"  value="{{ old('title1', $news->title1) }}" required>
                                @if($errors->has('title1'))
                                    <span class="invalid-feedback"><strong>{{$errors->first('title1')}}</strong></span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="type" class="col-form-label">Тип</label>
                        <select class="form-control select2" id="type" name="type">
                            <option value="1">News</option>
                            <option value="2">Video</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="slag" class="col-form-label">Силка</label>
                        <input id="slag" class="form-control{{ $errors->has('slag') ? 'is-invalid':''}}" name="slag" value="{{ old('slag',$news->slag) }}">
                        @if($errors->has('slag'))
                            <span class="invalid-feedback"><strong>{{$errors->first('email')}}</strong></span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="text" class="col-form-label">Новость</label>
                        <textarea id="mytextarea" name="mytextarea">{{$news->text}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="text1" class="col-form-label">Новость</label>
                        <textarea id="mytextarea1" name="mytextarea1">{{$news->text1}}</textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

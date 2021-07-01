@extends('layouts.app')
@section('content')
    @include('admin.region._nav')
 <div class="container">
    <form method="POST" action="{{ route('admin.region.update', $region) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name" class="col-form-label">Name</label>
            <input id="name" class="form-control{{ $errors->has('name') ? 'is-invalid':''}}" name="name" value="{{ old('name', $region->name) }}" required>
            @if($errors->has('name'))
                <span class="invalid-feedback"><strong>{{$errors->first('name')}}</strong></span>
            @endif
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
 </div>
@endsection

@extends('layouts.app')

@section('content')
    @include('admin.floor.categories._nav')
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-body no-padding">
            <form method="POST" action="{{ route('admin.floor.categories.update', $category) }}">
                {{ csrf_field() }}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="name">Назва</label>
                    <input id="name" name="name" class="form-control{{ $errors->has('name') ? 'is-invalid': '' }}"
                           value="{{ old('name', $category->name) }}" required>
                    @if( $errors->has('name'))
                        <span class="invalid-feedback"><stron>{{ $errors->first('name') }}</stron></span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="slag">Посилання</label>
                    <input id="slag" name="slag" class="form-control{{ $errors->has('slag') ? 'is-invalid': '' }}"
                           value="{{ old('slag', $category->slag) }}" required>
                    @if( $errors->has('slag'))
                        <span class="invalid-feedback"><stron>{{ $errors->first('slug') }}</stron></span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="parent">Батьківська категорія</label>
                    <select id="parent" name="parent" class="form-control{{ $errors->has('parent') ? 'is-invalid': '' }}">
                        <option value=""></option>
                        @foreach($parents as $parent)
                            <option value="{{ $parent->id }}"{{ $category->parent_id === $parent->id ? 'selected': '' }}>
                                @for($i = 0; $i < $parent->depth; $i++) &mdash; @endfor
                                {{ $parent->name }}
                            </option>
                        @endforeach
                    </select>
                    @if( $errors->has('parent'))
                        <span class="invalid-feedback"><stron>{{ $errors->first('parent') }}</stron></span>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Зберегти</button>
                </div>
            </form>
        </div>
    </div>
@endsection

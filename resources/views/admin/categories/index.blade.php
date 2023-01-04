@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        {{ __('Kategoriler') }}
                        <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm text-light float-end">
                            {{ __('Yeni Kategori') }}
                        </a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endsection

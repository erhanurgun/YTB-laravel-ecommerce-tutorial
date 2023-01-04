@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        {{ __('Kategori Ekle') }}
                        <a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm text-light float-end">
                            {{ __('Geri Dön') }}
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mt-2">
                            <div class="col-md-6">
                                <label>{{ __('Kategori Adı') }}</label>
                                <input type="text" class="form-control" name="name"
                                       placeholder="{{ __('Kategori Adı') }}">
                            </div>
                            <div class="col-md-6">
                                <label>{{ __('Kategori Slug') }}</label>
                                <input type="text" class="form-control" name="slug"
                                       placeholder="{{ __('Kategori Slug') }}">
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <div class="col-md-12">
                                <label>{{ __('Kategori Açıklaması') }}</label>
                                <textarea class="form-control" name="description" rows="5"
                                          placeholder="{{ __('Kategori Açıklaması') }}"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <div class="col-md-6">
                                <label>{{ __('Kategori Resmi') }}</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="col-md-6">
                                <label>{{ __('Kategori Durumu') }}</label><br>
                                <input type="checkbox" class="my-2" name="status">
                            </div>
                        </div>
                        <h3 class="mt-4">{{ __('Kategori Seo Ayarları') }}</h3>
                        <div class="form-group row mt-2">
                            <div class="col-md-6">
                                <label>{{ __('Kategori Seo Başlık') }}</label>
                                <input type="text" class="form-control" name="meta_title"
                                       placeholder="{{ __('Kategori Seo Başlık') }}">
                            </div>
                            <div class="col-md-6">
                                <label>{{ __('Kategori Seo Anahtar Kelimeler') }}</label>
                                <input type="text" class="form-control" name="meta_keywords"
                                       placeholder="{{ __('Kategori Seo Anahtar Kelimeler') }}">
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <div class="col-md-12">
                                <label>{{ __('Kategori Seo Açıklaması') }}</label>
                                <textarea class="form-control" name="meta_description" rows="5"
                                          placeholder="{{ __('Kategori Seo Açıklaması') }}"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary text-light">{{ __('Kaydet') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

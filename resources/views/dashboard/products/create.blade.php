@extends('layouts.admin.master')

@section('title')
    {{ __('product.add_product') }}
@endsection

@push('css')
@endpush

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3></h3>
        @endslot

        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">{{ __('product.product') }}</a></li>
        <li class="breadcrumb-item active">{{ __('product.add_product') }}</li>
    @endcomponent


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>{{ __('product.product') }}</h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" method="post" action="{{ route('products.store') }}"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom01">{{ __('product.title') }}</label>
                                    <input class="form-control" id="validationCustom01" type="text" required=""
                                        name="title" placeholder="ex: Black shirt" value="{{ old('title') }}" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>

                            <div class="row g-2">

                                <div class="col-md-6">
                                    <label class="form-label" for="validationCustom03">{{ __('product.price') }}</label>
                                    <input class="form-control" id="validationCustom03" type="number" name="price" min="0.01"
                                        placeholder="Price in EGP" required="" value="{{ old('price') }}" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationCustom04">{{ __('product.discount') }}</label>
                                    <input class="form-control" id="validationCustom04" type="number" name="discount" min="0" max="1"
                                        placeholder="ex: 0.20" required=""
                                        value="{{ old('discount') }}" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>

                            </div>

                            <div class="row g-2">

                                <div class="col-md-6">
                                    <label class="form-label" for="validationDefault08">{{ __('product.category') }}</label>
                                    <select name="category_id" class="form-control" value="{{ old('category_id') }}">
                                        <option value="" selected>No category selected.</option>
                                        @foreach($product_category as $pcat)
                                            <option value="{{ $pcat->id }}">{{ $pcat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationDefault08">{{ __('product.sub-category') }}</label>
                                    <select name="category_id" class="form-control" value="{{ old('category_id') }}">
                                        <option value="" selected>No sub-category selected.</option>
                                        {{-- @foreach($product_subcategory as $psubcat)
                                            @if($product_category->id == $product_subcategory->id)
                                                <option value="{{ $psubcat->id }}">{{ $psubcat->name }}</option>
                                            @else
                                                <option value="">no</option>
                                            @endif
                                        @endforeach --}}
                                    </select>
                                </div>

                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom05">{{ __('master.password') }}</label>
                                    <input class="form-control" id="validationCustom05" type="text" name="password"
                                        placeholder="***********" required="" value="{{ old('password') }}" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>

                            {{-- <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationDefault06">{{ __('role.role') }}</label>
                                    <select class="form-select" id="validationDefault06" required="" name="roles_name">
                                        <option selected="" disabled="" value=""> {{ __('role.role') }}
                                        </option>
                                        @foreach ($roles as $role)
                                            <option {{ old('roles_name') == $role ? 'selected' : '' }}
                                                value="{{ $role }}  ">{{ $role }}</option>
                                        @endforeach

                                    </select>
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div> --}}

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom01">{{ __('product.description') }}</label>
                                    <textarea class="form-control" id="validationCustom01"  required=""
                                        name="description" placeholder="ex: color, size, about product" value="{{ old('description') }}"> </textarea>
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom01">{{ __('product.meta_description') }}</label>
                                    <textarea class="form-control" id="validationCustom01"  required=""
                                        name="meta_description" placeholder="ex: Manufacturer, made in china" value="{{ old('meta_description') }}"> </textarea>
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom07">{{ __('master.image') }}</label>
                                    <input class="form-control" id="validationCustom07" type="file"
                                        aria-label="file example" name="photo" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>


                            <button class="btn btn-primary" type="submit">{{ __('master.save') }}</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    @push('scripts')
        <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
    @endpush
@endsection

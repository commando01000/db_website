@extends('layouts.back.main')
@section('title', __('Edit Faq'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <div class="previous-next-btn">
                <div class="page-header-title">
                    <h4 class="m-b-10">{{ __('Edit Faq') }}</h4>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), ['']) !!}</li>
                    <li class="breadcrumb-item">{!! Html::link(route('faqs.index'), __('Faqs'), ['']) !!}</li>
                    <li class="breadcrumb-item">{{ __('Edit Faq') }}</li>
                </ul>
            </div>
            <div class="float-end">
                <div class="d-flex align-items-center">
                    <a href="@if (!empty($previous)) {{ route('faqs.edit', [$previous->id]) }}@else javascript:void(0) @endif"
                        type="button" class="btn btn-outline-primary"><i class="me-2"
                            data-feather="chevrons-left"></i>Previous</a>
                    <a href="@if (!empty($next)) {{ route('faqs.edit', [$next->id]) }}@else javascript:void(0) @endif"
                        class="btn btn-outline-primary ms-1"><i class="me-2" data-feather="chevrons-right"></i>Next</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="section-body">
            <div class="col-md-6 m-auto">
                <div class="card ">
                    <div class="card-header">
                        <h5> {{ __('Edit Faq') }}</h5>
                    </div>
                    {!! Form::model($faq, [
                        'route' => ['faqs.update', $faq->id],
                        'method' => 'Put',
                        'data-validate',
                    ]) !!}
                    <div class="card-body">
                        <div class="form-group">
                            {{ Form::label('questions', __('questions'), ['class' => 'form-label']) }}
                            {!! Form::text('questions', null, ['class' => 'form-control', ' required', 'placeholder' => __('Enter questions')]) !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('answer', __('Answer'), ['class' => 'form-label']) }}
                            {!! Form::textarea('answer', null, [
                                'class' => 'form-control',
                                'data-trigger',
                                'required',
                                'placeholder' => __('Enter answer Address'),
                            ]) !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('order', __('Order'), ['class' => 'form-label']) }}
                            {!! Form::number('order', null, ['placeholder' => __('Enter order'), 'class' => 'form-control', 'required']) !!}
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-flt float-end mb-3">
                            {!! Html::link(route('faqs.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
                            {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')

@endpush

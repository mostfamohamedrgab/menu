@push('css')
  <style>
  .modal-body
  {
    background: #fcfcfc;
  }
  #store-form {
    width:80%;
    margin: auto;
    padding: 20px !important;
    background: #fbfafa;
  }
  hr {
    border-color: #fff
  }
  .data {
    width: 80%;
    margin: auto;
    background: #fff;
    padding: 10px
  }
  .data h4 {
      color:#7f7f7f;
  }
  @media(max-width: 775px)
  {
    form {
      width: 100%;
      padding: 0
    }
  }
  </style>
@endpush
@extends('admin.layouts.index')
@section('content')
<!-- Modal -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{ $item->name }}
    </h1>

    <hr style="border-color:#aaa"/>

    </section>
    @include('layouts.msgs')
  <!-- Main content -->
<section class="content">

  <div class="modal-content">

    <div class="modal-body">

        @csrf
        @method('PUT')
        <div class="form-group data">
          <h4>رقم المنتج </h4>
          <h5 style="margin-right:20px">{{ $item->id }}</h5>
        </div>
        <div class="form-group data">
          <h4>الرابط</h4>
          <h5 style="margin-right:20px">
            @php
              if(admin_level() == 'Officer'):
                $route =  route('item',[$item->id,$item->slug,auth('admin')->id()]);
              else:
                $route = route('item',[$item->id,$item->slug]);
              endif;
            @endphp
            <a href="{{ $route}}"  target="_blank">
              {{ $route }} <i class="fa fa-link"></i>
            </a>
          </h5>
        </div>
        <div class="form-group data">
          <h4>اسم المنتج </h4>
          <h5 style="margin-right:20px">{{ $item->name }}</h5>
        </div>
        <div class="form-group data">
          <h4>سعر المنتج </h4>
          <h5 style="margin-right:20px">{{ $item->price }}</h5>
        </div>

        <div class="form-group data">
          <h4>صور المنتج </h4>
          <h5 style="margin-right:20px">
            @foreach($item->imgs as $img)
            <img src="{{ files_path($img->img) }}" style="width:50px;height:50px" />
            @endforeach
          </h5>
        </div>

      <hr style="border-color:#fff"/>
      <h2 style="text-align:center !important">
        طلبات الشراء
      </h2>

      @include('layouts.ordersTable')

    </div>
  </div>
</div>

@stop

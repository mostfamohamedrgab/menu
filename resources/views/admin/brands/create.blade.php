@push('css')
  <style>
  .modal-body
  {
    background: #ecf0f5;
  }
  .modal-content
  {
    box-shadow: unset
  }
  form {
    width:80%;
    margin: auto;
    padding: 20px !important;
    background: #fff;
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
    براند جديد
    </h1>

    <hr style="border-color:#aaa"/>

    </section>
    @include('layouts.msgs')
  <!-- Main content -->
<section class="content">

  <div class="modal-content">

    <div class="modal-body">

      <form id="store-form" method="post" action="{{route('admin.Brands.store')}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label>الاسم</label>
          <input type="text" class="form-control"  required name="name" value="{{ old('name') }}">
        </div>
        
        <div class="form-group">
          <label>لون الخلفيه</label>
          <input type="color" class="form-control" name="background_color" value="{{old('background_color')}}"/>
        </div>

        <div class="form-group">
          <label>لون الخط</label>
          <input type="color" class="form-control" name="font_color" value="{{old('font_color')}}"/>
        </div>

        <div class="form-group">
          <label>صوره الخلفيه</label>
          <input type="file" accept="image/*" class="form-control"  required name="image_cover">
        </div>

        <div class="form-group">
          <label>رقم الهاتف</label>
          <input type="text" class="form-control" required name="phone" value="{{ old('phone') }}">
        </div>

        <div class="form-group">
          <label>واتس اب</label>
          <input type="text" class="form-control"  name="whatsapp" value="{{ old('whatsapp') }}">
        </div>

        <div class="form-group">
          <label>فيس بوك</label>
          <input type="text" class="form-control"  name="facebook" value="{{ old('facebook') }}">
        </div>

        <div class="form-group">
          <label>انستغرام</label>
          <input type="text" class="form-control"  name="instagram" value="{{ old('instagram') }}">
        </div>


        <button type="submit" class="f-right w-100 btn btn-success">حفظ</button>
        <div class="clear"></div>
      </form>

    </div>
  </div>
</div>

<!-- end add model --->
@stop

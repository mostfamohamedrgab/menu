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
    تعديل
    {{$brand->name}}
    </h1>

    <hr style="border-color:#aaa"/>

    </section>
    @include('layouts.msgs')
  <!-- Main content -->
<section class="content">

  <div class="modal-content">

    <div class="modal-body">

      <form id="store-form" method="post" action="{{route('admin.Brands.update',$brand->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>الاسم</label>
          <input type="text" class="form-control"  required name="name" value="{{ $brand->name }}">
        </div>

        <div class="form-group">
          <label>لون الخلفيه</label>
          <input type="color" class="form-control" name="background_color" value="{{$brand->background_color }}"/>
        </div>

        <div class="form-group">
          <label>لون الخط</label>
          <input type="color" class="form-control" name="font_color" value="{{$brand->font_color }}"/>
        </div>

        <div class="form-group">
          <label>صوره الخلفيه</label>
          <p>
            <img src="{{ imgs_path($brand->image_cover) }}" class="f-right" style="border-radius: 50%;width:40px;height:40px"/>
          </p>
          <div class="clear"></div>
          <input type="file" accept="image/*" class="form-control" name="image_cover">
        </div>

        <div class="form-group">
          <label>رقم الهاتف</label>
          <input type="text" class="form-control" required name="phone" value="{{ $brand->phone }}">
        </div>

        <div class="form-group">
          <label>واتس اب</label>
          <input type="text" class="form-control"  name="whatsapp" value="{{ $brand->whatsapp }}">
        </div>

        <div class="form-group">
          <label>فيس بوك</label>
          <input type="text" class="form-control"  name="facebook" value="{{ $brand->facebook }}">
        </div>

        <div class="form-group">
          <label>انستغرام</label>
          <input type="text" class="form-control"  name="instagram" value="{{ $brand->instagram }}">
        </div>


        <button type="submit" class="f-right w-100 btn btn-success">حفظ</button>
        <div class="clear"></div>
      </form>

    </div>
  </div>
</div>

<!-- end add model --->
@stop

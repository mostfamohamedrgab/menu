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
    تعديل دفعة ل -
    {{$payment->brand->name}}
    </h1>

    <hr style="border-color:#aaa"/>

    </section>
    @include('layouts.msgs')
  <!-- Main content -->
<section class="content">

  <div class="modal-content">

    <div class="modal-body">

      <form id="store-form" method="post" action="{{route('admin.Payments.update',$payment->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
        <label >البراند</label>
        <select class="form-control" name="brand_id" required>
          @foreach($brands as $brand)
          <option
          {{ $payment->brand_id == $brand->id ? 'selected' : '' }}
          value="{{$brand->id}}">{{$brand->name}}</option>
          @endforeach
        </select>
      </div>

        <div class="form-group">
          <label>التاريخ</label>
          <input type="date" class="form-control" required name="date" value="{{$payment->date }}"/>
        </div>

        <div class="form-group">
          <label>ملاحظات</label>
          <textarea class="form-control" name="note">{{ $payment->note }}</textarea>
        </div>

        <button type="submit" class="f-right w-100 btn btn-success">حفظ</button>
        <div class="clear"></div>
      </form>

    </div>
  </div>
</div>

<!-- end add model --->
@stop

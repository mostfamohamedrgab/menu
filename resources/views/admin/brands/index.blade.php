@extends('admin.layouts.index')
@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 >
          البرندات
          </h1>

          <hr style="border-color:#aaa"/>

            <a style="float:right;text-align:right" class=" btn btn-primary" href="{{ route('admin.Brands.create') }}">
            اضافة<i class="fa fa-plus"></i>


        </a>
          <div style="clear:both"></div>
          </section>
          @include('layouts.msgs')
        <!-- Main content -->
        <section class="content">



    <table id="example" class="table display" style="width:100%">
      <thead>
        <tr >
          <th>#</th>
          <th>الاسم</th>
          <th>الصورة</th>
          <th>رقم الهاتف</th>
          <th>اجراء</th>
        </tr>
      </thead>
      <tbody>
        @foreach($brands as $brand)
        <tr>
          <td>{{$brand->id}}</td>
          <td>{{$brand->name }}</td>
          <td>
            <a href="{{ imgs_path($brand->image_cover) }}" target="_blank">
              <img src="{{ imgs_path($brand->image_cover) }}" style="border-radius: 50%;width:80px;height:80px"/>
            </a>
          </td>
          <td>{{$brand->phone }}</td>

          <td>

            <a  class="btn-sm btn btn-primary" href="{{ route('admin.Brands.edit', $brand->id) }}">
               <i class="fa fa-edit"></i>
            </a>
            <form class="delete"
            style="display:inline-block;padding:0"
            action="{{ route('admin.Brands.destroy',$brand->id) }}" method="post">
              @csrf
              @method('DELETE')
              <input type="submit"  class="btn-sm btn btn-danger" value="حذف" />
            </form>

          </td>
        </tr>

        @endforeach
      </tbody>
    </table>

@stop
@push('css')
  <style type="text/css">
      form {
        text-align: right !important
      }
  </style>
@endpush
@push('js')
  <script>
    dataTable(false);
    $(document).on('click','.delete', function (e){

      if( confirm('تاكيد ؟ ') )
      {
        return true;
      }else{
        return false;
      }

    });

    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    })

  </script>
@endpush

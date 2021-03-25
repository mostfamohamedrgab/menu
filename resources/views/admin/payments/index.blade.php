@extends('admin.layouts.index')
@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 >
          الدفعات
          </h1>

          <hr style="border-color:#aaa"/>

            <a style="float:right;text-align:right" class=" btn btn-primary" href="{{ route('admin.Payments.create') }}">
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
          <th>البراند</th>
          <th>التاريخ</th>
          <th>ملاحظات</th>
          <th>اجراء</th>
        </tr>
      </thead>
      <tbody>
        @foreach($payments as $payment)
        <tr>
          <td>{{$payment->id}}</td>
          <td>{{$payment->name }}</td>
          <td>{{$payment->date }}</td>
          <td>{{$payment->note }}</td>

          <td>

            <a  class="btn-sm btn btn-primary" href="{{ route('admin.Payments.edit', $payment->id) }}">
               <i class="fa fa-edit"></i>
            </a>
            <form class="delete"
            style="display:inline-block;padding:0"
            action="{{ route('admin.Payments.destroy',$payment->id) }}" method="post">
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

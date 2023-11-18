@extends('admin.layouts.admin')

@section('title')
title
@endsection
@section('contentheaderactive')
عرض
@endsection

@section('content')
@if (session()->has('message'))
<div class="alert alert-success">
    <button type="button"class="close"
    data-dismiss="alert"aria-hidden="true">x</button>
   {{ session()->get('message') }}
</div>
@endif
<div class="row">
  <div class="col-12">
    <div class="card">
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0"  >
        <table class="table table-head-fixed">
          <thead>
            <tr>
              <th scope="col">اسم المستخدم</th>
              <th scope="col"> الايميل</th>
              <th scope="col">حذف</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($user as $data)
          <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>
            <a onclick="return confirm('هل انت متاكد انك تريد الحذف')" href="{{ url('delete_user',$data->id) }}"class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
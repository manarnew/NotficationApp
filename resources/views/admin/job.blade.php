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
                <div class="div_center">
                    <h2 class="h2_font">اضافة وظيفة</h2>
                    <form action="{{ url('/add_job') }}" method="post">
                        @csrf
                        <input type="text" name="name" placeholder="ادخل اسم الوظيفة"
                        class="input_color">
                        <input type="submit" value="اضافة" style="color: blue"  class="btn btn-primary">
                      <br>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </form>
                </div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0"  >
        <table class="table table-head-fixed">
          <thead>
            <tr>
              <th scope="col">اسم الوظيفة</th>
              <th scope="col">حدث</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $data)
          <tr>
            <td>{{ $data->name }}</td>
            <td>
            <a onclick="return confirm('هل انت متاكد انك تريد الحذف')" href="{{ url('delete_job',$data->id) }}"class="btn btn-danger">Delete</a>
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
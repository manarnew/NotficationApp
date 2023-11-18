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
                <div class="card-body table-responsive p-0" >
                  <table class="table table-bordered">
                    <thead >
                      <tr>
                        <th scope="col">اسم الموظف</th>
                        <th scope="col">الوظيفة</th>
                        <th scope="col">رقم الهوية</th>
                        <th scope="col">  الراتب</th>
                        <th scope="col">تاريخ الاصدار</th>
                        <th scope="col">تاربخ الانتهاء</th>
                        <th scope="col">تاربخ الاشعار</th>
                        <th scope="col">التفاصيل</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($notfication as $data)
                      <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->job->name }}</td>
                        <td>{{ $data->idntityNum }}</td>
                        <td>{{ $data->salry }}</td>
                        <td>{{ $data->beginingDate }}</td>
                        <td>{{ $data->endDate }}</td>
                        <td>{{ $data->notfyDate }}</td>
                        <td> <a  href="{{ url('details',$data->id) }}"class="btn btn-success">تفاصيل</a></td>
                      </tr>
                      
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
@endsection
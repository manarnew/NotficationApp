@extends('admin.layouts.admin')

@section('title')
title
@endsection
@section('contentheaderactive')
تفاصيل
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
                      <tr>
                        <th scope="col">اسم الموظف</th>
                        <td>{{ $data->name }}</td>
                      </tr>
                        <th scope="col">الوظيفة</th>
                        <td>{{ $data->job->name }}</td>
                      </tr>
                        <th scope="col">رقم الهوية</th>
                        <td>{{ $data->idntityNum }}</td>
                      </tr>
                        <th scope="col">  الراتب</th>
                        <td>{{ $data->salry }}</td>
                      </tr>
                        <th scope="col">تاريخ الاصدار</th>
                        <td>{{ $data->beginingDate }}</td>
                      </tr>
                        <th scope="col">تاربخ الانتهاء</th>
                        <td>{{ $data->endDate }}</td>
                      </tr>
                        <th scope="col">تاربخ الاشعار</th>
                        <td>{{ $data->notfyDate }}</td>
                      </tr>
                      <th scope="col">  الملاحظات</th>
                      <td>{{ $data->notes }}</td>
                    </tr>
                    <th scope="col">  اخرى</th>
                    <td>{{ $data->also }}</td>
                      </tr>
                        <th scope="col">صورة الوجة الامامي للهوية</th>
                        <td ><img width="200px" height="200px"  src="/product/{{ $data->frontImage }}" alt="" class="rounded mx-auto d-block"></td>
                      </tr>
                        <th scope="col">صورة الوجة الخلفي للهوية</th>
                        <td ><img width="200px" height="200px"  src="/product/{{ $data->backImage }}" alt="" class="rounded mx-auto d-block"></td>
                      </tr>
                        <th scope="col">تعديل</th>
                        <td><a  href="{{ url('update_card',$data->id) }}"class="btn btn-info">تعديل</a></td>
                      </tr>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
@endsection<!-- Button trigger modal -->

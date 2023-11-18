@extends('admin.layouts.admin')

@section('title')
لوحة التحكم
@endsection
@section('contentheaderactive')
لوحة التحكم
@endsection

@section('content')
  <div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon  elevation-1"><i class="fa fa-id-card" aria-hidden="true"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">الاقامات</span>
          <span class="info-box-number">
            {{ $cardAll }}
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3"style="width: 700px">
      <div class="info-box mb-3">
        <span class="info-box-icon  elevation-1" style="padding:5px"><i class="fa fa-id-card" aria-hidden="true"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">الاقامات غير منتهية الصلاحية</span>
          <span class="info-box-number">{{ $card }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3" style="width: 500px">
      <div class="info-box mb-3">
        <span class="info-box-icon  elevation-1"><i class="fa fa-id-card" aria-hidden="true"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">الاقامات منتهية الصلاحية</span>
          <span class="info-box-number">{{ $fonshedCard }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">المستخدمين</span>
          <span class="info-box-number">{{ $user }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
@endsection
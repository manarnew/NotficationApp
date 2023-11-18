@extends('admin.layouts.admin')

@section('title')
Product
@endsection
@section('contentheaderactive')
تعديل
@endsection

@section('content')
                <div class="div_center">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button"class="close"
                        data-dismiss="alert"aria-hidden="true">x</button>
                       {{ session()->get('message') }}
                    </div>
                @endif
                <h2 class="h2_font">تعديل بطاقة</h2>
                <form action="{{ url('/edit_card', $data->id ) }}" enctype="multipart/form-data" method="post">
                    @csrf
                 <div class="form-group">
                    <label for="">اسم الموظف</label>
                    <input  class="form-control" type="text" name="name" placeholder="ادخل اسم الموظف"
                    class="input_color" value="{{ $data->name }}">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                   </div>

                   <div class="form-group">
                    <label for="">الوظيفة</label>
                    <select required class="form-control" name="job" id="job">
                        <option value="{{ $data->id }}">{{ $data->job->name }}</option>
                        @foreach ($job as $job)
                        <option value="{{ $job->id }}">{{ $job->name }}</option>
                        @endforeach
                    </select>
                    @error('job')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                   </div>

                   <div class="form-group">
                    <label for="">رقم الهوية</label>
                    <input  class="form-control" type="number" name="idntityNum" placeholder="ادخل رقم الهوية"
                    class="input_color" value="{{ $data->idntityNum }}">
                    @error('idntityNum')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                   </div>
                   <div class="form-group">
                    <label for="">الراتب</label>
                    <input  class="form-control" type="number"min="0" name="salry" placeholder="ادخل الراتب"
                    class="input_color" value="{{ $data->salry }}">
                    @error('salry')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                   </div>
                   <div class="form-group">
                    <label for="">تاريخ الاصدار </label>
                    <input  class="form-control" type="date" name="beginingDate"
                    class="input_color" value="{{ $data->beginingDate }}">
                    @error('beginingDate')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                   </div>
                   <div class="form-group">
                    <label for="">تاريخ الانتهاء</label>
                    <input  class="form-control" type="date" name="endDate"
                    class="input_color" value="{{ $data->endDate }}">
                    @error('endDate')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                   </div>
                   <div class="form-group">
                    <label for="">تاريخ الاشعار</label>
                    <input  class="form-control" type="date" name="notfyDate"
                    class="input_color" value="{{ $data->notfyDate }}">
                    @error('notfyDate')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                   </div>
                   <div class="form-group">
                    <label>الملاحظات</label>
                    <textarea class="form-control" name="notes" rows="5" placeholder="ادخل ملاحظة">{{ $data->notes }}</textarea>
                  </div>
                   <div class="form-group">
                    <label for="">اخرى</label>
                    <input class="form-control" type="text" name="also" placeholder="ادخل اخرى"
                    class="input_color" value="{{ $data->also }}">
                   </div>
                   <div class="form-group">
                    <label for="exampleFormControlFile1">الصورة الحالية</label>
                       <img width="200px" height="200px"  src="/product/{{ $data->frontImage }}" alt="">
                   </div>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="frontImage">
                      <label class="custom-file-label" for="exampleInputFile">صورة الوجة الامامي للهوية</label>
                    </div>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">الصورة الحالية</label>
                       <img width="200px" height="200px" src="/product/{{ $data->backImage }}" alt="">
                   </div>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="backImage">
                      <label class="custom-file-label" for="exampleInputFile">صورة الوجة الخلفي للهوية</label>
                    </div>
                  </div>
                  <br>
                   <div class="form-group">
                    <input type="submit" value="حفظ" style="color: blue" class="btn btn-primary">
                 </div>
                </form>
                </div>
 @endsection
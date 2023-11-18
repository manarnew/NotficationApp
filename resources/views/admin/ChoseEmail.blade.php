@extends('admin.layouts.admin')

@section('title')
اختيار مستخدم لتلقي الاشعارات 
@endsection
@section('contentheaderactive')
تحديث
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
                    <h2 class="h2_font">اختيار مستخدم لتلقي الاشعارات </h2>
                    <form action="{{ url('/choseUserForNotification') }}" method="post">
                        @csrf
                        <div class="form-group">
                          <label for=""style="font-size:25px">المستخدمين</label>
                          <select required class="form-control" name="userId" id="userId">
                            @if ($data!=null)
                            <option value="{{ $data->userId }}">{{ $data->user->name }}</option>
                            @endif
                              @foreach ($User as $User)
                              <option value="{{ $User->id }}">{{ $User->name }}</option>
                              @endforeach
                          </select>
                         </div>
                         <div class="form-group">
                          <input type="submit" value="تحديث" style="color: blue" class="btn btn-primary">
                       </div>
                    </form>
                </div>
@endsection
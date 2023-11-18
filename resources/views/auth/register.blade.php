@extends('admin.layouts.admin')

@section('title')
Product
@endsection
@section('contentheaderactive')
تعديل
@endsection

@section('content')


        <x-validation-errors class="mb-4" />
        <div class="div_center">
            @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button"class="close"
                data-dismiss="alert"aria-hidden="true">x</button>
               {{ session()->get('message') }}
            </div>
        @endif
            <h2 class="h2_font">اضافة مستخدم</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="">الاسم </label>
                <input  class="form-control" type="text" name="name" placeholder=" الادخل الاسم"
                class="input_color" value="{{ old('name') }}">
               </div>

            <div class="form-group">
                <label for="email">الايميل </label>
                <input  class="form-control" type="email" name="email" placeholder="  ادخل الايميل"
                class="input_color" value="{{ old('email') }}">
               </div>

            <div class="form-group">
                <label for="password">كلمة السر </label>
                <input id="password" class="form-control" type="password" name="password" 
                class="input_color" value="{{ old('password') }}">
               </div>

  <div class="form-group">
                <label for="password_confirmation"> اعادة كتابة كلمة السر  </label>
                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" 
                class="input_color" value="{{ old('password') }}">
               </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif
                <div class="form-group">
                 <input type="submit" value="اضافة" style="color: blue" class="btn btn-primary">
              </div>
        </form>
@endsection
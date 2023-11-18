<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class notficationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
           'name'=>'required',
           'job'=>'required',
           'idntityNum'=>'required',
           'frontImage'=>'required',
           'backImage'=>'required',
           'salry'=>'required',
           'beginingDate'=>'required',
           'endDate'=>'required',
           'notfyDate'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'الاسم مطلوب',
            'job.required'=>'الوظيفة مطلوبة',
            'idntityNum.required'=>'رقم الهوية مطلوب',
            'frontImage.required'=>'صورة الوجة الامامي للهوية مطلوب',
            'backImage.required'=>'صورة الوجة الخلفي للهوية مطلوب',
            'salry.required'=>'الراتب ممطلوب',
            'beginingDate.required'=>'تاريخ الاصدار مطلوب',
            'endDate.required'=>'تاربخ الانتهاء مطلوب',
            'notfyDate.required'=>'تاريخ الاشعار مطلوب',
        ];
        
    }
}

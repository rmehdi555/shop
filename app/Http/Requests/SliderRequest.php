<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $allLang=['fa'=>'fa','en'=>'en'];
        $result=[];
        foreach ($allLang as $kay => $value)
        {
            $result=array_merge($result , [ 'title_'.$kay => 'required|max:250']);
        }

        if($this->method() == 'POST') {

            $result=array_merge($result , [
                'images' => 'required|mimes:jpeg,png,bmp',
                'link' => 'required',
                'type'=>'required',
                'status'=>'required|integer',
                'priority'=>'required|integer',
            ]);
            return $result;
        }

        $result=array_merge($result , [
            'link' => 'required',
            'type'=>'required',
            'status'=>'required|integer',
            'priority'=>'required|integer',
        ]);
        return $result;
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemCauHoiRequest extends FormRequest
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
        return [
            'noidung' =>'required','linh_vuc_id' =>'required','phuong_an_a' =>'required','phuong_an_b' =>'required','phuong_an_c' =>'required','phuong_an_d' =>'required','dap_an' =>'required'
        ];
    }
    public function messages()
    {
        return [
            'noidung.required'     =>'Á ra ...... Chưa nhập nội dung nè',
            'linh_vuc_id.required'     =>'Á ra ...... Chưa có lĩnh vưc nè dung nè',
            'phuong_an_a.required'     =>'Á ra ...... Chưa có phương án a  nè',
            'phuong_an_b.required'     =>'Á ra ...... Chưa có phương án b nè',
            'phuong_an_c.required'     =>'Á ra ...... Chưa có phương án c nè',
            'phuong_an_d.required'     =>'Á ra ...... Chưa có phương án d nè',
            'dap_an.required'     =>'Á ra ...... Chưa nhập đáp án đúng nè',
            
        ];
    }
}

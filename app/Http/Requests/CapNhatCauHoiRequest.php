<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapNhatCauHoiRequest extends FormRequest
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
            'noidung.required'     =>'E hèm ...... Chưa sửa nội dung nè',
            'linh_vuc_id.required'     =>'E hèm ...... Chưa có lĩnh vưc nè dung nè',
            'phuong_an_a.required'     =>'E hèm ...... Chưa sửa phương án a  nè',
            'phuong_an_b.required'     =>'E hèm ...... Chưa sửa phương án b nè',
            'phuong_an_c.required'     =>'E hèm ...... Chưa sửa phương án c nè',
            'phuong_an_d.required'     =>'E hèm ...... Chưa sửa phương án d nè',
            'dap_an.required'     =>'E hèm ...... Chưa sửa đáp án đúng nè',
            
        ];
    }
}

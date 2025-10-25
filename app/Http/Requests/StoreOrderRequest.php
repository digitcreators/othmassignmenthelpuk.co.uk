<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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

                'name'              => 'required|regex:/^[A-Za-z -]+$/|max:255',
                "email"             => "required",
                'phone'             => 'required|regex:/^[+][0-9]/|min:12',
                "country"           => "required",
                "paper_type"        => "required",
                "paper_topic"       => "required",
                "language"          => "required",
                "reference_style"   => "required",
                "subject"           => "required", 
                "academic_level"    => "required",
                "no_of_references"  => 'nullable',
                "number_of_pages"   => "required",
                "no_of_slides"      => 'nullable|numeric|min:0|max:100',
                "no_of_posters"      => 'nullable|numeric|min:0|max:100',
                "deadline"          => "required",
                "academic_level_id" => "required",
                "deadline_id"       => "required",
                "detail"            => "nullable|string",
                // "spacing"           => "required",
                'emailAttachments.*' => 'nullable|file|mimes:pdf,ppt,pptx,doc,docx,xls,xlsx,csv,txt,jpeg,jpg,png,gif,sav,sps,spv,spo,mat,zip,rar|max:250000',

        ];
    }
}



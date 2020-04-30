<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoStoreRequest extends FormRequest
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
            //
            'video' => 'required|mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'created_by' => 'required|in:1,2',
            'type' => 'required|in:free,paid',
        ];
    }

    public function messages()
    {
        return [
            'video.required' => 'You must upload video!',
            'video.mimes' => 'This is un-supported video!',
            'image.required' => 'You must upload image!',
            'image.image' => 'This is not valid image!',
            'image.mimes' => 'This is un-supported image!',
            'created_by.required' => 'You must detect who create this.',
            'created_by.in' => 'please choos again',
            'type.required' => 'You must choose type for the video',
            'type.in' => 'allowable choices paid, or free.'
        ];
    }
}

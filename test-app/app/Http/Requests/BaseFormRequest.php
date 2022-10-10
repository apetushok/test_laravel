<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class BaseFormRequest extends FormRequest
{
    public function getFormData()
    {
        return Arr::except($this->request->all(), [
            '_token'
        ]);
    }
}

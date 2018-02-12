<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParticipantRequest extends FormRequest
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
            'name' => 'required|max:255',
            'cpf' => 'required',
            'community' => 'required',
            'size_t_shirt' => 'required|in:P,M,G,GG',
            'babylook' => 'required',
            'arrives_on_friday' => 'required|boolean',
            'email' => 'required|email',
            'workshop_id' => 'required|exists:workshops,id',
            'birth_date' => 'required|',
            'has_special_needs' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome é obrigatório!',
            'cpf.required' => 'CPF é obrigatório!',
            'birth_date.required' => 'Data de nascimento é obrigatório!',
            'community.required' => 'O campo Comunidade é obrigatório!',
            'size_t_shirt.required' => 'Escolha o tamanho da camiseta!',
            'babyllok.required' => 'O campo babylook!',
            'arrives_on_friday.required' => 'O campo dia da chegada é obrigatório!',
            'email.required' => 'E-mail obrigatório!',
            'workshop_id.required' => 'Oficina obrigatória!',
            'has_special_needs.required' => 'Necessidades Especiais obrigatório!',
        ];
    }


}

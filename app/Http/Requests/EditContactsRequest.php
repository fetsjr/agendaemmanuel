<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Illuminate\Routing\Route;
class EditContactsRequest extends Request
{
    public function __construct(Route $route)
    {
        $this->route = $route;
    }
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
        //dd($this->route->getParameter('contacts'));die();
        return [
            //Validaciones de los contactos
            'firstName' => 'required|max:255|min:3',
            'lastName'  => 'required|max:255|min:3',
            //'email' => 'required|email|unique:contacts,email,null,id,user_id,' . \Auth::id(),
            'email'     => 'required|email|max:255|min:6|unique:contacts,email,' . $this->route->getParameter('contacts') . ',id,user_id,' . \Auth::user()->id,
            'phone'     => 'required|min:600000000|max:999999999|numeric',
            'address'   => 'required|min:6',
            'groups'    => 'required|in:Familiar,Amigo,Conocido,Trabajo,Compañero de estudios'
        ];
    }
}
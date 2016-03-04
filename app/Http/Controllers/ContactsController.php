<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//utilizamos el modelo
use App\Contacts;
//Accedemos a sus validaciones
use App\Http\Requests\CreateContactsRequest;
use App\Http\Requests\EditContactsRequest;
// Accedemos a las sesiones
use Illuminate\Support\Facades\Session;
class ContactsController extends Controller
{
    /**
     * Método constructor el cual se encargará de comprobar
     * que el usuario que está realizando la petición
     * tiene una sesión en el sistema de lo contrario simplemente
     * lo redireccionará al formulario de login
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Método de que realiza la petición de los contactos que tiene un usuario
     * en concreto y los lista
     */
    public function index(Request $request)
    {
        //dd($request->get('name'));die();
        // Realizamos la paginación de los resultados de
        // la base de datos
        $contacts = Contacts::name($request->get('name'))->groups($request->get('groups'))->where('user_id', '=', \Auth::user()->id)->orderBy('id')->paginate();
        //$contacts = Contacts::paginate();
        // Llamamos al listado de contactos que se encuentra
        // en el index del listado de contactos
        return view('contacts.index',compact('contacts', 'request'));
    }// getIndex()

     public function create(){
        return view('contacts.create');
    }

    /**
     * Método de guardado de la alta del contacto
     * @param $request Validación de la petición realizada por el formulario
     */
    public function store(CreateContactsRequest $request){

        $datos = $request->all();
        // Necesitamos recoger el id del usuario que queremos
        // guardar, para ello simplemente le realizaremos una
        // peteicón a la fachada de autentificación
        $datos['user_id'] = \Auth::user()->id;
        $datos['created_at'] = date('YmdHms');
        // Creamos un contacto con los datos pasados en el formulario
        $contacto = Contacts::create($datos);
        $message = $contacto->fullName . ' se ha insertado';
        Session::flash('message-correct', $message);
        // redirecionamos al usuario al listado de los contactos
        //return $this->index();
        return redirect()->route('contacts.index');
    }
    /**
     * Método que llama a la vista y recupera la información del contacto
     * a editar
     * @param  Integer $id ID del contacto a editar
     * @return [type]     [description]
     */
    public function edit($id)
    {
        /**
         * consulta de contactos de un usuario
         */
        $contacts = Contacts::where('user_id', '=', \Auth::user()->id)->orderBy('id')->findOrFail($id);
        return view('contacts.edit', compact('contacts'));
    }

    public function update($id, EditContactsRequest $request)
    {
        $contacto = Contacts::where('user_id', '=', \Auth::user()->id)->orderBy('id')->findOrFail($id);
        $datos = $request->all();
        // Necesitamos recoger el id del usuario que queremos
        // guardar, para ello simplemente le realizaremos una
        // peteicón a la fachada de autentificación
        $datos['user_id'] = \Auth::user()->id;
        $datos['updated_at'] = date('YmdHms');
        $contacto->fill($datos);
        $contacto->save();

        $message = $contacto->fullName . ' se ha editado correctamente';
        Session::flash('message-correct', $message);

        return redirect()->route('contacts.index');
    }

    public function destroy($id, Request $request)
    {
        // buscamos al contacto pedido por el usuario y comprobamos que
        // es suyo
        $contacto = Contacts::where('user_id', '=', \Auth::user()->id)->orderBy('id')->findOrFail($id);
        // lo borramos
        $contacto->delete();
        // generamos un mensaje
        $message = $contacto->fullName . ' ha sido eliminado';
        // Si la petición es a través de ajax
        if($request->ajax()){
            return response()->json([
                'id'      => $contacto->id,
                'message' => $message
            ]);
        }
        // Creamos el mensaje
        Session::flash('message-correct', $message);
        // redirecionamos
        return redirect()->route('contacts.index');
    }

}

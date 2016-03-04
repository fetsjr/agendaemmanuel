<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
class Contacts extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'email', 'phone', 'address', 'user_id', 'groups',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'user_id', 'remember_token',
    ];

    /**
     * Método que devuelve el nombre compreto
     * @return String FullName
     */
    public function getFullNameAttribute()
    {
        return  $this->firstName . ' ' . $this->lastName;
    }

    public function scopeName($query, $name)
    {
        if(trim($name) != ""){
            $query->where(\DB::raw("CONCAT(contacts.firstName, ' ', contacts.lastName)"),"LIKE", "%$name%");
        }
    }

    public function scopeGroups($query, $groups)
    {
        $grupos = config('options.groups');

        if($groups != "" && isset($grupos[$groups])){
            $query->where('groups', $groups);
        }
    }
}
?>
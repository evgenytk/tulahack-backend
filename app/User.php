<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['type_name'];

    public function getTypeNameAttribute()
    {
        if ($this->type == 3)
            return 'Родитель';

        if ($this->type == 2)
            return 'Преподаватель';
        
        return 'Ученик';
    }

    public function lead()
    {
        return $this->hasOne(Lesson::class, 'teacher_id', 'id');
    }

    public function lessons()
    {
        return $this->belongsToMany(
            Lesson::class,
            'lesson_students',
            'student_id',
            'lesson_id'
        );
    }

    /**
    * Add new record
    *
    * @param array $fields
    * @return User 
    */
    public static function add($fields)
    {
        $user = new static;
        $user->fill($fields);
        $user->password = bcrypt($fields['password']);
        $user->save();
    
        return $user;
    }

    /**
    * Set and crypt password
    *
    * @param string $value
    */
    public function setPassword($value)
    {
        if (empty($value)) 
            return;

        $this->password = bcrypt($value);
        $this->save();
    }
        
    /**
    * Edit record
    *
    * @param array $fields
    */
    public function edit($fields)
    {
        $this->fill($fields);
        if ($fields['password'] != null) 
            $this->password = bcrypt($fields['password']);

        $this->save();
    }
    
    /**
    * Remove record
    *
    */
    public function remove()
    {
        $this->delete();
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}

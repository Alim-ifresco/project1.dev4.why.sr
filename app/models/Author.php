<?php

/**
 * Class Author
 *
 * @property-read  int    $id
 * @property       string $name
 * @property       string $email
 * @property-read  string $created_at {@type date}
 * @property-read  string $updated_at {@type date}
 * 
 */
class Author extends Eloquent
{
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'authors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ //TODO: edit fillable
        'name',
        'email'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

}

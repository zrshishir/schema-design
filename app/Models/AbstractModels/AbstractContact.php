<?php
/**
 * Model object generated by: Skipper (http://www.skipper18.com)
 * Do not modify this file manually.
 */

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractContact
* @package App\Models\AbstractModels
*
* @property string $id
* @property \Carbon\Carbon $created_at
* @property \Carbon\Carbon $updated_at
* @property string $employee_id
* @property string $email
* @property string $phone
* @property string $created_by
* @property string $updated_by
* @property string $people_id
* @property \App\Models\People|null $people
*/ 
abstract class AbstractContact extends Model
{
    /**  
     * Primary key type.
     * 
     * @var string
     */
    protected $keyType = 'string';
    
    /**  
     * The attributes that should be cast to native types.
     * 
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'employee_id' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'created_by' => 'string',
        'updated_by' => 'string',
        'people_id' => 'string'
    ];
    
    public function people()
    {
        return $this->belongsTo('\App\Models\People', 'people_id', 'id');
    }
}

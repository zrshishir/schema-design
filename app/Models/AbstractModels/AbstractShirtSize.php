<?php
/**
 * Model object generated by: Skipper (http://www.skipper18.com)
 * Do not modify this file manually.
 */

namespace App\Models\AbstractModels;

use Illuminate\Database\Eloquent\Model;

/**
* Class AbstractShirtSize
* @package App\Models\AbstractModels
*
* @property string $id
* @property \Carbon\Carbon $created_at
* @property \Carbon\Carbon $updated_at
* @property string $name
* @property \App\Models\People|null $people
*/ 
abstract class AbstractShirtSize extends Model
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
        'name' => 'string'
    ];
    
    public function people()
    {
        return $this->hasOne('\App\Models\People', 'shirt_size_id', 'id');
    }
}

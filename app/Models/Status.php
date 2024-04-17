<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static create(array $array)
 * @method static findOrFail(string $id)
 */
class Status extends Model
{
    use HasFactory;

    // Nom par défaut utilisé pour la table
    protected $table = 'status';

    protected $fillable = ['title'];

    public function modules(): HasMany
    {
        return $this->hasMany(Module::class);
    }
}

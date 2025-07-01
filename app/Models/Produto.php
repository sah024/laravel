<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produto extends Model
{
    use HasFactory;

    protected $fillable  = [
        'nome', 'preco', 'descricao', 'imagem', 'categoria_id'
    ];

    public function categoria():BelongsTo {
        return $this->belongsTo(Categoria::class);
    }
}

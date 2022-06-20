<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HomeModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'texto_banner1',
        'texto_button1',
        'learn_buttons',
        'partners_buttons',
        'link_video',
        'rede_social1',
        'rede_social2',
        'rede_social3',
        'rede_social4',
        'telefone',
        'endereco',
        'texto_footer',
        'brand_footer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'image_path',
        'featured',
        'order'
    ];

    protected $casts = [
        'featured' => 'boolean',
        'order' => 'integer'
    ];

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public static function getCategories()
    {
        return [
            'Logo Design',
            'Brochure',
            'Branding',
            'UI/UX Design',
            'Banner',
            'Business Card',
            'T-shirt Design'
        ];
    }
}

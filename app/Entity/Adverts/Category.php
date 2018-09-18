<?php

namespace App\Entity\Adverts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Kalnoy\Nestedset\NodeTrait;

/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int|null $parent_id
 *
 * @property int $depth
 * @property Category $parent
 * @property Category $children
 */
class Category extends Model
{
    use NodeTrait;

    protected $table = 'advert_categories';

    public $timestamps = false;

    protected $fillable = ['name', 'slug', 'parent_id'];

    public function attributes()
    {
        return $this->hasMany(Attribute::class, 'category_id', 'id');
    }

    public function parentAttributes()
    {
        return $this->parent ? $this->parent->allAttributes() : collect([]);
    }

    /**
     * @return Attribute[]
     */
    public function allAttributes()
    {
        return $this->parentAttributes()->merge($this->attributes()->orderBy('sort')->get());
    }

    public function getPath()
    {
        return implode('/', array_merge($this->ancestors()->defaultOrder()->pluck('slug')->toArray(), [$this->slug]));
    }
}

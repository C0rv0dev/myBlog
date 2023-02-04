<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post
 * 
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $content
 * @property bool $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Category $category
 * @property Collection|Image[] $images
 *
 * @package App\Models
 */
class Post extends Model
{
	use SoftDeletes, HasFactory;
	protected $table = 'posts';

	protected $casts = [
		'category_id' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'category_id',
		'name',
		'slug',
		'description',
		'content',
		'status'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function images()
	{
		return $this->belongsToMany(Image::class)
					->withPivot('id')
					->withTimestamps();
	}

    public function comments()
    {
        return $this->morphMany(Comment::class, 'item');
    }

	public function setNameAttribute($value)
	{
		$this->attributes['name'] = $value;
		$this->attributes['slug'] = Str::slug($value);
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Project
 * 
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $content
 * @property string|null $company_name
 * @property string|null $company_url
 * @property bool $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Image[] $images
 *
 * @package App\Models
 */
class Project extends Model
{
	use SoftDeletes;
	protected $table = 'projects';

	protected $casts = [
		'status' => 'bool'
	];

	protected $fillable = [
		'name',
		'slug',
		'description',
		'content',
		'company_name',
		'company_url',
		'status'
	];

	public function images()
	{
		return $this->belongsToMany(Image::class)
					->withPivot('id')
					->withTimestamps();
	}
}

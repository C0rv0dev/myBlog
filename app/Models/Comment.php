<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comment
 * 
 * @property int $id
 * @property int $user_id
 * @property string $item_type
 * @property int $item_id
 * @property int $stars
 * @property string $content
 * @property bool $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Comment extends Model
{
	use SoftDeletes, HasFactory;
	protected $table = 'comments';

	protected $casts = [
		'user_id' => 'int',
		'item_id' => 'int',
		'stars' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'item_type',
		'item_id',
		'stars',
		'content',
		'status'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function item()
	{
		return $this->morphTo();
	}
}

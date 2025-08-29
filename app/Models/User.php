<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\CourseProgress; // Impor model CourseProgress
use Illuminate\Support\Facades\Hash; // Impor Hash untuk hashing password

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the course progress for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courseProgress()
    {
        return $this->hasMany(CourseProgress::class, 'user_id');
    }

    /**
     * Create a test user for testing purposes.
     *
     * @param string $name
     * @param string $email
     * @param string $password
     * @return \App\Models\User
     */
    public static function createTestUser($name = 'Test User', $email = 'test@gmail.com', $password = '123')
    {
        return self::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password), // Hash password secara manual
            'email_verified_at' => now(),
        ]);
    }
}
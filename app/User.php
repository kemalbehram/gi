<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

/**
 * @property int $id
 * @property string $name
 * @property string $last_name
 * @property string $avatar
 * @property string $phone
 * @property bool $phone_verified
 * @property bool $phone_auth
 * @property string $email
 * @property string $provider
 * @property string $status
 * @property double $balance
 * @property string $password
 * @property string $verify_token
 * @property string $phone_verify_token
 * @property Carbon $phone_verify_token_expire
 * @property string $role
 */
class User extends Authenticatable
{


    use Notifiable;
    public const STATUS_WAIT = 'wait';
    public const STATUS_ACTIVE = 'active';
    public const ROLE_USER = 'worker';
    public const ROLE_OWNER = 'owner';
    public const ROLE_OWNER_REGION = 'owner_region';
    public const ROLE_MANAGER = 'manager';
    public const ROLE_MANAGER_REGION = 'manager_region';
    public const ROLE_TECHNOLOGIST = 'technologist';
    public const ROLE_TECHNOLOGIST_REGION = 'technologist_region';
    public const ROLE_LABORATORY = 'laboratory';

    protected $fillable = [
        'name', 'email', 'password','status','role'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function register(string $name, string $email, string $password): self
    {
        return static ::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'verify_token' => Str::uuid(),
            'status' => self::STATUS_WAIT,
            'role' => self::ROLE_USER,
        ]);
    }

    public static function new($name, $email): self
    {
        return static ::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt(Str::random()),
            'status' => self::STATUS_ACTIVE,
            'role' => self::ROLE_USER,
        ]);
    }

    public function isWait():bool
    {
        return $this->status === self::STATUS_WAIT;
    }

    public function isActive():bool
    {
        return $this->status === self::STATUS_ACTIVE;
    }

    public function verify(): void
    {
        if(!$this->isWait()){
            flash('Користувач уже верифікований')->important();
        }
        $this->update([
            'verify_token' => null,
            'status' => self::STATUS_ACTIVE,
        ]);

    }
    public function username(): string
    {
        return $this->name;
    }
    public function changeRole($role): void
    {
        if (!\in_array($role, [self::ROLE_USER,self::ROLE_MANAGER,
            self::ROLE_MANAGER_REGION, self::ROLE_OWNER,
            self::ROLE_OWNER_REGION, self::ROLE_LABORATORY,
            self::ROLE_TECHNOLOGIST, self::ROLE_TECHNOLOGIST_REGION ],
        true)){
            throw new \DomainException('Доступ вже наданий.');
        }
        $this->update(['role' => $role]);
    }
    public function isOwner(){
        return $this->role === self::ROLE_OWNER;
    }
    public function isOwnerRegion(){
        return $this->role === self::ROLE_OWNER_REGION;
    }
    public function isManagerRegion(){
        return $this->role === self::ROLE_MANAGER_REGION;
    }
    public function isManager(){
        return $this->role === self::ROLE_MANAGER;
    }
    public function isTechnologistRegion(){
        return  $this->role === self::ROLE_TECHNOLOGIST_REGION;
    }
    public function isTechnologist(){
        return $this->role === self::ROLE_TECHNOLOGIST;
    }
    public function isLaboratory(){
        return $this->role === self::ROLE_LABORATORY;
    }
    public function isUser(){
        return $this->role === self::ROLE_USER;
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_attending',
    ];

    public function getName (): string
    {
        return $this->name;
    }

    public function getIsAttending (): bool
    {
        return $this->is_attending;
    }

    public function setIsAttending (int $isAttending): void
    {
        $this->is_attending = $isAttending;
    }

    public function setName (string $name): void
    {
        $this->name = $name;
    }
}

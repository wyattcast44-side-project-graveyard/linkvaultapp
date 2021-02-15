<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

use function PHPUnit\Framework\isNull;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function signIn(User $user = null)
    {
        if (isNull($user)) {
            $user = User::factory()->create();
        }

        $this->actingAs($user);

        return $user;
    }
}
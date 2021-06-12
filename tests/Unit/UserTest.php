<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Course;

class UserTest extends TestCase
{

	public function test_it_user_can_subscribe_to_course()
	{
        $user = User::factory()->create();

		$article = Course::factory()->create();

		$user->subscribe($article);

		$subscribed = $article->isSubscribedBy($user);

		$this->assertTrue($subscribed);
	}

	public function test_it_user_have_zero_subscriptions()
	{
        $user = User::factory()->create();

		$count = $user->subscriptions()->count();

		$this->assertIsInt($count);
	}
}

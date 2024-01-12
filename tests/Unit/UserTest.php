<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;
class UserTest extends TestCase
{

    public function test_login_form()
     {
        $response = $this->get("/login");
        $response->assertStatus(200);
    }
    public function test_user_duplicates(){
        $user1 = User::make([
            "name"=> "Felix",
            "email"=> "fomundi34@gmail.com",
        ]);
        $user2 = User::make([
            "name"=> "Ka",
            "email"=> "omundifelix30@gmail.com",
        ]);
        $this->assertTrue($user1->name != $user2->name);
    }
}

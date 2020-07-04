<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

class StoreTest extends TestCase
{
    use CreatesApplication;

    public function test_store_creation_works()
    {
        $this->post('store',[
            'name' => '雅迪'
        ]);

        $this->seeInDatabase('store',[
            'name' => '雅迪'
        ])
    }

    public function test_full_name_accessor_works()
    {
        $store = factory(Store::class)->make([
            'name' => '雅迪',
            'phone' => '13343434993'
        ])
    }

}
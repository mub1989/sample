<?php

namespace Tests\Unit;

use App\Models\Artical;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticalTest extends TestCase
{
    //use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateArtical()
    {
        //factory(Artical::class,3)->make();
        $data = [
            'title' => 'test',
            'description' => 'test',
            'body' => 'test',
        ];
        $this->json('POST','api/articals',$data);
        $this->assertTrue(true);
    }

    public function testUpdateArtical()
    {
        $data = [
            'title' => 'test',
            'description' => 'testtttttt',
            'body' => 'test',
            '_method' => 'PUT',
        ];
        $this->json('PUT','api/articals/2',$data);
        $this->assertTrue(true);
    }
}

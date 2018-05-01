<?php

namespace Tests\Unit;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class Dummy extends Model
{
    protected $fillable = ['expires_at'];
    protected $dates = ['expires_at'];
}

class WhereYearTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function can_query_with_int_year()
    {
        Dummy::create(['expires_at' => Carbon::create(2013, 10, 12)]);
        Dummy::create(['expires_at' => Carbon::create(2012, 10, 12)]);
        Dummy::create(['expires_at' => Carbon::create(2013, 10, 12)]);
        Dummy::create(['expires_at' => Carbon::create(2011, 10, 12)]);

        dump(Dummy::whereYear('expires_at', '2013')->toSql());
        dump(Dummy::whereYear('expires_at', 2013)->toSql());

        $this->assertCount(4, Dummy::get());
        $this->assertCount(2, Dummy::whereYear('expires_at', '2013')->get(), 'Failed to query with string year');
        $this->assertCount(2, Dummy::whereYear('expires_at', 2013)->get(), 'Failed to query with int year');
    }
}

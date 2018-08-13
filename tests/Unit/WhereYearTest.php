<?php

namespace Tests\Unit;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
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

    /** @test */
    public function whereDate_has_consistent_behaviour()
    {
        Dummy::create(['expires_at' => Carbon::create(2013, 10, 13)]);
        Dummy::create(['expires_at' => Carbon::create(2012, 11, 12)]);
        Dummy::create(['expires_at' => Carbon::create(2015, 12, 11)]);
        Dummy::create(['expires_at' => Carbon::create(2011, 10, 10)]);

        $this->assertCount(4, Dummy::get());

        $dateLimit = Carbon::create(2014, 1, 1);

        $query = Dummy::whereDate('expires_at', '<', $dateLimit)
                      ->orderByDesc('expires_at')
                      ->offset(0)
                      ->take(1);

        dump($query->toSql(), $query->get()->pluck('expires_at')->map->format('Y-m-d'));
    }

}

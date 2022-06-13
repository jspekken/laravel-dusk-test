<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    public function test_it_can_visit_a_normal_domain(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('no-domain-route')->assertSee('very cool');
        });
    }

    public function test_it_can_visit_a_subdomain()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('domain-route')->assertSee('very cool');
        });
    }
}

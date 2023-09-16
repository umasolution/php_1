<?php

namespace Tests\Unit\Commands;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use PHPUnit\Framework\Attributes\RunClassInSeparateProcess;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

#[RunClassInSeparateProcess]
class SetupDocumentationTest extends TestCase
{
    use DatabaseTransactions;

    #[Test]
    public function it_run_scribe_setup(): void
    {
        $this->artisan('scribe:setup', ['--clean' => true, '--force' => true, '-q' => true])
            ->assertExitCode(0);
    }
}

<?php
namespace Alura\Leilao\Tests\Service;

use PHPUnit\Framework\TestCase;
use Alura\Leilao\Service\Encerrador;

class encerradorTest extends TestCase
{
    /** @test */
    public function test_leiloescommaisdeumasemanadevemserencerrados()
    {
        $fiat147 = new Leilao(
            'Fiat 147 0KM',
            new \DateTimeImmutable('8 days ago')
        );
        $encerrador = new Encerrador();
        $encerrador->encerra();
    }
        
}
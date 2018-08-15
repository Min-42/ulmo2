<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Logout
{
    /**
     * @Route("/aurevoir", name="aurevoir")
     */
    public function AuRevoir()
    {
        return new Response(
            '<html><body>Au revoir</body></html>'
        );
    }
}
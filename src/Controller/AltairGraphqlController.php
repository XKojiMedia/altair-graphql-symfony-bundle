<?php

namespace XKojiMedia\Bundle\AltairGraphqlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AltairGraphqlController extends AbstractController
{
    private $graphqlEndpoint;

    public function __construct($graphqlEndpoint)
    {
        $this->graphqlEndpoint = $graphqlEndpoint;
    }

    public function index()
    {
        return $this->render('@AltairGraphql/altair.html.twig', [
            'endpoint' => $this->graphqlEndpoint,
        ]);
    }
}

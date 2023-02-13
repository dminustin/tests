<?php

namespace App\Controller;

use App\Factory\InteractorFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class SettingsController extends AbstractController
{
    #[Route('/settings/{service}/set', name: 'app_settings_get', methods: ['GET', 'POST'])]
    public function setSettings(string $service, Request $request, ValidatorInterface $validator): Response
    {
        $interactor = InteractorFactory::getByName($service);
        $interactor->setSettings();

        return $this->render('settings/set.html.twig', [
            'service' => $interactor->getMicroserviceName(),
        ]);
    }

    #[Route('/settings/{service}/get', name: 'app_settings_get', methods: ['GET', 'POST'])]
    public function getSettings(string $service): Response
    {
        $interactor = InteractorFactory::getByName($service);

        return $this->render('settings/get.html.twig', [
            'service' => $interactor->getMicroserviceName(),
            'settings' => $interactor->getSettings(),
        ]);
    }
}

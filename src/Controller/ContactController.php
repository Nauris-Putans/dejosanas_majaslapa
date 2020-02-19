<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Mailer\Emailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends AbstractController
{
    /**
     * @Route("/kontakti", name="kontakti")
     */
    public function kontakti(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $contactFormData = $form->getData();
            dump($contactFormData);

            $message = (new \Swift_Message('Jūs esat saņemis vēstuli!'))
                ->setFrom($contactFormData['email'])
                ->setTo('test@inbox.lv')
                ->setBody(
                    $contactFormData['message'],
                    'text/plain'
                );

            $mailer->send($message);
            $this->addFlash('succsess', 'Veiksmigi ir aizsutīta ziņa.');
            return $this->redirectToRoute('kontakti');
        }

        return $this->render('contact/contacts.html.twig', [
            'our_form' => $form->createView()
        ]);
    }
}

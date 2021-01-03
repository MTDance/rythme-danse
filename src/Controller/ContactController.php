<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    /**
     * @Route("/paiement", name="paiement")
     */
    public function paiement()
    {
        return $this->render('contact/paiement.html.twig');
    }

    /**
     * @Route("/success", name="success")
     */
    public function success()
    {
        return $this->render('contact/success.html.twig', [

        ]);
    }

    /**
     * @Route("/error", name="error")
     */
    public function error()
    {
        return $this->render('contact/error.html.twig', [

        ]);
    }

       /**
     *
     * 
     * 
     * A partir de là ce sont les vues des 4 cours de danse
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     */


    /**
     * @Route("/eveil_payment", name="eveil_payment")
     */
    public function eveil_payment()
    {
        return $this->render('contact/eveil_payment.html.twig', [

        ]);
    }

    /**
     * @Route("/1cours_payment", name="1courspayment")
     */
    public function cours_payment()
    {
        return $this->render('contact/1courspayment.html.twig');
    }

    /**
     * @Route("/1cours_payment_enfant", name="1courspayment_enfant")
     */
    public function cours_payment_enfant()
    {
        return $this->render('contact/1courspayment_enfant.html.twig');
    }

    /**
     * @Route("/1cours_payment_adulte", name="1courspayment_adulte")
     */
    public function cours_payment_adulte()
    {
        return $this->render('contact/1courspayment_adulte.html.twig');
    }

    /**
     * @Route("/2cours_payment", name="2courspayment")
     */
    public function deux_cours_payment()
    {
        return $this->render('contact/2courspayment.html.twig');
    }

    /**
     * @Route("/2cours_payment_enfant", name="2courspayment_enfant")
     */
    public function deux_cours_payment_enfant()
    {
        return $this->render('contact/2courspayment_enfant.html.twig');
    }

    /**
     * @Route("/2cours_payment_adulte", name="2courspayment_adulte")
     */
    public function deux_cours_payment_adulte()
    {
        return $this->render('contact/2courspayment_adulte.html.twig');
    }

    /**
     * @Route("/3cours_payment", name="3courspayment")
     */
    public function trois_cours_payment()
    {
        return $this->render('contact/3courspayment.html.twig');
    }

    /**
     * @Route("/3cours_payment_enfant", name="3courspayment_enfant")
     */
    public function trois_cours_payment_enfant()
    {
        return $this->render('contact/3courspayment_enfant.html.twig');
    }

    /**
     * @Route("/3cours_payment_adulte", name="3courspayment_adulte")
     */
    public function trois_cours_payment_adulte()
    {
        return $this->render('contact/3courspayment_adulte.html.twig');
    }

    /**
     * @Route("/4cours_payment", name="4courspayment")
     */
    public function quatre_cours_payment()
    {
        return $this->render('contact/4courspayment.html.twig');
    }

    /**
     * @Route("/4cours_payment_enfant", name="4courspayment_enfant")
     */
    public function quatre_cours_payment_enfant()
    {
        return $this->render('contact/4courspayment_enfant.html.twig');
    }

    /**
     * @Route("/4cours_payment_adulte", name="4courspayment_adulte")
     */
    public function quatre_cours_payment_adulte()
    {
        return $this->render('contact/4courspayment_adulte.html.twig');
    }

    /**
     *
     * 
     * 
     * A partir de là ce sont les tarifs des 4 cours de danse à l'année
     * avec l'utilisation stripe
     * 
     * 
     * 
     * 
     * 
     * 
     * 
     */

    /**
     * Tarif cours Eveil
     * @Route("/create-checkout-session", name="checkout")
     */
    public function checkout()
    {
        // installation de la clé privée
        \Stripe\Stripe::setApiKey('sk_test_51HtCJ1JN4HFVflDj73HeHqZAry5HfOT6cD5ZuRkRHi2GaAjmhU6sqbQofir3nDKbTR44drcjaBtYJ9QOxK69omti00DgkmSOly');

        // ce bout de code veut savoir ce qu'on veut dans notre paiement
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            // Tout ce qui concerne le produit
            'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => 'Tarif Eveil Rythme Danse',
                ],
                'unit_amount' => 21500,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            // création de lien vers url en cas de succes ou en cas d'echecs
            // url GeneratorInterface est une url absolu
            'success_url' => $this->generateUrl('success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error', [], UrlGeneratorInterface::ABSOLUTE_URL),
          ]);

        return new JsonResponse([ 'id' => $session->id ]);
    }

    /**
     * @Route("/1cours_enfant", name="1cours_enfant")
     */
    public function un_cours_enfant()
    {
        // installation de la clé privée
        \Stripe\Stripe::setApiKey('sk_test_51HtCJ1JN4HFVflDj73HeHqZAry5HfOT6cD5ZuRkRHi2GaAjmhU6sqbQofir3nDKbTR44drcjaBtYJ9QOxK69omti00DgkmSOly');

        // ce bout de code veut savor ce qu'on veut dans notre paiement
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            // Tout ce qui concerne le produit
            'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => 'Tarif 1 cours enfant/étudiant Rythme Danse',
                ],
                'unit_amount' => 29000,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            // création de lien vers url en cas de succes ou en cas d'echecs
            // url GeneratorInterface est une url absolu
            'success_url' => $this->generateUrl('success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error', [], UrlGeneratorInterface::ABSOLUTE_URL),
          ]);

        return new JsonResponse([ 'id' => $session->id ]);
    }

    /**
     * @Route("/2cours_enfant", name="2cours_enfant")
     */
    public function deux_cours_enfant()
    {
        // installation de la clé privée
        \Stripe\Stripe::setApiKey('sk_test_51HtCJ1JN4HFVflDj73HeHqZAry5HfOT6cD5ZuRkRHi2GaAjmhU6sqbQofir3nDKbTR44drcjaBtYJ9QOxK69omti00DgkmSOly');

        // ce bout de code veut savor ce qu'on veut dans notre paiement
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            // Tout ce qui concerne le produit
            'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => 'Tarif 2 cours enfant/étudiant Rythme Danse',
                ],
                'unit_amount' => 46500,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            // création de lien vers url en cas de succes ou en cas d'echecs
            // url GeneratorInterface est une url absolu
            'success_url' => $this->generateUrl('success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error', [], UrlGeneratorInterface::ABSOLUTE_URL),
          ]);

        return new JsonResponse([ 'id' => $session->id ]);
    }

    /**
     * @Route("/3cours_enfant", name="3cours_enfant")
     */
    public function trois_cours_enfant()
    {
        // installation de la clé privée
        \Stripe\Stripe::setApiKey('sk_test_51HtCJ1JN4HFVflDj73HeHqZAry5HfOT6cD5ZuRkRHi2GaAjmhU6sqbQofir3nDKbTR44drcjaBtYJ9QOxK69omti00DgkmSOly');

        // ce bout de code veut savor ce qu'on veut dans notre paiement
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            // Tout ce qui concerne le produit
            'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => 'Tarif 3 cours enfant/étudiant Rythme Danse',
                ],
                'unit_amount' => 61000,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            // création de lien vers url en cas de succes ou en cas d'echecs
            // url GeneratorInterface est une url absolu
            'success_url' => $this->generateUrl('success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error', [], UrlGeneratorInterface::ABSOLUTE_URL),
          ]);

        return new JsonResponse([ 'id' => $session->id ]);
    }

    /**
     * @Route("/4cours_enfant", name="4cours_enfant")
     */
    public function quatre_cours_enfant()
    {
        // installation de la clé privée
        \Stripe\Stripe::setApiKey('sk_test_51HtCJ1JN4HFVflDj73HeHqZAry5HfOT6cD5ZuRkRHi2GaAjmhU6sqbQofir3nDKbTR44drcjaBtYJ9QOxK69omti00DgkmSOly');

        // ce bout de code veut savor ce qu'on veut dans notre paiement
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            // Tout ce qui concerne le produit
            'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => 'Tarif 4 cours enfant/étudiant Rythme Danse',
                ],
                'unit_amount' => 72500,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            // création de lien vers url en cas de succes ou en cas d'echecs
            // url GeneratorInterface est une url absolu
            'success_url' => $this->generateUrl('success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error', [], UrlGeneratorInterface::ABSOLUTE_URL),
          ]);

        return new JsonResponse([ 'id' => $session->id ]);
    }

    /**
     * @Route("/1cours_adulte", name="1cours_adulte")
     */
    public function un_cours_adulte()
    {
        // installation de la clé privée
        \Stripe\Stripe::setApiKey('sk_test_51HtCJ1JN4HFVflDj73HeHqZAry5HfOT6cD5ZuRkRHi2GaAjmhU6sqbQofir3nDKbTR44drcjaBtYJ9QOxK69omti00DgkmSOly');

        // ce bout de code veut savor ce qu'on veut dans notre paiement
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            // Tout ce qui concerne le produit
            'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => 'Tarif 1 Cours Adulte Rythme Danse',
                ],
                'unit_amount' => 35000,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            // création de lien vers url en cas de succes ou en cas d'echecs
            // url GeneratorInterface est une url absolu
            'success_url' => $this->generateUrl('success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error', [], UrlGeneratorInterface::ABSOLUTE_URL),
          ]);

        return new JsonResponse([ 'id' => $session->id ]);
    }

    /**
     * @Route("/2cours_adulte", name="2cours_adulte")
     */
    public function deux_cours_adulte()
    {
        // installation de la clé privée
        \Stripe\Stripe::setApiKey('sk_test_51HtCJ1JN4HFVflDj73HeHqZAry5HfOT6cD5ZuRkRHi2GaAjmhU6sqbQofir3nDKbTR44drcjaBtYJ9QOxK69omti00DgkmSOly');

        // ce bout de code veut savor ce qu'on veut dans notre paiement
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            // Tout ce qui concerne le produit
            'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => 'Tarif 2 Cours Adulte Rythme Danse',
                ],
                'unit_amount' => 56000,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            // création de lien vers url en cas de succes ou en cas d'echecs
            // url GeneratorInterface est une url absolu
            'success_url' => $this->generateUrl('success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error', [], UrlGeneratorInterface::ABSOLUTE_URL),
          ]);

        return new JsonResponse([ 'id' => $session->id ]);
    }

    /**
     * @Route("/3cours_adulte", name="3cours_adulte")
     */
    public function trois_cours_adulte()
    {
        // installation de la clé privée
        \Stripe\Stripe::setApiKey('sk_test_51HtCJ1JN4HFVflDj73HeHqZAry5HfOT6cD5ZuRkRHi2GaAjmhU6sqbQofir3nDKbTR44drcjaBtYJ9QOxK69omti00DgkmSOly');

        // ce bout de code veut savor ce qu'on veut dans notre paiement
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            // Tout ce qui concerne le produit
            'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => 'Tarif 3 cours adulte Rythme Danse',
                ],
                'unit_amount' => 73500,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            // création de lien vers url en cas de succes ou en cas d'echecs
            // url GeneratorInterface est une url absolu
            'success_url' => $this->generateUrl('success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error', [], UrlGeneratorInterface::ABSOLUTE_URL),
          ]);

        return new JsonResponse([ 'id' => $session->id ]);
    }

    /**
     * @Route("/4cours_adulte", name="4cours_adulte")
     */
    public function quatre_cours_adulte()
    {
        // installation de la clé privée
        \Stripe\Stripe::setApiKey('sk_test_51HtCJ1JN4HFVflDj73HeHqZAry5HfOT6cD5ZuRkRHi2GaAjmhU6sqbQofir3nDKbTR44drcjaBtYJ9QOxK69omti00DgkmSOly');

        // ce bout de code veut savor ce qu'on veut dans notre paiement
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            // Tout ce qui concerne le produit
            'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => 'Tarif 4 cours adulte Rythme Danse',
                ],
                'unit_amount' => 94500,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            // création de lien vers url en cas de succes ou en cas d'echecs
            // url GeneratorInterface est une url absolu
            'success_url' => $this->generateUrl('success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error', [], UrlGeneratorInterface::ABSOLUTE_URL),
          ]);

        return new JsonResponse([ 'id' => $session->id ]);
    }

}

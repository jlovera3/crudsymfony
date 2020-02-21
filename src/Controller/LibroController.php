<?php

namespace App\Controller;

use App\Entity\Libro;
use App\Form\LibroType;
use App\Repository\LibroRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/libro")
 */
class LibroController extends AbstractController
{
    /**
     * @Route("/", name="libro_index", methods={"GET"})
     */
    public function index(LibroRepository $libroRepository): Response
    {
        return $this->render('libro/index.html.twig', [
            'libros' => $libroRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="libro_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $libro = new Libro();
        $form = $this->createForm(LibroType::class, $libro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $brochureFile */
            $brochureFile = $form['brochure']->getData();

            // This condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // This is needed to safely include the file name as part of the URL
                // Enable "Intl" extension in "php.ini"
                // https://stackoverflow.com/questions/33869521/how-can-i-enable-php-extension-intl
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // Updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $product->setBrochureFilename($newFilename);
            }

            // ... persist the $product variable or any other work
            return $this->redirectToRoute('libro_index');
        }

        return $this->render('libro/new.html.twig', [
            'libro' => $libro,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="libro_show", methods={"GET"})
     */
    public function show(Libro $libro): Response
    {
        return $this->render('libro/show.html.twig', [
            'libro' => $libro,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="libro_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Libro $libro): Response
    {
        $form = $this->createForm(LibroType::class, $libro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('libro_index');
        }

        return $this->render('libro/edit.html.twig', [
            'libro' => $libro,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="libro_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Libro $libro): Response
    {
        if ($this->isCsrfTokenValid('delete'.$libro->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($libro);
            $entityManager->flush();
        }

        return $this->redirectToRoute('libro_index');
    }
}

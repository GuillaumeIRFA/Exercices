<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Articles;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="blog")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Articles::class);
        $articles = $repo->findAll();

        return $this->render('blog/index.html.twig', [
            'controller_name' => 'Les articles',
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/{id}", name="blog_article")
     */
    public function afficheUnArticle($id): Response
    {
        $repo = $this->getDoctrine()->getRepository(Articles::class);
        $article = $repo->find($id);

        return $this->render('blog/article.html.twig', [
            'article' => $article
        ]);
    }
}

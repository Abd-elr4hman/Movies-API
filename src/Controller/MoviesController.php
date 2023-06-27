<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;


class MoviesController extends AbstractController
{
    private $em;

    #[Route('/api/v1/movies', name: 'all_movies', methods:['GET'])]
    public function allMovies(MovieRepository $movieRepository, EntityManagerInterface $em, SerializerInterface $serializer, Request $request): JsonResponse
    {
        // retrieve query params
        $page= $request->query->get('page');
        $order= $request->query->get('order');
        $title= $request->query->get('title');
        $releaseYear= $request->query->get('releaseYear');

        // if (isset($page)) {
        //     // get all movies paginated
        //     $movies = $movieRepository->findAllPaginated($page);
            
        // } elseif ($order) {
        //     // get all movies
        //     $movies = $movieRepository->findBy([], ["releaseYear" => $order]);
            
        // } elseif  ($title) {
        //     // get all movies
        //     $movies = $movieRepository->findBy(["title"=>$title]);
            
        // }else {
        //     $movies = $movieRepository->findAll();
        // }

        // filters
        $filters = array();
        if ($title){
            $filters["title"] = $title;
        }
        if ($releaseYear){
            $filters["releaseYear"] = $releaseYear;
        }

        // pagination
        if ($page) {

        }else {
            $page = 0;
        }
        $limit = 10;
        $offset = ($limit * $page) ;

        // order
        if ($order){

        }else {
            $order = array("title" => "ASC");
        }
        // get queried movies
        $movies = $movieRepository->findBy($filters, $order, $limit, $offset);
        

        // serialize the data 
        $data = $serializer->serialize($movies, JsonEncoder::FORMAT);
        return new JsonResponse($data, Response::HTTP_OK, [], true);
    }

    #[Route('/api/v1/movies/{id}', name: 'get_one_movie', methods:['GET'])]
    public function getOneMovie(MovieRepository $movieRepository, SerializerInterface $serializer, $id): JsonResponse
    {
        // find the movie by id
        $movie = $movieRepository->find($id);

        // check if a movie with given id exists
        if (!$movie) {
            return new JsonResponse("not found", Response::HTTP_NOT_FOUND, [], true);
        }

        // serialize to json and respond
        $data = $serializer->serialize($movie, JsonEncoder::FORMAT);

        return new JsonResponse($data, Response::HTTP_OK, [], true);
    }

    #[Route('/api/v1/movies', name: 'create_one_movie', methods:['POST'])]
    public function createOneMovie(EntityManagerInterface $em, Request $request): JsonResponse
    {
        $movie = new Movie();
        $parameters= json_decode($request->getContent(), true);
        // dd($parameters);

        if (isset($parameters['title'])){
            $movie->setTitle($parameters['title']);
        }
        
        if (isset($parameters['title'])){
            $movie->setReleaseYear($parameters['releaseYear']);
        }
        
        if (isset($parameters['title'])){
            $movie->setDescription($parameters['description']);
        }

        if (isset($parameters['title'])){
            $movie->setImagePath($parameters['imagePath']);
        }

        $em->persist($movie);
        $em->flush();

        return new JsonResponse("Created Succesfully!", Response::HTTP_OK, [], true);
    }

    #[Route('/api/v1/movies/{id}', name: 'delete_one_movie', methods:['DELETE'])]
    public function deleteOneMovie(MovieRepository $movieRepository, EntityManagerInterface $em, $id): JsonResponse
    {
        // find the movie by id
        $movie = $movieRepository->find($id);

        // check if a movie with given id exists
        if (!$movie) {
            return new JsonResponse("not found", Response::HTTP_NOT_FOUND, [], true);
        }

        // remove
        $em->remove($movie);
        $em->flush();

        return new JsonResponse("Removed Succesfully!", Response::HTTP_OK, [], true);
    }

    #[Route('/api/v1/movies/{id}', name: 'update_one_movie', methods:['PUT'])]
    public function updateOneMovie(MovieRepository $movieRepository, EntityManagerInterface $em, Request $request, $id): JsonResponse
    {
        // find the movie by id
        $movie = $movieRepository->find($id);

        // decode the request
        $parameters= json_decode($request->getContent(), true);
        // dd($parameters);

        if (isset($parameters['title'])){
            $movie->setTitle($parameters['title']);
        }
        
        if (isset($parameters['releaseYear'])){
            $movie->setReleaseYear($parameters['releaseYear']);
        }
        
        if (isset($parameters['description'])){
            $movie->setDescription($parameters['description']);
        }

        if (isset($parameters['imagePath'])){
            $movie->setImagePath($parameters['imagePath']);
        }

        $em->persist($movie);
        $em->flush();

        return new JsonResponse("Updated Succesfully!", Response::HTTP_OK, [], true);
    }
}

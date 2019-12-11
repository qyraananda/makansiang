<?php
// src/Controller/RecipeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Recipe;

class RecipeController extends AbstractController
{
    // public function recipe()
    // {
        
    //     return new Response(
    //        // var_dump($this->datarecipe())
    //        var_dump($this->dataingredients())
    //     );
    // }
	 public function recipe()
    {
        $resep = $this->datarecipe();
        $bahan = $this->dataingredients();

        return $this->render('recipe/base.html.twig', [
            'resep' => $resep,
            'bahan' => $bahan,
        ]);
    }

    function datarecipe(){
    	$bahan = $this->dataingredients();

   		$data = file_get_contents("http://localhost/fresh-recipes/src/App/Recipe/data.json");
		$json = json_decode($data, TRUE);

		return $json["recipes"];
		
    }

    function dataingredients(){
      	$data = file_get_contents("http://localhost/fresh-recipes/src/App/Ingredient/data.json");
		$json = json_decode($data, TRUE);
		return $json["ingredients"];
    }
}
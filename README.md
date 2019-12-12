# makansiang
Lunch Ingredients

<h2>Keterangan</h2>
Lunch Ingredients ini merupakan aplikasi sederhana untuk menampilkan daftar makan siang beserta bahan-bahan yg digunakan beserta expirednya.

<h2>Framework</h2>
Install Symfony micro framework (https://symfony.com/doc/current/setup.html).
Install TWIG untuk frontendnya https://symfony.com/doc/current/quick_tour/flex_recipes.html.

<h2>JSON Data</h2>
Sumber datanya berupa file json untuk <a href="https://github.com/qyraananda/makansiang/tree/master/src/App/Recipe">Recipe</a>
dan <a href="https://github.com/qyraananda/makansiang/tree/master/src/App/Ingredient">Ingredients</a>

<h2>Setting</h2>
Setting route.yml 

<pre>
#index:
#    path: /
#    controller: App\Controller\DefaultController::index
app_fresh_recipes:
    path: /app/recipe
    controller: App\Controller\RecipeController::recipe
</pre>


<h2>Screenshot</h2>
<img src="https://github.com/qyraananda/makansiang/blob/master/screen.png">

if (typeof String.prototype.startsWith != 'function') {
  String.prototype.startsWith = function (str){
    return this.indexOf(str) === 0;
  };
}

<?php
include("easyFoodLogic.php");
getIngredientes();
// definimos un array de valores en php
$arrayPHP=$ingredientesMostrar;
?>
<script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var arrayJS=<?php echo json_encode($arrayPHP);?>;
 
    // Mostramos los valores del array
    for(var i=0;i<arrayJS.length;i++)
    {
        document.write("<br>"+arrayJS[i]);
    }
</script>

function RecipesViewModel() {
  var self = this;

  self.ingredients = [arrayJS];
  self.matchingIngredients = ko.observable([]);
  self.ingredientsQuery = ko.observable("");
  self.ingredientsQuery.subscribe(function(newQuery) {
    var _matchingIngredients = [];
    if (newQuery != "") {
      for (var i = self.ingredients.length - 1; i >= 0; i--) {
        if (self.ingredients[i].toLowerCase().startsWith(newQuery.toLowerCase())) {
          _matchingIngredients.push({
            name: self.ingredients[i]
          });
        }     
      };
    }
    self.matchingIngredients(_matchingIngredients);
  });
  self.selectedIngredients = ko.observableArray([]);
  self.addIngredient = function() {
    if (self.selectedIngredients.indexOf(this) < 0) {
      self.selectedIngredients.push(this);
    }
  };
  self.removeIngredient = function() {
    self.selectedIngredients.remove(this);
  };
  self.searchRecipes = function() {
    var ingredientNames = [];
    var _selectedIngredients = self.selectedIngredients();
    for (var i = _selectedIngredients.length - 1; i >= 0; i--) {
      ingredientNames.push(_selectedIngredients[i].name);
    };
    console.log(ingredientNames);
    alert("Pendiente");
    var markersField = document.getElementById('markers');
        var markers = ingredientNames;
        markersField.value = JSON.stringify(markers);
  }

}

<?php
$_SESSION["ii"] = json_decode($_POST['markers']);
?>

ko.applyBindings(new RecipesViewModel());


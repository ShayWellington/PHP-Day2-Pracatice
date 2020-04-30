<?php
$title = "Varieties";
$description ="Description of the Varieties page";
require("templates/header.php");

?>

<div class=" row mt-5">

<div class="col">
  <?php
      $src="images/Coffee/caffe_americano.jpg";
      $coffeeName="Americano";
      $instructions="
      DESCRIPTION
      The espresso (aka “short black”) is the foundation and the most important part
         to every espresso based drink. So much so that we’ve written a guide on how to make
         the perfect espresso shot. But for the purposes of this post an espresso consists of:
        • 1 Shot of espresso in an espresso cup";
        $link="https://www.starkinsider.com/2011/12/how-to-make-a-caffe-americano-in-5-easy-steps.html ";
        require("templates/card.php");
    ?>
  </div>


  <div class="col">
    <?php
        $src="images/Coffee/white-chocolate-peppermint-mocha.jpg";
        $coffeeName="Mocha";
        $instructions="
        DESCRIPTION
        A long macchiato is the same as a short macchiato but with a double shot of espresso.
          The same rule of thirds applies in the traditionally made long macchiato:
          • 2 shots of espresso in a tumbler glass or cup• A dollop of steamed milk and
           foam placed on top of the espresso";
          $link="https://www.bbcgoodfood.com/recipes/mocha";
          require("templates/card.php");
      ?>
    </div>

    <div class="col">
      <?php
          $src="images/Coffee/irish coffee.jpg";
          $coffeeName="Irish Coffee";
          $instructions="
          DESCRIPTION
          Fill footed mug or a mug with hot water to preheat it, then empty.
          Pour piping hot coffee into warmed glass until it is about 3/4 full.
          Add the brown sugar and stir until completely dissolved. Blend in Irish whiskey.
          Top with a collar of the whipped heavy cream by pouring gently over back of spoon.
          Serve hot.";
            $link="https://www.foodnetwork.com/recipes/original-irish-coffee-recipe-1915164";
            require("templates/card.php");
        ?>
      </div>


  </div>

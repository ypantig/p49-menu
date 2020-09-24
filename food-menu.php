<?php

require('./inc/utils.php');
require('./inc/food-menu.php');

get_header();

?>

<div class="row align-items-start pt-5">
  <div class="col-10 pt-5 border-bottom">
    <div class="row align-items-end">
      <div class="col-6">
        <h2>Street Kitchen</h2>
      </div>

      <div class="col-6 text-right">
        <h1 class="font-weight-bold text-uppercase">Food Menu</h1>
      </div>
    </div>
  </div>

  <div class="col-2">
    <img width="80%" class="pl-5 position-absolute" src="./assets/images/p49-logo.png" alt="Parallel 49 Brewing Company" />
  </div>
</div>

<div class="row border-bottom mb-5">
  <?php foreach(food_menu() as $key => $column): ?>
    <div class="col-12 col-md-6 pt-5 <?php echo $key === 0 ? 'border-right' : ''; ?>">
      <?php foreach($column as $group): ?>
        <div class="inner mb-5 <?php echo $key === 0 ? 'pr-md-5' : 'pl-md-5'; ?>">
          <h3 class="font-weight-bold text-uppercase <?php if (isset($group['desc'])) echo 'text-center'; ?>">
            <?php echo $group['title'] ?>
          </h3>

          <?php if (isset($group['desc'])): ?>
            <p class="mb-4 text-center col-9 mx-auto"><?php echo $group['desc'] ?></p>
          <?php endif; ?>

          <?php foreach ($group['menu'] as $item): ?>
            <dl>
              <dt class="row">
                <h4 class="h5 col-10 mt-3">
                  <?php echo $item['title']; ?>

                  <?php if (isset($item['gf'])): ?>
                    <img width="30" src="./assets/images/gluten-free.png" alt="Gluten Free" />
                  <?php endif; ?>

                  <?php if (isset($item['v'])): ?>
                    <img width="30" src="./assets/images/vegetarian.png" alt="Vegetarian" />
                  <?php endif; ?>
                </h4>

                <span class="col-2 text-right"><?php echo $item['price']; ?></span>
              </dt>

              <?php if (isset($item['desc'])): ?>
              <dd>
                <span class="pr-5">
                  <?php echo $item['desc']; ?>
                </span>
              </dd>
              <?php endif; ?>
            </dl>
          <?php endforeach ?>
        </div>
      <?php endforeach ?>
    </div>
  <?php endforeach ?>
</div>

<?php
get_footer();

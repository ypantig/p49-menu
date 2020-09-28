<div class="col-12 col-md-6 pt-md-5 <?php echo $key === 0 ? 'border-md-right' : ''; ?>">
  <?php foreach($column as $index => $group): ?>
    <div class="inner mb-5 <?php echo $key === 0 ? 'pr-md-5' : 'pl-md-5'; ?> <?php echo $index > 0 || $key > 0 ? 'pt-5' : ''; ?> pt-md-5 <?php echo $key === 0 && $index === 0 ? 'border-0' : 'border-top'; ?> <?php echo $key > 0 && $index === 0 ? 'border-md-0' : ''; ?>">
      <h3 class="font-weight-bold text-uppercase <?php if (isset($group['desc'])) echo 'text-center'; ?>">
        <?php echo $group['title'] ?>
      </h3>

      <?php if (isset($group['desc'])): ?>
        <p class="mb-4 text-center col-9 mx-auto"><?php echo $group['desc'] ?></p>
      <?php endif; ?>

      <?php foreach ($group['menu'] as $item): ?>
        <dl>
          <dt class="row mt-3 align-items-center">
            <h4 class="h5 col-8">
              <?php echo $item['title']; ?>

              <?php if (isset($item['gf'])): ?>
                <img width="25" src="./assets/images/gluten-free.png" alt="Gluten Free" />
              <?php endif; ?>

              <?php if (isset($item['v'])): ?>
                <img width="25" src="./assets/images/vegetarian.png" alt="Vegetarian" />
              <?php endif; ?>
            </h4>

            <span class="col-4 text-right"><?php echo $item['price']; ?></span>

            <?php if (isset($item['alcohol'])): ?>
              <span class="col-12">
                <?php if (isset($item['type'])): ?>
                <?php echo $item['type']; ?>
                <?php endif; ?>
                <span class="font-weight-normal">(<?php echo $item['alcohol']; ?>)</span>
              </span>
            <?php endif; ?>
          </dt>

          <?php if (isset($item['desc']) && !empty($item['desc'])): ?>
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

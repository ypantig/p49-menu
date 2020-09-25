<?php

function beer_menu()
{
  return $menu = [
    [
        'title' => 'Snack & Share',
        'menu' => [
          [
            'title' => 'Duck Fat Fries',
            'desc' => 'kennebec, ketchup, dijon mayo',
            'price' => 6,
          ],
          [
            'title' => 'Classic Poutine',
            'desc' => 'duck fat fries, curds, poultry gravy, black pepper',
            'price' => 12,
          ],
          [
            'title' => 'L.A. Ribs',
            'gf' => true,
            'desc' => 'marinated beef short rib, ginger soy glaze, toasted sesame, green
            onion, kimchi',
            'price' => 22,
          ],
          [
            'title' => 'Chicken Fingers',
            'desc' => 'seasoned flour, honey dill',
            'price' => 9,
          ],
          [
            'title' => 'Waffle Fries',
            'desc' => 'cilantro mayo (sub chipotle cashew mayo for vegan option)',
            'price' => 9,
          ],
          [
            'title' => 'Butter Chicken Poutine',
            'desc' => 'duck fat fries, cheese curds, honey lemon yogurt, cilantro [contains nuts]',
            'price' => 13,
          ],
          [
            'title' => 'Prawn Lettuce Wraps',
            'desc' => 'kaffir lime dressing, red pepper, gochugaru panko crumb',
            'price' => 14,
          ],
          [
            'title' => 'Prawns in Garlic Butter',
            'gf' => true,
            'desc' => 'kaffir lime dressing, red pepper, gochugaru panko crumb',
            'price' => 14,
          ],
      ]
    ],
    [
      'title' => 'Wings',
      'menu' => [
        [
          'title' => 'Spicy Rub',
          '' => true,
          'desc' => 'dried chilis, garlic, and sugar, served with buttermilk ranch',
          'price' => 20,
        ],
        [
          'title' => 'Herb Rub',
          'gf' => true,
          'desc' => 'dried rosemary, thyme, and sage, served with buttermilk ranch',
          'price' => 14,
        ],
        [
          'title' => 'Barbecue Rub',
          'gf' => true,
          'desc' => 'brown sugar, paprika, lapsang, served with buttermilk ranch',
          'price' => 14,
        ],
        [
          'title' => 'Lemon Pepper Honey',
          'gf' => true,
          'desc' => 'lemon pepper rub with apple cider honey glaze',
          'price' => 14,
        ],
        [
          'title' => 'Yuzu Fish Sauce',
          'gf' => true,
          'desc' => 'chopped garlic, thai chili, and green onion, with yuzu fish sauce glaze',
          'price' => 14,
        ],
        [
          'title' => 'Salt and Pepper',
          'gf' => true,
          'price' => 14,
        ],
      ],
    ],
    [
      'title' => 'Burgers',
      'desc' => 'Add a side of Mixed Greens, Buttermilk Slaw, Caesar Salad, Duck Fat, Fries, or Waffle Fries, $3',
      'menu' => [
        [
          'title' => 'Spicy Chicken Sandwich',
          'desc' => 'brioche, slaw, valentina mayo, pickled jalapeno',
          'price' => 13,
        ],
        [
          'title' => 'Classic Chicken Sandwich',
          'desc' => 'brioche, mayo, iceberg',
          'price' => 10,
        ],
        [
          'title' => 'Korean Chicken Sandwich',
          'desc' => 'brioche, kimchi slaw, gochujang, sesame, green onion',
          'price' => 13,
        ],
        [
          'title' => 'Beef Burger',
          'desc' => 'brioche, sauce, onion, pickled cucumber, cheddar, iceberg',
          'price' => 13,
        ],
        [
          'title' => 'Veggie Burger',
          'desc' => 'brioche, sauce, onion, pickled cucumber, cheddar, iceberg',
          'price' => 13,
        ],
      ],
    ],
    [
      'title' => 'Wraps',
      'desc' => 'Add a side of Mixed Greens, Buttermilk Slaw, Caesar Salad, Duck Fat Fries, or Waffle Fries, $3',
      'menu' => [
        [
          'title' => 'Falafel Wrap',
          'v' => true,
          'desc' => 'flour tortilla, cilantro harissa tahini, cucumber, tomato, pickled banana pepper, iceberg',
          'price' => 13,
        ],
        [
          'title' => 'Chicken Ceasar Wrap',
          'desc' => 'flour tortilla, salt & pepper fried chicken, romaine, tomato, parmesan',
          'price' => 13,
        ],
      ],
    ],
  ];
}

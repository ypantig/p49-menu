<?php

function beer_menu()
{
  return $menu = [
    [[
        'title' => 'Year Round',
        'menu' => [
          [
            'title' => 'Ginger Beer',
            'type' => 'Soda Pop',
            'alcohol' => '---%',
            'desc' => 'Made with fresh ginger, sugar, lemons and cayenne. Big ginger flavour with a spicy kick that travel to the sinus. Refreshing and not too sweet.',
            'price' => '2/3',
          ],
          [
            'title' => 'Root Beer',
            'type' => 'Soda Pop',
            'alcohol' => '---%',
            'desc' => 'House made with nine spices and unfiltered.',
            'price' => '2/3',
          ],
          [
            'title' => 'Tricycle',
            'type' => 'Grapefruit Radler',
            'alcohol' => '3.5%',
            'desc' => 'Our European style radler is the drink of champions. Tart grapefruit juice and crisp lager combine for a refreshing summer hybrid - it\'s like rocket fuel for leisure time.',
            'price' => '4.25/5.75',
          ],
          [
            'title' => 'Hillbilly Ninja',
            'type' => 'Hazy Pale Ale',
            'alcohol' => '5.0%',
            'desc' => 'This light, refreshing pale ale offers a silky smooth mouth feel and strong peach, orange, and papaya hop aroma and flavour.',
            'price' => '4.25/5.75',
          ],
          [
            'title' => 'Jerkface 9000',
            'type' => 'Northwest Wheat Ale',
            'alcohol' => '5.0%',
            'desc' => 'American wheat ale dry hopped with Mosaic hops. Light grain/malt base with a flavourful hop punch and refreshing body.',
            'price' => '4.25/5.75',
          ],
          [
            'title' => 'Craft Lager',
            'type' => 'Munich Helles',
            'alcohol' => '5.0%',
            'desc' => 'Clean, crisp and refreshing. A pale lager with all malted barley and local hops.',
            'price' => '4.25/5.75',
          ],
          [
            'title' => 'Craft Pale Ale',
            'type' => 'Pale Ale',
            'alcohol' => '5.0%',
            'desc' => 'A pale, refreshing and hoppy beer with supporting caramel malts that keep the beer balanced. The Northwest hops showcase flavours of oranges and grapefruits while the yeasts provide a juicy peach flavour during fermentation.',
            'price' => '4.25/5.75',
          ],
          [
            'title' => 'Craft Pilsner',
            'type' => 'Czech Pilsner',
            'alcohol' => '5.0%',
            'desc' => 'Our Craft Pilsner is inspired by the traditional Czech Pilsner style and is brewed with Saaz and Saphir hops with a blend of Moravian and Canadian Pilsner malt. This beer is crisp and refreshing with a rich and complex bready maltiness complimented by the slightly spicy and floral hop character. Craft Pilsner pours pale gold and has a creamy, long-lasting head. It’s extremely sessionable and a fantastic ode to the classic style.',
            'price' => '4.25/5.75',
          ],
          [
            'title' => 'Trash Panda',
            'type' => 'Hazy IPA',
            'alcohol' => '5.5%',
            'desc' => 'Boasting citrus and fruity notes with very little bitterness and a smooth mouthfeel.',
            'price' => '4.25/5.75',
          ],
          [
            'title' => 'Ruby Tears',
            'type' => 'Northwest Red Ale',
            'alcohol' => '6.0%',
            'desc' => 'A ruby red coloured ale with a rich caramel malt flavour and a burst of West Coast hops. Using only late hop additions and dry-hopping, the bitterness is restrained while the hop flavour and aroma are pronounced.',
            'price' => '4.25/5.75',
          ],
          [
            'title' => 'Flirthy Dirty',
            'type' => 'IPA',
            'alcohol' => '7.2%',
            'desc' => 'A west coast IPA with a tonne of hop flavour and aroma. Subtle sweet malt flavour backs up the huge amount of orange, grapefruit, pine and floral aromas this beer expels.',
            'price' => '4.25/5.75',
          ],
        ]
    ],
    [
      'title' => 'Seasonal',
      'menu' => [
        [
            'title' => 'N2 Craft Stout',
            'type' => 'Nitro Dry Stout',
            'alcohol' => '4.6%',
            'desc' => 'A dry Caribbean style stout with rich coffee and chocolate notes. Beautiful cascade, fine thick head and smooth velvety mouthfeel from nitrogenation. Light fruity undertone from English yeast. Light, dry and easy drinking.',
            'price' => '4.25/5.75',
          ],
        [
            'title' => 'Schadenfreude',
            'type' => 'Pumpkin Oktoberfest',
            'alcohol' => '5.0%',
            'desc' => 'Brewed as a traditional Oktoberfest Lager, this beer sets itself apart from other pumpkin ales by being light and refreshing. Pumpkin is used in the mash along with traditional pumpkin pie spicing in the brew kettle. A large portion of the grain used is Munich malt which gives a nice pie crust flavour to the beer.',
            'price' => '4.25/5.75',
          ],
        [
            'title' => 'Banana Hammock Summer Hefeweizen',
            'type' => 'Hefeweizen',
            'alcohol' => '6.0%',
            'desc' => 'Unfiltered and true to tradition, this hefeweizen is brewed with wheat, pilsner malt, and German hops. The yeast used in this beer creates a light tasting beer with aromas of bananas and cloves.',
            'price' => '4.25/5.75',
          ],
      ],
    ]],
    [[
      'title' => 'Fresh Release',
      'menu' => [
        [
            'title' => 'Ponderosa',
            'type' => 'Session IPA',
            'alcohol' => '4.2%',
            'desc' => 'A delicious beer with great hop aroma and good flavour.',
            'price' => '4.25/5.75',
          ],
        [
            'title' => 'Johnny Royall',
            'type' => 'Sour Ale',
            'alcohol' => '4.8%',
            'desc' => 'Dry-hopped sour ale brewed with Lallemand\'s WILDBREW PHILLY SOUR. Strong and complex fruit aroma and flavour of grapefruit, lime, peach, apricot, kiwi and guava from the dryhop and fermentation.',
            'price' => '4.25/5.75',
          ],
        [
            'title' => 'Party Patrol',
            'type' => 'Haze Pale Ale',
            'alcohol' => '4.8%',
            'desc' => 'Hazy Session Pale Ale collab-brewed with Superflux Beer Company. Strong hop notes of tangerine, melon, passionfruit, and berry from large dryhop addition. Light crisp malt with silky mouthfeel. Fairly dry but not too thin. Light bitterness with citrusy and spicy hop flavour. Highly hopped but very easy drinking and refreshing.',
            'price' => '4.25/5.75',
          ],
        [
            'title' => 'Egg Man',
            'type' => 'Wit Bier',
            'alcohol' => '4.9%',
            'desc' => 'Boombox and Parallel 49 collaboration witbier. A somewhat authentic witbier with a little twist of extra citrusy hop character. Pleasant citrus notes and coriander blends with the spicy clove character from Belgian yeast. Low bitterness, light and easy.',
            'price' => '4.25/5.75',
          ],
        [
            'title' => 'Peach Bomb',
            'type' => 'Sparkling Ale',
            'alcohol' => '5.0%',
            'desc' => 'Crisp grainy malt with light peach flavour and slight tartness. Dry and high in carbonation. Very refreshing.',
            'price' => '4.25/5.75',
          ],
          [
            'title' => 'Chinese Culture Sours: Fujian',
            'type' => 'Ba Peach Oolong Sour',
            'alcohol' => '6.8%',
            'desc' => 'For the second iteration of beer using this Neolithic wild yeast, peaches and oolong tea were added, inspired by the agricultural products of the South East Chinese Province of Fujian, resulting in a tart, fruity, and tannic beer with a light floral and earthy funk.',
            'price' => '5.75/7.75',
          ],
          [
            'title' => 'Chinese Culture Sours: Sichuan',
            'type' => 'Ba Sour White',
            'alcohol' => '7.3%',
            'desc' => 'For the third iteration of beer using this Neolithic wild yeast, Szechuan peppercorns were added and aged in French Oak wine barrels for seven months. Fruity notes of peach, passionfruit, and stone fruit nectar are accompanied by an earthy, citrusy aroma, bright acidity, and tannic finish.',
            'price' => '5.75/7.75',
          ],
          [
            'title' => 'Cobra Clutch',
            'type' => 'Double IPA',
            'alcohol' => '8.0%',
            'desc' => 'Cobra Clutch is a hazy double IPA. Hopped with anthanum, cascade and mosaic hops. Juicy citru, mango and floral hop notes compliment the hazy, refreshing body in this fragnant and easy-drinking DIPA.',
            'price' => '4.25/5.75',
          ],
      ],
    ],
    [
      'title' => 'Boombox Brewing',
      'menu' => [
        [
            'title' => 'Boombox Brewing Subsonic',
            'type' => 'Hazy Session IPA',
            'alcohol' => '4.0%',
            'desc' => 'Subsonic is a lightweight when it comes to ABV and Calories, but it\'s a heavyweight with the hops. Jam packed with Sabro and Citra hops, this easy drinking tropical dream will keep your party rocking.',
            'price' => '5.75/7.75',
          ],
        [
            'title' => 'Boombox Brewing Arcade Glow',
            'type' => 'Pale Ale',
            'alcohol' => '4.0%',
            'desc' => 'Aggressively dry hopped with Mosaic, Simcoe and HBC 522.',
            'price' => '5.75/7.75',
          ],
      ],
    ],
    [
      'title' => 'Limited Release',
      'menu' => [
        [
            'title' => 'Socially Distant IPA',
            'type' => 'IPA',
            'alcohol' => '6.5%',
            'desc' => 'Collaboration with Smuggler\'s Trail Brewery.',
            'price' => '4.25/5.75',
          ],
        [
            'title' => 'Stunt Double IPA',
            'type' => 'Double Ale',
            'alcohol' => '8.0%',
            'desc' => 'NOTICE: UNDEFINED OFFSET: 2 IN /VAR/WWW/P49_PAPER_MENUS/ON-TAP.PHP ON LINE 112',
            'price' => '5.75/7.75',
          ],
      ],
    ],
    [
      'title' => 'Cocktails on Tap',
      'menu' => [
        [
            'title' => 'Muddlers Vodka Soda Lemon Lime',
            'type' => 'Cocktail',
            'alcohol' => '5.0%',
            'desc' => 'Made with premium Canadian vodka, is gluten free, vegan and just 100 calories per serving.',
            'price' => '6.75',
          ],
        [
            'title' => 'Muddlers Moscow Mule',
            'type' => 'Coctail',
            'alcohol' => '5.0%',
            'desc' => 'A refreshing drink of vodka and gingerbeer.',
            'price' => '6.75',
          ],
          [
            'title' => 'Muddlers Gin + Tonic',
            'type' => 'Cocktail',
            'alcohol' => '5.0%',
            'desc' => 'Made with craft tonic. Muddlers Gin + Tonic offers a perfectly seamless blend of gin and thirst-quenching zesty tonic water with just the right amount of bitterness.',
            'price' => '6.75',
          ],
        [
            'title' => 'Muddlers Vodka Lemonade',
            'type' => 'Coctail',
            'alcohol' => '5.0%',
            'desc' => 'A refreshing Vodka Pink Lemonade made from real lemons. All the favour you expect with only 122 calories per serving!',
            'price' => '6.75',
          ],
      ],
    ]],
  ];
}

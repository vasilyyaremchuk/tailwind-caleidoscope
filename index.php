<?php

function get_header() {
  return '<!DOCTYPE html>
  <html lang="ua" class="scroll-smooth">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>
        Tailwind Kaleidoscope
      </title>
      <script src="https://cdn-tailwindcss.vercel.app/"></script>
    </head>
    <body class=text-white">';
}

function get_footer() {
  return '</body>
  </html>';
}

function get_form() {
  return '<!-- Form -->
  <section class="bg-white w-full flex flex-col justify-center items-center pt-14 pb-16" id="form">
    <div class="container mx-auto flex flex-col items-center pb-8">
      <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Manage your Web application design!
      </h1>
      <form class="w-3/4 mx-auto px-12" method="post" action="/">
        <label for="primary_color" class="inline-flex mb-4 text-2xl text-gray-800">
          Primary color <a href="https://tailwindcss.com/docs/customizing-colors" target="_blank">*</a>
        </label>
        <select name="primary_color" class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-primary focus:border-gray-500">
          <option>random</option>
          <option>slate</option>
          <option>gray</option>
          <option>zink</option>
          <option>neutral</option>
          <option>stone</option>
          <option>red</option>
          <option>orange</option>
          <option>amber</option>
          <option>yellow</option>
          <option>lime</option>
          <option>green</option>
          <option>emerald</option>
          <option>teal</option>
          <option>cyan</option>
          <option>sky</option>
          <option>blue</option>
          <option>indigo</option>
          <option>violet</option>
          <option>purple</option>
          <option>fuchsia</option>
          <option>pink</option>
          <option>rose</option>
        </select>
        <label for="secondary_color" class="inline-flex mb-4 text-2xl text-gray-800">
          Secondary color <a href="https://tailwindcss.com/docs/customizing-colors" target="_blank">*</a>
        </label>
        <select name="secondary_color" class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-primary focus:border-gray-500">
          <option>random</option>
          <option>slate</option>
          <option>gray</option>
          <option>zink</option>
          <option>neutral</option>
          <option>stone</option>
          <option>red</option>
          <option>orange</option>
          <option>amber</option>
          <option>yellow</option>
          <option>lime</option>
          <option>green</option>
          <option>emerald</option>
          <option>teal</option>
          <option>cyan</option>
          <option>sky</option>
          <option>blue</option>
          <option>indigo</option>
          <option>violet</option>
          <option>purple</option>
          <option>fuchsia</option>
          <option>pink</option>
          <option>rose</option>
        </select>
        <label for="hero_type" class="inline-flex mb-4 text-2xl text-gray-800">
          Hero type <a href="https://daisyui.com/components/hero/" target="_blank">*</a>
        </label>
        <select name="hero_type" class="block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-primary focus:border-gray-500">
          <option value="random">Random</option>
          <!--<option value="center">Centered hero</option>-->
          <option value="left">Hero with figure</option>
          <option value="right">Hero with figure but reverse order</option>
          <!--<option value="overlay">Hero with overlay image</option>-->
        </select>
        <input type="submit" class="mx-auto lg:mx-0 hover:underline hover:bg-red-primary bg-black text-white font-bold rounded-full py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" />
      </form>
    </div>
  </section>';
}

function get_settings($primary_color, $secondary_color, $hero_type) {
  $colors = [
    'slate',
    'gray',
    'zink',
    'neutral',
    'stone',
    'red',
    'orange',
    'amber',
    'yellow',
    'lime',
    'green',
    'emerald',
    'teal',
    'cyan',
    'sky',
    'blue',
    'indigo',
    'violet',
    'purple',
    'fuchsia',
    'pink',
    'rose'
  ];
  $h_types = [
    //'center',
    'left',
    'right',
    //'overlay'
  ];
  return [
    'primary_color' => $primary_color != 'random' ? $primary_color : $colors[array_rand($colors)],
    'secondary_color' => $secondary_color != 'random' ? $secondary_color : $colors[array_rand($colors)],
    'hero_type' => $hero_type != 'random' ? $hero_type : $h_types[array_rand($h_types)],
  ];
}

function get_hero($settings) {
  $output = '';
  $primary = $settings['primary_color'];
  $secondary = $settings['secondary_color'];
  switch ($settings['hero_type']) {
    case 'center':
      $output = '<!-- Hero center -->
      <div class="hero min-h-[30rem] rounded bg-base-200">
        <div class="hero min-h-screen bg-base-200">
          <div class="hero-content text-center">
            <div class="max-w-md">
              <h1 class="text-5xl font-bold">Hello there</h1>
              <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
              <button class="btn btn-primary">Get Started</button>
            </div>
          </div>
        </div>
      </div>';
        break;
    case 'left':
    case 'right':
      $case = $settings['hero_type'] == 'left' ? 'lg:flex-row' : 'lg:flex-row-reverse';
      $output = '<!-- Hero left/right -->
      <div class="bg-' . $secondary . '-200">
          <div class="container flex px-6 py-4 mx-auto lg:h-128 lg:py-16 ' . $case . '">
              <div class="flex flex-col items-center w-full ' . $case . ' lg:w-1/2">
                  <div class="max-w-lg">
                      <h1 class="text-3xl tracking-wide text-white text-gray-800 lg:text-4xl">Set your title</h1>
                      <p class="mt-4 text-gray-300 text-gray-600">Lorem ipsum, dolor sit amet consectetur
                          adipisicing elit. Aut quia asperiores alias vero magnam recusandae adipisci ad vitae
                          laudantium quod rem voluptatem eos accusantium cumque.</p>
                      <div class="mt-6">
                          <a href="#" class="block px-3 py-2 font-semibold text-center text-white transition-colors duration-200 transform bg-' . $primary . '-900 rounded-md lg:inline hover:bg-' . $primary . '-800">Download
                          </a>
                      </div>
                  </div>
              </div>

              <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
                  <img class="object-cover w-full h-full max-w-2xl rounded-md" src="https://source.unsplash.com/user/erondu/1600x900" alt="Placeholder photo">
              </div>
          </div>
      </div>';
        break;
    case 'overlay':
      $output = '<!-- Hero overlay -->
        <div class="hero min-h-screen" style="background-image: url(https://api.lorem.space/image/fashion?w=1000&h=800);">
          <div class="hero-overlay bg-opacity-60"></div>
          <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
              <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
              <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
              <button class="btn btn-primary">Get Started</button>
            </div>
          </div>
        </div>';
        break;
  }
  return $output;
}

echo get_header();
if (isset($_POST['primary_color'])) {
  $settings = get_settings($_POST['primary_color'], $_POST['secondary_color'], $_POST['hero_type']);
  echo get_hero($settings);
}
else {
  echo get_form();
}
echo get_footer();
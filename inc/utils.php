<?php

function export_static_html($file_name) {
  ob_start();
  include($file_name . '.php');
  $markup = ob_get_contents();

  file_put_contents('static/' . $file_name . '.html', $markup);
  ob_flush();

  recurse_copy('assets/images/', 'static/assets/images/');
  recurse_copy('dist/', 'static/dist/');
}

function recurse_copy($src,$dst) {
  $dir = opendir($src);
  @mkdir($dst);
  while(false !== ( $file = readdir($dir)) ) {
    if (( $file != '.' ) && ( $file != '..' )) {
      if ( is_dir($src . '/' . $file) ) {
        recurse_copy($src . '/' . $file,$dst . '/' . $file);
      }
      else {
        copy($src . '/' . $file,$dst . '/' . $file);
      }
    }
  }
  closedir($dir);
}

/**
 * get the abspath url of the file
 *
 * @author Ynah Pantig
 * @package
 * @since 1.0
 * @param $file
 * @return
 */

function get_abspath_url($file)
{
  $server = $_SERVER[ 'HTTP_HOST' ];
  $dataPath = str_replace($server, '', $file);
  $dataPath = str_replace('http://', '', $dataPath);
  $dataPath = str_replace('https://', '', $dataPath);

  $file = ABSPATH . $dataPath;

  return $file;
}/* get_abspath_url() */

function get_home_url() {
  $protocol = 'http://';

  if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $protocol = 'https://';
  }

  return $protocol . $_SERVER['HTTP_HOST'];
}

/**
 * get dist url
 *
 * @author Ynah Pantig
 * @param
 * @return
 */

function get_dist_url()
{
  return './dist';
}

/**
 * read the assets file
 *
 * @author Ynah Pantig
 * @param
 * @return
 */

function read_assets()
{
  $asset_file = $_SERVER['DOCUMENT_ROOT'] . '/dist/assets.json';

  if (file_exists($asset_file)) {
    $assets = file_get_contents(get_dist_url() . '/assets.json');
    return json_decode($assets);
  }
}

/**
 * get assets path
 *
 * @author Ynah Pantig
 * @param $type
 * @return
 */

function get_asset_path($file)
{
  $assets = read_assets();

  if ($assets != '') {
    $split = explode('/', $file);
    $folder = $split[0];
    foreach ($assets as $key => $asset) {
      if (strpos($file, $key) > -1) {
        return get_dist_url() .'/' . $folder . '/' . $asset;
      }
    }
  } else {
    return get_dist_url() .'/' . $file;
  }
}

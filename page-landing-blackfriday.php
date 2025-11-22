<?php
/**
 * Template Name: Landing Blackfriday
 * Template Post Type: page
 * Description: Template created with Juzt Studio for Timber/Twig
 *
 * @package  JuztTheme
 * @subpackage  Timber
 * @since   Timber 0.1
 */

use \Juztstack\JuztStudio\Community\Templates;
use Timber\Timber;

$template = new Templates();
$template_content = $template->get_json_template('page-landing-blackfriday');
$context = Timber::context();
$context['order'] = $template_content['order'];
$context['sections'] = $template_content['sections'];

Timber::render('templates/page-landing-blackfriday.twig', $context); 

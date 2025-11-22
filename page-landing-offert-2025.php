<?php

use \Juztstack\JuztStudio\Community\Templates;
use Timber\Timber;

$template = new Templates();
$template_content = $template->get_json_template('page-landing-offert-2025');
$context = Timber::context();
$context['order'] = $template_content['order'];
$context['sections'] = $template_content['sections'];

Timber::render('templates/page-landing-offert-2025.twig', $context); 
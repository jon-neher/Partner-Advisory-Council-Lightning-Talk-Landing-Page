<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64,">
    <style>
      body {
        font-family: 'Open Sans', sans-serif;
        font-weight: 400;
      }
      h1 {
        font-family: 'Bebas Neue', sans-serif;
      }
      h2, h3, h4, h5, h6 {
        font-family: 'Raleway', sans-serif;
        font-weight: 600;
      }
    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="relative flex size-full min-h-screen flex-col bg-[#141515] dark group/design-root overflow-x-hidden" style='font-family: "Open Sans", sans-serif;'>
  <div class="layout-container flex h-full grow flex-col">
    <div class="px-40 flex flex-1 justify-center py-5">
      <div class="layout-content-container flex flex-col max-w-[960px] flex-1">

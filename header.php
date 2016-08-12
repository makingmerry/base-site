<!DOCTYPE html>
<html lang="en-us">
<head>
  <!-- # meta tags -->
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title><? echo $page; ?></title>

  <!-- # og tags -->
  <meta property="og:url" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="">

  <!-- # stylesheets -->
  <!-- load critical inline styles -->

  <!-- defer loading of non-critical styles -->
  <noscript id="deferred-styles">
    <link href="stylesheets/build/style.css" rel="stylesheet" type="text/css">
  </noscript>

  <!-- load non-critical styles -->
  <script>
    var loadDeferredStyles = function() {
      var addStylesNode = document.getElementById("deferred-styles");
      var replacement = document.createElement("div");
      replacement.innerHTML = addStylesNode.textContent;
      document.body.appendChild(replacement)
      addStylesNode.parentElement.removeChild(addStylesNode);
    };
    var raf = requestAnimationFrame || mozRequestAnimationFrame ||
        webkitRequestAnimationFrame || msRequestAnimationFrame;
    if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
    else window.addEventListener('load', loadDeferredStyles);
  </script>

  <!-- # load critical scripts -->
  <script>
    // javascript enabled
    document.documentElement.className = 'js';
    // picture element HTML5 shiv
    document.createElement('picture');
  </script>

  <!-- # favicons -->
</head>
<body>
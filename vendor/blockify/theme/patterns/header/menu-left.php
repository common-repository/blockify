<?php
/**
 * Title: Menu Left
 * Slug: menu-left
 * Categories: header
 * ID: 10354
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"position":{"all":"relative"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"},"zIndex":{"all":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"},"onclick":""} -->
<div class="wp-block-group"><!-- wp:image {"className":"is-style-icon","textColor":"primary-500","iconSet":"social","iconName":"blockify","iconSize":"26px","iconSvgString":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 xml:space=\u0022preserve\u0022 style=\u0022enable-background:new 0 0 2000 2000\u0022 viewBox=\u00220 0 2000 2000\u0022\u003e\u003cpath fill=\u0022currentColor\u0022 d=\u0022m1729.66 534.39-691.26-399.1a76.814 76.814 0 0 0-76.81 0l-691.26 399.1a76.818 76.818 0 0 0-38.4 66.52v798.19c0 27.44 14.64 52.8 38.4 66.52l691.26 399.1c11.88 6.86 25.14 10.29 38.4 10.29s26.52-3.43 38.4-10.29l691.26-399.1a76.818 76.818 0 0 0 38.4-66.52V600.9c.01-27.44-14.63-52.79-38.39-66.51zm-115.21 820.36-539.18 311.3V998.46c0-27.45-14.65-52.81-38.43-66.53l-574.18-331.2L1000 290.49l614.45 354.75v709.51z\u0022/\u003e\u003c/svg\u003e"} -->
<figure class="wp-block-image is-style-icon has-primary-500-color has-text-color" style="--wp--custom--icon--color:var(--wp--preset--color--primary-500,currentColor);--wp--custom--icon--size:26px;--wp--custom--icon--url:url('data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; xml:space=&quot;preserve&quot; style=&quot;enable-background:new 0 0 2000 2000&quot; viewBox=&quot;0 0 2000 2000&quot;&gt;<path fill=&quot;currentColor&quot; d=&quot;m1729.66 534.39-691.26-399.1a76.814 76.814 0 0 0-76.81 0l-691.26 399.1a76.818 76.818 0 0 0-38.4 66.52v798.19c0 27.44 14.64 52.8 38.4 66.52l691.26 399.1c11.88 6.86 25.14 10.29 38.4 10.29s26.52-3.43 38.4-10.29l691.26-399.1a76.818 76.818 0 0 0 38.4-66.52V600.9c.01-27.44-14.63-52.79-38.39-66.51zm-115.21 820.36-539.18 311.3V998.46c0-27.45-14.65-52.81-38.43-66.53l-574.18-331.2L1000 290.49l614.45 354.75v709.51z&quot;/&gt;</svg&gt;')"><img src="" alt=""/></figure>
<!-- /wp:image -->
<!-- wp:site-title {"level":0,"style":{"spacing":{"padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs"}}},"className":"is-style-heading","fontSize":"20"} /--></div>
<!-- /wp:group -->
<!-- wp:navigation {"ref":"","overlayMenu":"never","icon":"menu","overlayBackgroundColor":"neutral-0","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap","orientation":"horizontal"},"style":{"position":{"all":"relative"},"spacing":{"padding":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm"},"blockGap":"var:preset|spacing|xs"},"filter":{"blur":"16","backdrop":true},"order":{"mobile":""},"typography":{"fontStyle":"normal","fontWeight":"500"},"display":{"mobile":"none"}}} /--></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"\u002d\u002dflex-direction":"row-reverse","\u002d\u002dflex-direction-desktop":"row"},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"onclick":""} -->
<div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search..","buttonText":"Search","buttonPosition":"no-button","buttonUseIcon":true,"style":{"display":{"mobile":"none"}}} /-->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|xxs","padding":{"top":"var:preset|spacing|xs","right":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs","left":"var:preset|spacing|xs"}}}} -->
<div class="wp-block-buttons" style="padding-top:var(--wp--preset--spacing--xs);padding-right:var(--wp--preset--spacing--xs);padding-bottom:var(--wp--preset--spacing--xs);padding-left:var(--wp--preset--spacing--xs)"><!-- wp:button {"backgroundColor":"transparent","textColor":"neutral-800","style":{"spacing":{"blockGap":"0","padding":{"top":"4px","right":"4px","bottom":"4px","left":"4px"}},"boxShadow":{"hover":{"color":"#f6f6f9","inset":"inset","spread":"20"},"color":"transparent","inset":"inset","spread":"20"},"display":{"desktop":"none"},"order":"","width":"","maxWidth":""},"className":"search-toggle","fontSize":"14","onclick":"(() =\u003e {\n  const searchCloses = document.querySelectorAll('.search-close');\n  const searchToggles = document.querySelectorAll('.search-toggle');\n  const searchModals = document.querySelectorAll('.search-modal');\n\n  searchModals.forEach((modal) =\u003e {\n    modal.classList.remove('has-display-none');\n  });\n\n  searchToggles.forEach((toggle) =\u003e {\n    toggle.classList.add('has-display-none');\n    toggle.firstChild.classList.add('has-display-none');\n  });\n\n  searchCloses.forEach((close) =\u003e {\n    close.classList.remove('has-display-none');\n    close.parentElement.classList.remove('has-display-none');\n  });\n})();\n","iconSet":"wordpress","iconName":"search","iconSize":"22px","iconPosition":"end","iconSvgString":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 viewBox=\u00220 0 24 24\u0022\u003e\u003cpath d=\u0022M13.5 6C10.5 6 8 8.5 8 11.5c0 1.1.3 2.1.9 3l-3.4 3 1 1.1 3.4-2.9c1 .9 2.2 1.4 3.6 1.4 3 0 5.5-2.5 5.5-5.5C19 8.5 16.5 6 13.5 6zm0 9.5c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z\u0022/\u003e\u003c/svg\u003e"} /-->
<!-- wp:button {"backgroundColor":"transparent","textColor":"neutral-800","style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|xxs","right":"var:preset|spacing|xxs","bottom":"var:preset|spacing|xxs","left":"var:preset|spacing|xxs"}},"boxShadow":{"hover":{"color":"#f6f6f9","inset":"inset","spread":"20"},"color":"transparent","inset":"inset","spread":"20"}},"className":"hide-dark-mode","fontSize":"14","onclick":"(()=\u003e{document.body.classList.toggle('is-style-dark');document.cookie='blockifyDarkMode='+(document.body.classList.contains('is-style-dark')?'true':'false');})()","iconSet":"wordpress","iconName":"moon","iconSize":"16px","iconPosition":"end","iconSvgString":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002220\u0022 height=\u002220\u0022 viewBox=\u00220 0 24 24\u0022\u003e\u003cpath d=\u0022M10.536 2.080 C 8.053 2.456,5.804 3.757,4.219 5.732 C 3.169 7.041,2.447 8.678,2.158 10.400 C 2.037 11.123,2.010 12.285,2.097 13.040 C 2.634 17.715,6.269 21.364,10.920 21.898 C 13.515 22.196,16.148 21.442,18.248 19.800 C 18.672 19.468,19.512 18.634,19.841 18.220 C 20.997 16.759,21.726 15.030,21.963 13.184 C 22.036 12.620,21.974 12.370,21.686 12.067 C 21.432 11.800,21.165 11.703,20.860 11.768 C 20.746 11.792,20.516 11.913,20.254 12.086 C 19.467 12.604,18.848 12.864,17.920 13.064 C 17.446 13.166,16.288 13.168,15.780 13.068 C 13.410 12.599,11.586 10.884,11.026 8.600 C 10.624 6.959,10.906 5.305,11.834 3.873 C 11.967 3.667,12.104 3.432,12.138 3.350 C 12.281 3.009,12.161 2.434,11.899 2.205 C 11.646 1.982,11.358 1.956,10.536 2.080 M9.320 4.454 C 9.320 4.461,9.283 4.574,9.239 4.704 C 8.489 6.876,8.824 9.483,10.108 11.474 C 11.918 14.280,15.295 15.689,18.507 14.977 C 18.752 14.922,19.084 14.833,19.244 14.779 C 19.403 14.724,19.539 14.680,19.545 14.680 C 19.604 14.680,19.198 15.553,18.922 16.020 C 17.655 18.165,15.472 19.592,12.989 19.900 C 9.599 20.319,6.307 18.499,4.816 15.380 C 3.850 13.359,3.787 10.988,4.646 8.920 C 5.326 7.283,6.542 5.900,8.077 5.018 C 8.525 4.761,9.320 4.400,9.320 4.454 \u0022 stroke=\u0022none\u0022 fill-rule=\u0022evenodd\u0022 fill=\u0022currentcolor\u0022\u003e\u003c/path\u003e\u003c/svg\u003e"} /-->
<!-- wp:button {"backgroundColor":"transparent","textColor":"neutral-800","style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|xxs","right":"var:preset|spacing|xxs","bottom":"var:preset|spacing|xxs","left":"var:preset|spacing|xxs"}},"boxShadow":""},"className":"hide-light-mode","fontSize":"14","onclick":"(()=\u003e{document.body.classList.toggle('is-style-dark');document.cookie='blockifyDarkMode='+(document.body.classList.contains('is-style-dark')?'true':'false');})()","shadowPreset":"","shadowPresetHover":"","iconSet":"wordpress","iconName":"sun","iconSize":"16px","iconPosition":"end","iconSvgString":"\u003csvg xmlns=\u0022http://www.w3.org/2000/svg\u0022 width=\u002224\u0022 height=\u002224\u0022 viewBox=\u00220 0 24 24\u0022 class=\u0022feather feather-sun\u0022\u003e\u003cpath d=\u0022M11.614 0.057 C 11.377 0.131,11.212 0.261,11.109 0.453 C 11.023 0.614,11.020 0.665,11.008 1.908 C 11.000 2.720,11.011 3.254,11.038 3.352 C 11.144 3.747,11.432 3.961,11.896 3.991 C 12.381 4.022,12.699 3.882,12.880 3.558 L 12.980 3.380 12.980 2.000 C 12.980 0.650,12.978 0.616,12.891 0.453 C 12.842 0.362,12.746 0.247,12.678 0.199 C 12.414 0.010,11.957 -0.050,11.614 0.057 M3.980 3.207 C 3.542 3.371,3.159 3.849,3.161 4.229 C 3.163 4.539,3.283 4.699,4.212 5.626 C 4.778 6.190,5.164 6.544,5.277 6.600 C 5.629 6.777,5.994 6.688,6.341 6.341 C 6.688 5.994,6.777 5.629,6.600 5.277 C 6.481 5.040,4.800 3.360,4.582 3.261 C 4.384 3.170,4.137 3.148,3.980 3.207 M19.540 3.207 C 19.307 3.294,19.092 3.481,18.295 4.286 C 17.802 4.785,17.456 5.169,17.401 5.277 C 17.223 5.629,17.312 5.994,17.659 6.341 C 18.006 6.688,18.371 6.777,18.723 6.599 C 18.939 6.490,20.509 4.947,20.688 4.667 C 20.935 4.283,20.866 3.902,20.482 3.519 C 20.185 3.223,19.820 3.102,19.540 3.207 M11.380 6.043 C 8.784 6.299,6.676 8.219,6.115 10.840 C 5.984 11.450,5.984 12.558,6.114 13.160 C 6.639 15.588,8.417 17.365,10.840 17.885 C 11.446 18.015,12.554 18.015,13.160 17.885 C 14.397 17.620,15.412 17.068,16.269 16.195 C 17.109 15.340,17.626 14.369,17.885 13.160 C 18.015 12.554,18.015 11.446,17.885 10.840 C 17.626 9.631,17.109 8.660,16.269 7.805 C 14.978 6.490,13.230 5.860,11.380 6.043 M12.605 8.058 C 14.074 8.280,15.310 9.324,15.797 10.755 C 15.897 11.050,16.000 11.680,16.000 12.000 C 16.000 12.322,15.897 12.951,15.796 13.245 C 15.321 14.632,14.195 15.628,12.773 15.917 C 10.563 16.368,8.396 14.845,8.058 12.605 C 7.986 12.121,7.986 11.879,8.058 11.395 C 8.314 9.698,9.675 8.324,11.358 8.061 C 11.816 7.990,12.144 7.989,12.605 8.058 M0.614 11.057 C 0.377 11.131,0.212 11.261,0.109 11.453 C 0.035 11.592,0.020 11.684,0.020 12.000 C 0.020 12.331,0.033 12.403,0.120 12.558 C 0.230 12.755,0.414 12.898,0.635 12.959 C 0.826 13.012,3.174 13.012,3.365 12.959 C 3.586 12.898,3.770 12.755,3.880 12.558 C 3.967 12.402,3.980 12.332,3.979 12.000 C 3.978 11.687,3.962 11.591,3.890 11.453 C 3.786 11.256,3.623 11.131,3.371 11.055 C 3.117 10.979,0.859 10.981,0.614 11.057 M20.614 11.057 C 20.377 11.131,20.212 11.261,20.109 11.453 C 20.035 11.592,20.020 11.684,20.020 12.000 C 20.020 12.331,20.033 12.403,20.120 12.558 C 20.230 12.755,20.414 12.898,20.635 12.959 C 20.826 13.012,23.174 13.012,23.365 12.959 C 23.586 12.898,23.770 12.755,23.880 12.558 C 23.967 12.402,23.980 12.332,23.979 12.000 C 23.978 11.687,23.962 11.591,23.890 11.453 C 23.786 11.256,23.623 11.131,23.371 11.055 C 23.117 10.979,20.859 10.981,20.614 11.057 M5.260 17.406 C 5.015 17.533,3.343 19.219,3.243 19.440 C 3.078 19.805,3.171 20.142,3.537 20.498 C 3.919 20.872,4.286 20.933,4.669 20.687 C 4.947 20.508,6.490 18.938,6.599 18.723 C 6.777 18.371,6.688 18.006,6.341 17.659 C 6.001 17.319,5.607 17.227,5.260 17.406 M17.986 17.405 C 17.617 17.599,17.311 18.033,17.311 18.360 C 17.311 18.684,17.427 18.839,18.394 19.804 C 19.389 20.798,19.495 20.871,19.864 20.830 C 20.119 20.801,20.456 20.563,20.660 20.266 C 20.804 20.055,20.820 20.008,20.820 19.785 C 20.820 19.576,20.801 19.508,20.692 19.339 C 20.515 19.064,18.942 17.511,18.732 17.405 C 18.512 17.294,18.196 17.294,17.986 17.405 M11.614 20.057 C 11.377 20.131,11.212 20.261,11.109 20.453 C 11.023 20.614,11.020 20.665,11.008 21.908 C 11.000 22.720,11.011 23.254,11.038 23.352 C 11.144 23.747,11.432 23.961,11.896 23.991 C 12.381 24.022,12.699 23.882,12.880 23.558 L 12.980 23.380 12.980 22.000 C 12.980 20.650,12.978 20.616,12.891 20.453 C 12.842 20.362,12.746 20.247,12.678 20.199 C 12.414 20.010,11.957 19.950,11.614 20.057 \u0022 stroke=\u0022none\u0022 fill=\u0022black\u0022 fill-rule=\u0022evenodd\u0022\u003e\u003c/path\u003e\u003c/svg\u003e"} /--></div>
<!-- /wp:buttons -->
<!-- wp:navigation {"ref":"","overlayMenu":"always","icon":"menu","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap","orientation":"horizontal"},"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm","left":"0"},"margin":{"right":"0"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php

/**
 * Theme settings
 *
 * @param array $settings
 * @return array
 */
function theme_app_settings($settings) {
    return json_decode(<<<JSON
    {
    "colorScheme": {
        "bodyColors": [
            "#111111",
            "#ffffff"
        ],
        "bgColor": "#ffffff",
        "colors": [
            "#f58d54",
            "#f55c24",
            "#54a7f5",
            "#2cccc4",
            "#435152"
        ],
        "customColors": [
            {
                "color": "#593125",
                "status": 0,
                "transparency": 1,
                "index": 0
            },
            {
                "color": "#99d3b7",
                "status": 0,
                "transparency": 1,
                "index": 1
            },
            {
                "color": "#fffcd6",
                "status": 0,
                "transparency": 1,
                "index": 2
            }
        ],
        "shadingContrast": "body-alt-color",
        "whiteContrast": "body-color",
        "bgContrast": "body-color",
        "name": "u16"
    },
    "fontScheme": {
        "name": "custom-font-family-4",
        "default": true,
        "fonts": {
            "heading": "Lato, sans-serif",
            "text": "Open Sans, sans-serif",
            "accent": "Arial, sans-serif",
            "headingTitle": "Lato",
            "textTitle": "Open Sans"
        }
    },
    "typography": {
        "name": "custom-page-typography-3",
        "title": {
            "font-weight": "400",
            "font-size": 4.5,
            "line-height": "1_1",
            "margin-top": 20,
            "margin-bottom": 20,
            "SM": {
                "font-size": 3.75
            },
            "XS": {
                "font-size": 3
            }
        },
        "subtitle": {
            "font-weight": "400",
            "font-size": 2.25,
            "line-height": "1_1",
            "margin-top": 20,
            "margin-bottom": 20,
            "XS": {
                "font-size": 1.5
            }
        },
        "h1": {
            "font-size": 6,
            "line-height": "1_1",
            "margin-top": 20,
            "margin-bottom": 20,
            "XS": {
                "font-size": 1.875
            },
            "font-weight": "700"
        },
        "h2": {
            "font-size": 3.75,
            "line-height": "1_1",
            "margin-top": 20,
            "margin-bottom": 20,
            "XS": {
                "font-size": 2.25,
                "font-weight": 700,
                "font-style": "",
                "text-decoration": "",
                "text-transform": "",
                "line-height": "1_1",
                "letter-spacing": "",
                "text-color": "",
                "border-color": "",
                "border-style": "",
                "color": "",
                "border": "",
                "button-shape": "",
                "border-radius": "",
                "underline": "",
                "gradient": "",
                "list-icon-src": "",
                "list-icon-spacing": "0.3",
                "list-icon-size": "0.8"
            },
            "font-weight": 700,
            "font-style": "",
            "text-decoration": "",
            "text-transform": "",
            "letter-spacing": "",
            "text-color": "",
            "border-color": "",
            "border-style": "",
            "color": "",
            "border": "",
            "button-shape": "",
            "border-radius": "",
            "underline": "",
            "gradient": "",
            "list-icon-src": "",
            "list-icon-spacing": "0.3",
            "list-icon-size": "0.8",
            "font": "Lato, sans-serif"
        },
        "h3": {
            "font-size": 3.125,
            "line-height": "1_2",
            "margin-top": 20,
            "margin-bottom": 20,
            "XS": {
                "font-size": 1.875,
                "font-weight": "700",
                "font-style": "",
                "text-decoration": "",
                "text-transform": "",
                "line-height": "1_2",
                "letter-spacing": "",
                "text-color": "",
                "border-color": "",
                "border-style": "",
                "color": "",
                "border": "",
                "button-shape": "",
                "border-radius": "",
                "underline": "",
                "gradient": "",
                "list-icon-src": "",
                "list-icon-spacing": "0.3",
                "list-icon-size": "0.8"
            },
            "text-decoration": "",
            "text-transform": "",
            "letter-spacing": "",
            "text-color": "",
            "border-color": "",
            "border-style": "",
            "color": "",
            "border": "",
            "button-shape": "",
            "border-radius": "",
            "underline": "",
            "gradient": "",
            "list-icon-src": "",
            "list-icon-spacing": "0.3",
            "list-icon-size": "0.8",
            "font": "",
            "font-weight": "700"
        },
        "h4": {
            "font-size": 1.25,
            "line-height": "1_2",
            "margin-top": 20,
            "margin-bottom": 20,
            "font-weight": 400,
            "font-style": "",
            "text-decoration": "",
            "text-transform": "uppercase",
            "letter-spacing": 3,
            "text-color": "",
            "border-color": "",
            "border-style": "",
            "color": "",
            "border": "",
            "button-shape": "",
            "border-radius": "",
            "underline": "",
            "gradient": "",
            "list-icon-src": "",
            "list-icon-spacing": "0.3",
            "list-icon-size": "0.8",
            "font": ""
        },
        "h5": {
            "font-weight": "400",
            "font-size": 1.25,
            "line-height": "1_2",
            "margin-top": 20,
            "margin-bottom": 20
        },
        "h6": {
            "font-weight": "400",
            "font-size": 1.125,
            "line-height": "1_2",
            "margin-top": 20,
            "margin-bottom": 20
        },
        "largeText": {
            "font-size": 1.25,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "smallText": {
            "font-size": 0.875,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "text": {
            "margin-top": 20,
            "margin-bottom": 20,
            "font-size": 0,
            "font-weight": "",
            "font-style": "",
            "text-decoration": "",
            "text-transform": "",
            "line-height": 2,
            "letter-spacing": "",
            "text-color": "",
            "border-color": "",
            "border-style": "",
            "color": "",
            "border": "",
            "button-shape": "",
            "border-radius": "",
            "underline": "",
            "gradient": "",
            "list-icon-src": "",
            "list-icon-spacing": "0.3",
            "list-icon-size": "0.8",
            "font": ""
        },
        "hyperlink": {
            "text-color": "palette-1-base"
        },
        "link": {},
        "button": {
            "color": "palette-1-base",
            "margin-top": 20,
            "margin-bottom": 20,
            "border-radius": "30",
            "button-shape": "round"
        },
        "blockquote": {
            "font-style": "italic",
            "indent": 20,
            "border": 4,
            "border-color": "palette-1-base",
            "margin-top": 20,
            "margin-bottom": 20
        },
        "metadata": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "list": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "orderedlist": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "postContent": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "theme": {
            "gradient": "",
            "image": "",
            "sheet-width-xl": 1140,
            "sheet-width-lg": 940,
            "sheet-width-md": 720,
            "sheet-width-sm": 540,
            "sheet-width-xs": 340
        },
        "htmlBaseSize": 16,
        "form-input": {
            "border": 1,
            "border-color": "grey-30",
            "borders": "top right bottom left",
            "color": "white",
            "text-color": "black"
        }
    }
}
JSON
, true);
}
add_filter('np_theme_settings', 'theme_app_settings');

function theme_analytics() {
    $pluginSiteSettings = get_plugin_site_settings();
    if (empty($pluginSiteSettings->analyticsCode)) { ?>
        
    <?php }
}
add_action('wp_head', 'theme_analytics', 0);


function theme_intlTelInputMeta() {
    $GLOBALS['meta_tel_input'] = true; ?>
    <meta data-intl-tel-input-cdn-path="<?php echo get_template_directory_uri(); ?>/intlTelInput/" />
    <?php
}
add_action('wp_head', 'theme_intlTelInputMeta', 0);

function theme_favicon() {
    $custom_favicon_id = get_theme_mod('custom_favicon');
    @list($favicon_src, ,) = wp_get_attachment_image_src($custom_favicon_id, 'full');
    if (!$favicon_src) {
        $favicon_src = "";
        if ($favicon_src) {
            $favicon_src = get_template_directory_uri() . '/images/' . $favicon_src;
        }
    }

    if ($favicon_src) {
        echo "<link rel=\"icon\" href=\"$favicon_src\">";
    }
}
add_action('wp_head', 'theme_favicon');

function theme_gtm_header() {
    $pluginSiteSettings = get_plugin_site_settings();
    if (empty($pluginSiteSettings->googleTagManager) || empty($pluginSiteSettings->googleTagManagerCode)) { ?>
        
    <?php }
}
add_action('wp_head', 'theme_gtm_header', 0);

function theme_gtm_body() {
    $pluginSiteSettings = get_plugin_site_settings();
    if (empty($pluginSiteSettings->googleTagManager) || empty($pluginSiteSettings->googleTagManagerCodeNoScript)) {
        ob_start(); ?>
        
        <?php $gtmCodeNoScript = ob_get_clean(); ?>
        <script>
            jQuery(document).ready(function () {
                jQuery(document).find('body').prepend(`<?php echo $gtmCodeNoScript; ?>`)
            });
        </script>
    <?php }
}
add_action('wp_footer', 'theme_gtm_body');
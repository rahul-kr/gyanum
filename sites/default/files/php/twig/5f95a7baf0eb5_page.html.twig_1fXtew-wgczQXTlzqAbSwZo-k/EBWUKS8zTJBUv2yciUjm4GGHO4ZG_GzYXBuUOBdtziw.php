<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/d8w3css/templates/layout/page.html.twig */
class __TwigTemplate_cae16174bd10ef2be2c2036d4dc15bca8c9ca8f8ce4340be25f224f973f3f0f7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 57];
        $filters = ["escape" => 59, "t" => 59];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 57
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu_vertical", [])) {
            // line 58
            echo "  <!-- Start: Main Navigation - Vertical -->
  <div id=\"main-navigation-v\" class=\"main-navigation-wrapper w3-sidebar w3-bar-block w3-animate-left w3-card w3-theme ";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null)), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Main Navigation"));
            echo "\" >
    <div id=\"main-navigation-inner-v\" class=\"main-navigation-inner-v\">
      <div id=\"close-nav\" class=\"close-nav w3-button w3-bar-block w3-large w3-theme ";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null)), "html", null, true);
            echo "\">
        <i class=\"fa fa-close\"></i>
      </div>
        ";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu_vertical", [])), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Main Navigation - Vertical -->
";
        }
        // line 69
        echo "<!-- Start: Page Wrapper -->
<div class=\"page-wrapper w3-col w3-clear w3-animate-opacity w3-text-theme ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_page_wrapper"] ?? null)), "html", null, true);
        echo " \">
  <!-- Start: Header -->
  <header id=\"header\" class=\"w3-col w3-clear w3-theme-l4 ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_header"] ?? null)), "html", null, true);
        echo "\" role=\"banner\" aria-label=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
    <div id=\"header-inner\" class=\"d8-fade w3-container header-inner ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
        echo "\">
      ";
        // line 74
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu_vertical", [])) {
            // line 75
            echo "        <div id=\"open-nav-inner\" class=\"open-nav-inner w3-opacity w3-hover-opacity-off w3-left w3-button w3-left-align w3-large w3-theme ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null)), "html", null, true);
            echo "\">
          <i class=\"fa fa-bars\"></i>
        </div>
      ";
        }
        // line 79
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 80
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
      ";
        }
        // line 82
        echo "    </div>
  </header>
  <!-- End: Header -->
  ";
        // line 85
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 86
            echo "  <!-- Start: Main Navigation - Horizontal -->
  <div id=\"main-navigation-h\" class=\"w3-col w3-clear main-navigation-wrapper w3-card w3-theme ";
            // line 87
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null)), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Main Navigation"));
            echo "\" >
    <div id=\"main-navigation-inner-h\" class=\"d8-fade w3-row main-navigation-inner-h ";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"mobile-nav w3-hide-large w3-button w3-block w3-right-align w3-large w3-theme ";
            // line 89
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null)), "html", null, true);
            echo "\">
        <i class=\"fa fa-bars\"></i>
      </div>
        ";
            // line 92
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Main Navigation - Horizontal -->
  ";
        }
        // line 97
        echo "  ";
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "welcome_text", []))) {
            // line 98
            echo "    <!-- Start: Welcome Text -->
    <div id=\"welcome-text\" class=\"w3-col w3-clear w3-theme-l5 ";
            // line 99
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_welcome_text"] ?? null)), "html", null, true);
            echo "\">
      <div id=\"welcome-text-inner\" class=\"d8-fade w3-row welcome-text-inner ";
            // line 100
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 101
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "welcome_text", [])), "html", null, true);
            echo "
      </div>
    </div>
    <!-- End: Welcome Text -->
  ";
        }
        // line 106
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 107
            echo "    <!-- Start: Highlighted -->
    <div id=\"highlighted\" class=\"w3-col w3-clear w3-theme-l2 ";
            // line 108
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_highlighted"] ?? null)), "html", null, true);
            echo "\">
      <div id=\"highlighted-inner\" class=\"d8-fade w3-row highlighted-inner ";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 110
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
      </div>
    </div>
    <!-- End: Highlighted -->
  ";
        }
        // line 115
        echo "  ";
        if (($context["is_front"] ?? null)) {
            // line 116
            echo "    ";
            if ((($this->getAttribute(($context["page"] ?? null), "top_first", []) || $this->getAttribute(($context["page"] ?? null), "top_second", [])) || $this->getAttribute(($context["page"] ?? null), "top_third", []))) {
                // line 117
                echo "      <!-- Start: Top Container -->
      <div id=\"top-container\" class=\"w3-col w3-clear w3-theme-l4 ";
                // line 118
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_container"] ?? null)), "html", null, true);
                echo "\">
        <div id=\"top-container-inner\" class=\"w3-row-padding w3-padding-large top-container-inner ";
                // line 119
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
                echo "\">
          ";
                // line 120
                if ($this->getAttribute(($context["page"] ?? null), "top_first", [])) {
                    // line 121
                    echo "            <!-- Start: Top container first region -->
            <div class=\"";
                    // line 122
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null)), "html", null, true);
                    echo " top-box ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " first-top\" >
              <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l5 ";
                    // line 123
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_first"] ?? null)), "html", null, true);
                    echo "\">
               ";
                    // line 124
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_first", [])), "html", null, true);
                    echo "
              </div>
            </div>
            <!-- End: Top Container First -->
          ";
                }
                // line 129
                echo "          ";
                if ($this->getAttribute(($context["page"] ?? null), "top_second", [])) {
                    // line 130
                    echo "            <!-- Start: Top Container Second  -->
            <div class=\"";
                    // line 131
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null)), "html", null, true);
                    echo " top-box ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " second-top\">
              <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l5 ";
                    // line 132
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_second"] ?? null)), "html", null, true);
                    echo "\">
               ";
                    // line 133
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_second", [])), "html", null, true);
                    echo "
              </div>
            </div>
            <!-- End: Top Container Second -->
          ";
                }
                // line 138
                echo "          ";
                if ($this->getAttribute(($context["page"] ?? null), "top_third", [])) {
                    // line 139
                    echo "          <!-- Start: Top Container Third -->
          <div class=\"";
                    // line 140
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null)), "html", null, true);
                    echo " top-box ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " third-top\">
            <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l5 ";
                    // line 141
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_third"] ?? null)), "html", null, true);
                    echo "\">
              ";
                    // line 142
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_third", [])), "html", null, true);
                    echo "
            </div>
          </div>
          <!-- End: Top Container Third -->
          ";
                }
                // line 147
                echo "        </div>
      </div>
      <!-- End: Top container -->
    ";
            }
            // line 151
            echo "  ";
        }
        // line 152
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 153
            echo "    <!-- Start: Page Title -->
    <div id=\"page-title\" class=\"w3-col w3-clear w3-theme-d5 ";
            // line 154
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_page_title"] ?? null)), "html", null, true);
            echo "\">
      <div id=\"page-title-inner\" class=\"d8-fade w3-row page-title-inner ";
            // line 155
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 156
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
    <!-- End: Page Title -- >
  ";
        }
        // line 161
        echo "  <!-- Start: Main -->
  <div id=\"main-container\" class=\"w3-col w3-clear w3-theme-l5 ";
        // line 162
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_main"] ?? null)), "html", null, true);
        echo "\">
    <div id=\"main-container-inner\" class=\"w3-container main-container-inner ";
        // line 163
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
        echo "\">
      ";
        // line 164
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])) {
            // line 165
            echo "        <!-- Breadcrumb -->
        <div class=\"w3-col ";
            // line 166
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_breadcrumb"] ?? null)), "html", null, true);
            echo "\">
          ";
            // line 167
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "
        </div>
        <!-- End: Breadcrumb -->
      ";
        }
        // line 171
        echo "      <!-- Start Main Container  -->
      <div class=\"w3-col w3-clear w3-row-padding\">
        ";
        // line 173
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 174
            echo "          <!-- Start Left SideBar -->
          <div class =\"";
            // line 175
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo " main-box ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " first-sidebar\" role=\"complementary\">
            <div class=\"d8-fade w3-card w3-round w3-sidebar-first w3-mobile ";
            // line 176
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_sidebar_first"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 177
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </div>
          </div>
          <!-- End: Left SideBar -->
        ";
        }
        // line 182
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 183
            echo "          <!-- Start: Main Content -->
          <div class=\"";
            // line 184
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_w3css"] ?? null)), "html", null, true);
            echo " main-box ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " w3css-content\" role=\"main\">
            <div class=\"d8-fade w3-card w3-round w3-mobile  ";
            // line 185
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_content"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 186
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            </div>
          </div>
          <!-- End: Main Content -->
        ";
        }
        // line 191
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 192
            echo "          <!-- Start: Right SideBar -->
          <div class=\"";
            // line 193
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo " main-box ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " second-sidebar\" role=\"complementary\">
            <div class=\"d8-fade w3-card w3-round w3-sidebar-second w3-mobile ";
            // line 194
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_sidebar_second"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 195
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>
          </div>
          <!-- End: Right SideBar -->
        ";
        }
        // line 200
        echo "      </div>
      <!-- Endn: Main Container  -->
    </div>
  </div>
  <!-- End: Main -->
  ";
        // line 205
        if (($context["is_front"] ?? null)) {
            // line 206
            echo "    ";
            if (((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", []))) {
                // line 207
                echo "      <!-- Start: Bottom -->
      <div id=\"bottom-container\" class=\"w3-col w3-clear w3-theme-l2 ";
                // line 208
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_container"] ?? null)), "html", null, true);
                echo "\">
        <div id=\"bottom-container-inner\" class=\"w3-row-padding w3-padding-large bottom-container-inner ";
                // line 209
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 210
                if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                    // line 211
                    echo "              <!-- Start: Bottom First -->
              <div class=\"";
                    // line 212
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null)), "html", null, true);
                    echo " bottom-box ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " first-bottom\">
                <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                    // line 213
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_first"] ?? null)), "html", null, true);
                    echo "\">
                  ";
                    // line 214
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                    echo "
                </div>
              </div>
              <!-- End: Bottom First -->
            ";
                }
                // line 219
                echo "            ";
                if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                    // line 220
                    echo "              <!-- Start: Bottom Second -->
              <div class=\"";
                    // line 221
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null)), "html", null, true);
                    echo " bottom-box ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " second-bottom\">
                <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                    // line 222
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_second"] ?? null)), "html", null, true);
                    echo "\">
                  ";
                    // line 223
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                    echo "
                </div>
              </div>
              <!-- End: Bottom Second -->
            ";
                }
                // line 228
                echo "            ";
                if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                    // line 229
                    echo "              <!-- Start: Bottom Third  -->
              <div class=\"";
                    // line 230
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null)), "html", null, true);
                    echo " bottom-box ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " third-bottom\">
                <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                    // line 231
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_third"] ?? null)), "html", null, true);
                    echo "\">
                  ";
                    // line 232
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                    echo "
                </div>
              </div>
              <!-- End: Bottom Third -->
            ";
                }
                // line 237
                echo "            ";
                if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                    // line 238
                    echo "              <!-- Start: Bottom Forth  -->
              <div class =\"";
                    // line 239
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null)), "html", null, true);
                    echo " bottom-box ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " forth-bottom\">
                <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                    // line 240
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_forth"] ?? null)), "html", null, true);
                    echo "\">
                  ";
                    // line 241
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                    echo "
                </div>
              </div>
              <!-- End: Bottom Forth -->
            ";
                }
                // line 246
                echo "        </div>
      </div>
      <!-- End: Bottom -->
    ";
            }
            // line 250
            echo "  ";
        }
        // line 251
        echo "  ";
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 252
            echo "    <!-- start: Footer -->
    <div id=\"footer-container\" class=\"w3-col w3-clear w3-theme-d3 ";
            // line 253
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_container"] ?? null)), "html", null, true);
            echo "\">
      <div id=\"footer-container-inner\" class=\"w3-row-padding w3-padding-large footer-container-inner ";
            // line 254
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
            echo "\">

        ";
            // line 256
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 257
                echo "          <!-- Start: Footer First  -->
          <div class=\"";
                // line 258
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null)), "html", null, true);
                echo " footer-box ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " first-footer\">
            <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                // line 259
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_first"] ?? null)), "html", null, true);
                echo "\">
              ";
                // line 260
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            </div>
          </div>
          <!-- End: Footer First -->
        ";
            }
            // line 265
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 266
                echo "          <!-- Start: Footer Second Region -->
          <div class=\"";
                // line 267
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null)), "html", null, true);
                echo " footer-box ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " second-footer\">
            <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l5 ";
                // line 268
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_second"] ?? null)), "html", null, true);
                echo "\">
              ";
                // line 269
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
            </div>
          </div>
        <!-- End: Footer Second -->
        ";
            }
            // line 274
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 275
                echo "          <!-- Start: Footer Third -->
          <div class=\"";
                // line 276
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null)), "html", null, true);
                echo " footer-box ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " third-footer\">
            <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                // line 277
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_third"] ?? null)), "html", null, true);
                echo "\">
              ";
                // line 278
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
            </div>
          </div>
          <!-- End: Footer Third -->
        ";
            }
            // line 283
            echo "      </div>
    </div>
    <!-- End: Footer -->
  ";
        }
        // line 287
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "footer_menu", []) || ($context["show_social_icon"] ?? null))) {
            // line 288
            echo "    <!-- Start: Footer Menu -->
    <div id=\"footer-menu\" class=\"w3-col w3-clear w3-card w3-theme-d4 ";
            // line 289
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_menu"] ?? null)), "html", null, true);
            echo "\">
      <div id=\"footer-menu-inner\" class=\"w3-row footer-menu-inner ";
            // line 290
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 291
            if (($context["show_social_icon"] ?? null)) {
                // line 292
                echo "          <!-- Start: Social Media -->
          <div class=\"d8-fade w3-center w3-container w3-mobile social-media\">
            ";
                // line 294
                if (($context["facebook_url"] ?? null)) {
                    // line 295
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
                }
                // line 297
                echo "            ";
                if (($context["twitter_url"] ?? null)) {
                    // line 298
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
                }
                // line 300
                echo "            ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 301
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a>
            ";
                }
                // line 303
                echo "            ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 304
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
                }
                // line 306
                echo "            ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 307
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
                }
                // line 309
                echo "            ";
                if (($context["instagram_url"] ?? null)) {
                    // line 310
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a>
            ";
                }
                // line 312
                echo "            ";
                if (($context["youtube_url"] ?? null)) {
                    // line 313
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
            ";
                }
                // line 315
                echo "            ";
                if (($context["drupal_url"] ?? null)) {
                    // line 316
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["drupal_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding-large\" target=\"_blank\" ><i class=\"fa fa-drupal\"></i></a>
            ";
                }
                // line 318
                echo "            ";
                if (($context["rss_url"] ?? null)) {
                    // line 319
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding-large\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
                }
                // line 321
                echo "          </div>
          <!-- End: Social Media -->
        ";
            }
            // line 324
            echo "        <!-- Start: Bottom Menu -->
        ";
            // line 325
            if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
                // line 326
                echo "          <div class=\"d8-fade w3-container w3-center w3-mobile\">
            ";
                // line 327
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
                echo "
          </div>
          <!-- End: Bottom Menu -->
        ";
            }
            // line 331
            echo "      </div>
    </div>
    <!-- End: Footer Menu -->
  ";
        }
        // line 335
        echo "  ";
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 336
            echo "    <!-- Start: Copyright -->
    <div id=\"copyright\" class=\"w3-col w3-clear w3-theme-d5 ";
            // line 337
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_copyright"] ?? null)), "html", null, true);
            echo "\">
      <div id=\"copyright-inner\" class=\"w3-row copyright-inner ";
            // line 338
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 339
            if (($context["copyright_text"] ?? null)) {
                // line 340
                echo "          <!-- Start: Copyright -->
          <div class=\"w3-half w3-container w3-mobile\">
            <p class=\"w3-section w3-left-align w3-opacity w3-hover-opacity-off\">";
                // line 342
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null)), "html", null, true);
                echo "</p>
          </div>
          <!-- End: Copyright -->
        ";
            }
            // line 346
            echo "        ";
            if (($context["show_credit_link"] ?? null)) {
                // line 347
                echo "          <!-- Start: Credit Link -->
          <div class=\"w3-half w3-container w3-mobile\">
            <p class=\"w3-section w3-right-align w3-opacity w3-hover-opacity-off\">Designed by: <a href=\"https://www.alaahaddad.com\" title=\"Alaa Haddad\" target=\"_blank\">Alaa Haddad</a></p>
          </div>
          <!-- End: Credit Link -->
        ";
            }
            // line 353
            echo "      </div>
    </div>
    <!-- End: Copyright -->
  ";
        }
        // line 357
        echo "</div>
<!-- End: Page Wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/d8w3css/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  807 => 357,  801 => 353,  793 => 347,  790 => 346,  783 => 342,  779 => 340,  777 => 339,  773 => 338,  769 => 337,  766 => 336,  763 => 335,  757 => 331,  750 => 327,  747 => 326,  745 => 325,  742 => 324,  737 => 321,  731 => 319,  728 => 318,  722 => 316,  719 => 315,  713 => 313,  710 => 312,  704 => 310,  701 => 309,  695 => 307,  692 => 306,  686 => 304,  683 => 303,  677 => 301,  674 => 300,  668 => 298,  665 => 297,  659 => 295,  657 => 294,  653 => 292,  651 => 291,  647 => 290,  643 => 289,  640 => 288,  637 => 287,  631 => 283,  623 => 278,  619 => 277,  613 => 276,  610 => 275,  607 => 274,  599 => 269,  595 => 268,  589 => 267,  586 => 266,  583 => 265,  575 => 260,  571 => 259,  565 => 258,  562 => 257,  560 => 256,  555 => 254,  551 => 253,  548 => 252,  545 => 251,  542 => 250,  536 => 246,  528 => 241,  524 => 240,  518 => 239,  515 => 238,  512 => 237,  504 => 232,  500 => 231,  494 => 230,  491 => 229,  488 => 228,  480 => 223,  476 => 222,  470 => 221,  467 => 220,  464 => 219,  456 => 214,  452 => 213,  446 => 212,  443 => 211,  441 => 210,  437 => 209,  433 => 208,  430 => 207,  427 => 206,  425 => 205,  418 => 200,  410 => 195,  406 => 194,  400 => 193,  397 => 192,  394 => 191,  386 => 186,  382 => 185,  376 => 184,  373 => 183,  370 => 182,  362 => 177,  358 => 176,  352 => 175,  349 => 174,  347 => 173,  343 => 171,  336 => 167,  332 => 166,  329 => 165,  327 => 164,  323 => 163,  319 => 162,  316 => 161,  308 => 156,  304 => 155,  300 => 154,  297 => 153,  294 => 152,  291 => 151,  285 => 147,  277 => 142,  273 => 141,  267 => 140,  264 => 139,  261 => 138,  253 => 133,  249 => 132,  243 => 131,  240 => 130,  237 => 129,  229 => 124,  225 => 123,  219 => 122,  216 => 121,  214 => 120,  210 => 119,  206 => 118,  203 => 117,  200 => 116,  197 => 115,  189 => 110,  185 => 109,  181 => 108,  178 => 107,  175 => 106,  167 => 101,  163 => 100,  159 => 99,  156 => 98,  153 => 97,  145 => 92,  139 => 89,  135 => 88,  129 => 87,  126 => 86,  124 => 85,  119 => 82,  113 => 80,  110 => 79,  102 => 75,  100 => 74,  96 => 73,  90 => 72,  85 => 70,  82 => 69,  74 => 64,  68 => 61,  61 => 59,  58 => 58,  55 => 57,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/d8w3css/templates/layout/page.html.twig", "/var/www/themes/contrib/d8w3css/templates/layout/page.html.twig");
    }
}

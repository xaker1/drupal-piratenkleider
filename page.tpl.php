<ul role="navigation" class="nav skiplinks">
  <li><a class="ym-skip" href="#nav"><?php print t('Zur Navigation springen.'); ?></a></li>
  <li><a class="ym-skip" href="#main-content"><?php print t('Zum Inhalt springen.'); ?></a></li>
  <li><a class="ym-skip" href="#searchform"><?php print t('Zur Suche springen.'); ?></a></li>
</ul>

<div class="section header">
  <div class="row">
    <div class="branding">
      <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home" class="logo">
        <h1><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></h1>
      </a>
    </div>

    <div class="nav-top" role="navigation">
      <h2 class="skip"><?php print t('Service-Navigation'); ?></h2>

      <?php print render($page['social']); ?>

      <?php if ($secondary_menu): ?>
      <div class="menu-header">
        <?php print theme('links__system_secondary_menu', array(
                      'links' => $secondary_menu,
                      'attributes' => array(
                        'id' => 'menu-topmenu',
                        'class' => array('menu'),
                      ),
                      'heading' => array(
                        'text' => t('Secondary menu'),
                        'level' => 'h3',
                        'class' => array('skip'),
                      ),
                    )); ?>
      </div>
      <?php endif; ?>

      <?php
        if (module_exists('search') && user_access('search content')) {
          $searchform = drupal_get_form('search_block_form', 'search_block_form');

          $searchform['#attributes']['class'] = 'searchform';
          $searchform['search_block_form']['#attributes']['onblur'] = "if(this.value=='')this.value='" . t('Suchbegriff eingeben') . "';";
          $searchform['search_block_form']['#attributes']['onfocus'] = "if(this.value=='" . t('Suchbegriff eingeben') . "')this.value='';";
          $searchform['search_block_form']['#attributes']['placeholder'] = t('Suchbegriff eingeben');

          print drupal_render($searchform);
        }
      ?>
    </div>

    <div class="nav-main" role="navigation" id="nav">
        <h2 class="skip"><?php print t('Navigation'); ?></h2>
        <?php if ($main_menu): ?>
        <div class="menu-header">
          <?php print render($main_menu_expanded); ?>
        </div>
        <?php endif; ?>
    </div>

    <div class="sticker">
      <div class="skin">
        <h2 class="skip"><?php print t('Sticker'); ?></h2>
        <?php print render($page['sticker']); ?>
      </div>
    </div>

  </div>
</div>

<div class="section breadcrumbs">
  <div class="row">
    <div class="skin">
      <?php print $breadcrumb; ?>
    </div>
  </div>
</div>

<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
      <?php if ($is_front && $page['slideshow']): ?>
        <?php print render($page['slideshow']); ?>
      <?php endif; ?>

      <?php if ($title): ?>
        <div style="padding: 20px 0px 0px 20px; margin-left: 10px;"><!-- change back for article image implemenation: class="content-header" -->
          <?php if ($action_links): ?>
          <?php print render($action_links); ?>
          <?php endif; ?>

          <?php print render($title_prefix); ?>
          <h1 id="page-title">
            <span><?php print $title ?></span>
          </h1>
          <?php print render($title_suffix); ?>
        </div>
      <?php endif; ?>

      <div class="skin">
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>

        <?php print $messages; ?>
        <?php print render($page['help']); ?>
        <?php print render($page['content']); ?>
      </div>
    </div>

    <div class="content-aside">
      <?php if ($is_front && theme_get_setting('piratenkleider_teaserlinks') == 1): ?>
        <div class="teaserskin">
          <div class="teaserlinks">
            <ul>
              <?php
                for ($i = 1; $i <= 3; $i++) {
                  print '<li><a href="'.theme_get_setting('piratenkleider_teaser' . $i . '_url').'" class="symbol symbol-'.theme_get_setting('piratenkleider_teaser' . $i . '_symbol').'">'.theme_get_setting('piratenkleider_teaser' . $i . '_title').' <span>'.theme_get_setting('piratenkleider_teaser' . $i . '_subtitle').'</span></a></li>';
                }
              ?>
            </ul>
          </div>
        </div>
      <?php endif; ?>

      <div class="skin">
        <h1 class="skip"><?php print t('Weitere Informationen'); ?></h1>
        <?php print render($page['sidebar_first']); ?>
      </div>
    </div>
  </div>
</div>

<div class="section footer">
  <div class="row">
    <?php print render($page['footer']); ?>
    <?php print render($page['siteinfo']); ?>
  </div>
</div>

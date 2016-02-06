<?php

function theme_settings_page()
{
    ?>
    <div class="wrap">
        <h1>Optionen für "ds2016"-Theme</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields("section");
            do_settings_sections("theme-options");
            do_settings_sections("social-options");
            do_settings_sections("tracking-options");
            submit_button();
            ?>          
        </form>
    </div>
    <?php
}

function add_theme_menu_item()
{
    add_menu_page("Theme-Optionen", "Theme-Optionen", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

function display_articleteaser()
{
    ?>
    <textarea id="article_teaser" style="width:100%;height:100px" name="article_teaser"><?php echo get_option('article_teaser'); ?></textarea>
    <?php
}

function display_facebook()
{
    ?>
    <input type="" id="facebook_url" style="width:100%" name="facebook_url" value="<?php echo get_option('facebook_url'); ?>"/>
    <?php
}

function display_twitter()
{
    ?>
    <input type="" id="twitter_url" style="width:100%" name="twitter_url" value="<?php echo get_option('twitter_url'); ?>"/>
    <?php
}

function display_github()
{
    ?>
    <input type="" id="github_url" style="width:100%" name="github_url" value="<?php echo get_option('github_url'); ?>"/>
    <?php
}

function display_linkedin()
{
    ?>
    <input type="" id="linkedin_url" style="width:100%" name="linkedin_url" value="<?php echo get_option('linkedin_url'); ?>"/>
    <?php
}

function display_jscode_ga()
{
    ?>
    <textarea id="ga_js_code" style="width:100%;height:300px" name="ga_js_code"><?php echo get_option('ga_js_code'); ?></textarea>
    <?php
}

function add_theme_options()
{
    add_settings_section("section", "Einstellungsmöglichkeiten", null, "theme-options");
    add_settings_field("article_teaser", "Unter jedem Artikel", "display_articleteaser", "theme-options", "section");
    register_setting("section", "article_teaser");

    add_settings_section("section", "Social-Einstellungen", null, "social-options");
    add_settings_field("facebook_url", "Facebook URL", "display_facebook", "social-options", "section");
    add_settings_field("twitter_url", "Twitter URL", "display_twitter", "social-options", "section");
    add_settings_field("github_url", "Github URL", "display_github", "social-options", "section");
    add_settings_field("linkedin_url", "Linkedin URL", "display_linkedin", "social-options", "section");

    register_setting("section", "facebook_url");
    register_setting("section", "twitter_url");
    register_setting("section", "github_url");
    register_setting("section", "linkedin_url");

    add_settings_section("section", "Tracking Code (Google Analytics)", null, "tracking-options");
    add_settings_field("ga_js_code", "JS Code", "display_jscode_ga", "tracking-options", "section");
    register_setting("section", "ga_js_code");
}

add_action("admin_init", "add_theme_options");

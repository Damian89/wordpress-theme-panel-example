<?php

function socialLinks()
{
    $facebook = get_option('facebook_url');
    if ($facebook != '')
    {
        echo '<a class="clickevent" href="' . $facebook . '"><i class="icon-fabo"></i></a>';
    }

    $linkedin = get_option('linkedin_url');
    if ($linkedin != '')
    {
        echo '<a class="clickevent" href="' . $linkedin . '"><i class="icon-linkedin"></i></a>';
    }

    $twitter = get_option('twitter_url');
    if ($twitter != '')
    {
        echo '<a class="clickevent" href="' . $twitter . '"><i class="icon-twtr"></i></a>';
    }

    $github = get_option('github_url');
    if ($github != '')
    {
        echo '<a class="clickevent" href="' . $github . '"><i class="icon-github-circled"></i></a>';
    }
}

function teaser_under_singlearticle()
{
    $teaser = get_option('article_teaser');
    if ($teaser != '')
    {
        $teaser_html = '<div id="article-teaser-wrapper" class="row"><div class="col-lg-12"><div class="alert alert-info article-teaser">';
        $teaser_html .= $teaser;
        $teaser_html .= '</div></div></div>';
        echo $teaser_html;
    }
}

function tracking_code()
{
    $jscode = get_option('ga_js_code');

    if ($jscode != '')
    {
        echo $jscode;
    }
}

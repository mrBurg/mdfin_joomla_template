<?php

defined('_JEXEC') or die;


$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;

$option     = $app->input->getCmd('option', '');
$view       = $app->input->getCmd('view', '');
$layout     = $app->input->getCmd('layout', '');
$task       = $app->input->getCmd('task', '');
$itemid     = $app->input->getCmd('Itemid', '');
$controller = $app->input->getCmd('controller', '');
$product    = $app->input->getCmd('product_id', '');



JHtml::_('jquery.framework');
//JHTML::_('behavior.modal');
//current page name
$current_page = JFactory::getDocument()->title;

$jinput = JFactory::getApplication()->input;

$page_id = $jinput->get('id');
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <jdoc:include type="head" />
    <!--<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css" rel="stylesheet" type="text/css" />-->
    <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/index.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/utils.js" type="text/javascript"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.mfs.js" type="text/javascript"></script>
    <?php /* TODO: for prod CloudPulse*/ ?>
    <?php if ($current_page == 'CloudPulse') { ?>
        <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/swiper-bundle.min.js" type="text/javascript"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/CloudPulse.js" type="text/javascript"></script>
    <?php } ?>
    <?php if ($current_page == 'AI Scoring') { ?>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/Scoring.js" type="text/javascript"></script>
    <?php } ?>

    <?php if ($page_id == 28 || $page_id == 30) { ?>
        <style>
            .item-pageproducts .article {
                align-items: unset !important;
            }

            .wrapper__content {
                padding: 0 20px;
            }
        </style>

    <?php } ?>
</head>

<body class="<?php echo $option
                    . ' view-' . $view
                    . ' lang-' . $this->language
                    . ($layout ? ' layout-' . $layout : ' no-layout')
                    . ($task ? ' task-' . $task : ' no-task')
                    . ($itemid ? ' itemid-' . $itemid : '')
                    . ($controller ? ' controller-' . $controller : '');
                ?>">

    <div class="wrapper">
        <div class="wrapper__content">
            <header class="top">
                <div class="supwrap">
                    <div class="topmenu">
                        <div class="logotip"><a href="/"><img src="/templates/mdfin/images/logo.png" /></a></div>
                        <div class="menu-desk">
                            <jdoc:include type="modules" name="topmenu" style="html5" />
                        </div>
                        <div class="menu-mob-bars">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                        <div class="menu-mob">
                            <div class="menu-mob__top">
                                <div class="logotip"><a href="/"><img src="templates/mdfin/images/logo-wht.svg" alt="logo" /></a></div>
                                <div class="close"><img src="templates/mdfin/images/icon-close.svg" alt="icon-close"></div>
                            </div>
                            <jdoc:include type="modules" name="topmenu" style="html5" />
                            <div class="menu-mob__bottom">
                                <div class="menu-title">Global business development</div>
                                <div class="menu-email"><a href="mailto:yegor.kononenko@mdfin.com"><img src="images/icon1.png" alt="" />yegor.kononenko@mdfin.com</a></div>
                                <div class="menu-phone"><a href="tel:+380674808018"><img src="templates/mdfin/images/icon-tel.png" alt="" />+38 067 480 8018</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <?php if ($this->countModules('showcase')) : ?>
                <div class="showcase">
                    <jdoc:include type="modules" name="showcase" style="html5" />
                </div>
            <?php endif; ?>

            <div class="mainarea">
                <div class="supwrap">
                    <?php if ($this->countModules('bread')) : ?>
                        <div class="bread">
                            <jdoc:include type="modules" name="bread" style="none" />
                        </div>
                    <?php endif; ?>

                    <div class="main-content">
                        <?php if ($this->countModules('sidebar')) : ?>
                            <div class="sidebar">
                                <jdoc:include type="modules" name="sidebar" style="html5" />
                            </div>
                        <?php endif; ?>

                        <div class="contentarea">
                            <jdoc:include type="message" />
                            <jdoc:include type="component" />
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <footer class="bottom wrapper__footer">
            <div class="supwrap">
                <div class="footer-menu">
                    <div class="inner">
                        <div class="inner__about">
                            <div class="logotip-footer"><a href="/"><img src="templates/mdfin/images/logo-wht.svg" /></a></div>
                            <div class="about-title">About MD Finance</div>
                            <div class="about-text">
                                MD Finance is the innovative fintech company that offers effective products for both <span>B2B</span> and <span>B2C markets</span>.
                                Our partners successfully run retail lending businesses in 4 countries: <span>Romania, Czech Republic, Ukraine, and Vietnam</span>.
                                More than <span>12 millions</span> loan applications processed and 2.5 millions loans disbursed through the Cloud Pulse® loan solution.
                            </div>
                        </div>
                        <div class="inner__contact">
                            <jdoc:include type="modules" name="footer-menu" style="none" />

                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div>Copyright &copy; <?php echo date('Y'); ?> «MDFinance» All right reserved</div>
                </div>
            </div>
        </footer>
    </div>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-72852829-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>
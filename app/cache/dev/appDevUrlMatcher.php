<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'Cdlr\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Cdlr\\UserBundle\\Controller\\UserController::showAction',));
            }

            // user_new
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'Cdlr\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/user/create') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_create;
                }

                return array (  '_controller' => 'Cdlr\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // gerant_user_create
            if ($pathinfo === '/user/gerant_create') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_gerant_user_create;
                }

                return array (  '_controller' => 'Cdlr\\UserBundle\\Controller\\AdminSideController::gerantcreateAction',  '_route' => 'gerant_user_create',);
            }
            not_gerant_user_create:

            // admin_user_create
            if ($pathinfo === '/user/admin_create') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_user_create;
                }

                return array (  '_controller' => 'Cdlr\\UserBundle\\Controller\\AdminSideController::admincreateAction',  '_route' => 'admin_user_create',);
            }
            not_admin_user_create:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Cdlr\\UserBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Cdlr\\UserBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Cdlr\\UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_homepage
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\DefaultController::adminAction',  '_route' => 'admin_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/liste_')) {
                // liste_admin
                if ($pathinfo === '/admin/liste_admin') {
                    return array (  '_controller' => 'Cdlr\\UserBundle\\Controller\\UserController::adminAction',  '_route' => 'liste_admin',);
                }

                // liste_candidat
                if ($pathinfo === '/admin/liste_candidat') {
                    return array (  '_controller' => 'Cdlr\\UserBundle\\Controller\\UserController::candidatAction',  '_route' => 'liste_candidat',);
                }

                // liste_gerant
                if ($pathinfo === '/admin/liste_gerant') {
                    return array (  '_controller' => 'Cdlr\\UserBundle\\Controller\\UserController::gerantAction',  '_route' => 'liste_gerant',);
                }

                // liste_moniteur
                if ($pathinfo === '/admin/liste_moniteur') {
                    return array (  '_controller' => 'Cdlr\\UserBundle\\Controller\\UserController::moniteurAction',  '_route' => 'liste_moniteur',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/home')) {
            // gerant_homepage
            if ($pathinfo === '/home/gerant') {
                return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\DefaultController::gerantAction',  '_route' => 'gerant_homepage',);
            }

            // moniteur_homepage
            if ($pathinfo === '/home/moniteur') {
                return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\DefaultController::moniteurAction',  '_route' => 'moniteur_homepage',);
            }

            // cdlr_user_homepage
            if ($pathinfo === '/home') {
                return array (  '_controller' => 'Cdlr\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'cdlr_user_homepage',);
            }

        }

        if (0 === strpos($pathinfo, '/login/log')) {
            if (0 === strpos($pathinfo, '/login/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/login/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/facebook/log')) {
            // _security_check_facebook
            if ($pathinfo === '/facebook/login_check') {
                return array (  '_controller' => 'Cdlr\\UserBundle\\Controller\\UserController::loginFbAction',  '_route' => '_security_check_facebook',);
            }

            // _security_facebook_logout
            if ($pathinfo === '/facebook/logout') {
                return array('_route' => '_security_facebook_logout');
            }

        }

        // user_couple_fb_with_account
        if ($pathinfo === '/user/couple/facebook') {
            return array (  '_controller' => 'Cdlr\\UserBundle\\Controller\\UserController::connectFacebookWithAccountAction',  '_route' => 'user_couple_fb_with_account',);
        }

        // my_app_mail_succ
        if ($pathinfo === '/succ') {
            return array (  '_controller' => 'Cdlr\\mailBundle\\Controller\\MailController::indexAction',  '_route' => 'my_app_mail_succ',);
        }

        // my_app_mail_form
        if ($pathinfo === '/mail') {
            return array (  '_controller' => 'Cdlr\\mailBundle\\Controller\\MailController::newAction',  '_route' => 'my_app_mail_form',);
        }

        // my_app_mail_sendpage
        if ($pathinfo === '/sendmail') {
            return array (  '_controller' => 'Cdlr\\mailBundle\\Controller\\MailController::sendMailAction',  '_route' => 'my_app_mail_sendpage',);
        }

        if (0 === strpos($pathinfo, '/calendar')) {
            // calendar_index
            if ($pathinfo === '/calendar') {
                return array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::indexAction',  '_route' => 'calendar_index',);
            }

            // calendar_event_list
            if ($pathinfo === '/calendar/list') {
                return array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::listAction',  '_route' => 'calendar_event_list',);
            }

            if (0 === strpos($pathinfo, '/calendar/by_')) {
                // calendar_event_list_by_day
                if (0 === strpos($pathinfo, '/calendar/by_day') && preg_match('#^/calendar/by_day/(?P<year>[^/]++)/(?P<month>[^/]++)/(?P<day>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_event_list_by_day')), array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::listByDayAction',));
                }

                // calendar_event_list_by_week
                if (0 === strpos($pathinfo, '/calendar/by_week') && preg_match('#^/calendar/by_week/(?P<year>[^/]++)/(?P<month>[^/]++)/(?P<day>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_event_list_by_week')), array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::listByWeekAction',));
                }

                // calendar_event_list_by_month
                if (0 === strpos($pathinfo, '/calendar/by_month') && preg_match('#^/calendar/by_month/(?P<year>[^/]++)/(?P<month>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_event_list_by_month')), array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::listByMonthAction',));
                }

            }

            // calendar_event_add
            if ($pathinfo === '/calendar/add') {
                return array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::addAction',  '_route' => 'calendar_event_add',);
            }

            // calendar_event_edit
            if (preg_match('#^/calendar/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_event_edit')), array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::editAction',));
            }

            // calendar_event_delete
            if (preg_match('#^/calendar/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_event_delete')), array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\EventController::deleteAction',));
            }

            // calendar_mini_calendar
            if (0 === strpos($pathinfo, '/calendar/mini') && preg_match('#^/calendar/mini/(?P<year>[^/]++)/(?P<month>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_mini_calendar')), array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\CalendarController::showMiniAction',));
            }

            if (0 === strpos($pathinfo, '/calendar/category')) {
                // calendar_category_edit
                if (preg_match('#^/calendar/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_category_edit')), array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\CategoryController::editAction',));
                }

                // calendar_category_delete
                if (preg_match('#^/calendar/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar_category_delete')), array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\CategoryController::deleteAction',));
                }

                // calendar_category_add
                if ($pathinfo === '/calendar/category/add') {
                    return array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\CategoryController::addAction',  '_route' => 'calendar_category_add',);
                }

            }

            if (0 === strpos($pathinfo, '/calendar/settings')) {
                // calendar_settings_update
                if ($pathinfo === '/calendar/settings/update') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_calendar_settings_update;
                    }

                    return array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\SettingsController::updateAction',  '_route' => 'calendar_settings_update',);
                }
                not_calendar_settings_update:

                // calendar_settings
                if ($pathinfo === '/calendar/settings') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_calendar_settings;
                    }

                    return array (  '_controller' => 'BladeTester\\CalendarBundle\\Controller\\SettingsController::indexAction',  '_route' => 'calendar_settings',);
                }
                not_calendar_settings:

            }

        }

        if (0 === strpos($pathinfo, '/home')) {
            // graphe
            if ($pathinfo === '/home/graphe/show') {
                return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\GrapheController::ChartPieAction',  '_route' => 'graphe',);
            }

            if (0 === strpos($pathinfo, '/home/review')) {
                // review
                if (rtrim($pathinfo, '/') === '/home/review') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'review');
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ReviewController::indexAction',  '_route' => 'review',);
                }

                // review_show
                if (preg_match('#^/home/review/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'review_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ReviewController::showAction',));
                }

                // review_new
                if ($pathinfo === '/home/review/new') {
                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ReviewController::newAction',  '_route' => 'review_new',);
                }

                // review_create
                if ($pathinfo === '/home/review/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_review_create;
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ReviewController::createAction',  '_route' => 'review_create',);
                }
                not_review_create:

                // review_edit
                if (preg_match('#^/home/review/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'review_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ReviewController::editAction',));
                }

                // review_update
                if (preg_match('#^/home/review/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_review_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'review_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ReviewController::updateAction',));
                }
                not_review_update:

                // review_delete
                if (preg_match('#^/home/review/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_review_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'review_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ReviewController::deleteAction',));
                }
                not_review_delete:

            }

            if (0 === strpos($pathinfo, '/home/offreemploi')) {
                // offreemploi
                if (rtrim($pathinfo, '/') === '/home/offreemploi') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'offreemploi');
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\OffreEmploiController::indexAction',  '_route' => 'offreemploi',);
                }

                // offreemploi_show
                if (preg_match('#^/home/offreemploi/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offreemploi_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\OffreEmploiController::showAction',));
                }

                // offreemploi_new
                if ($pathinfo === '/home/offreemploi/new') {
                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\OffreEmploiController::newAction',  '_route' => 'offreemploi_new',);
                }

                // offreemploi_create
                if ($pathinfo === '/home/offreemploi/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_offreemploi_create;
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\OffreEmploiController::createAction',  '_route' => 'offreemploi_create',);
                }
                not_offreemploi_create:

                // offreemploi_edit
                if (preg_match('#^/home/offreemploi/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offreemploi_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\OffreEmploiController::editAction',));
                }

                // offreemploi_update
                if (preg_match('#^/home/offreemploi/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_offreemploi_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offreemploi_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\OffreEmploiController::updateAction',));
                }
                not_offreemploi_update:

                // offreemploi_delete
                if (preg_match('#^/home/offreemploi/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_offreemploi_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offreemploi_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\OffreEmploiController::deleteAction',));
                }
                not_offreemploi_delete:

            }

            if (0 === strpos($pathinfo, '/home/notification')) {
                // notification
                if (rtrim($pathinfo, '/') === '/home/notification') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'notification');
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\NotificationController::indexAction',  '_route' => 'notification',);
                }

                // notification_show
                if (preg_match('#^/home/notification/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\NotificationController::showAction',));
                }

                // notification_new
                if ($pathinfo === '/home/notification/new') {
                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\NotificationController::newAction',  '_route' => 'notification_new',);
                }

                // notification_create
                if ($pathinfo === '/home/notification/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_notification_create;
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\NotificationController::createAction',  '_route' => 'notification_create',);
                }
                not_notification_create:

                // notification_edit
                if (preg_match('#^/home/notification/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\NotificationController::editAction',));
                }

                // notification_update
                if (preg_match('#^/home/notification/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_notification_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\NotificationController::updateAction',));
                }
                not_notification_update:

                // notification_delete
                if (preg_match('#^/home/notification/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_notification_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\NotificationController::deleteAction',));
                }
                not_notification_delete:

            }

            if (0 === strpos($pathinfo, '/home/listeattente')) {
                // listeattente
                if (rtrim($pathinfo, '/') === '/home/listeattente') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'listeattente');
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ListeAttenteController::indexAction',  '_route' => 'listeattente',);
                }

                // listeattente_show
                if (preg_match('#^/home/listeattente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'listeattente_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ListeAttenteController::showAction',));
                }

                // listeattente_new
                if ($pathinfo === '/home/listeattente/new') {
                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ListeAttenteController::newAction',  '_route' => 'listeattente_new',);
                }

                // listeattente_create
                if ($pathinfo === '/home/listeattente/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_listeattente_create;
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ListeAttenteController::createAction',  '_route' => 'listeattente_create',);
                }
                not_listeattente_create:

                // listeattente_edit
                if (preg_match('#^/home/listeattente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'listeattente_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ListeAttenteController::editAction',));
                }

                // listeattente_update
                if (preg_match('#^/home/listeattente/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_listeattente_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'listeattente_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ListeAttenteController::updateAction',));
                }
                not_listeattente_update:

                // listeattente_delete
                if (preg_match('#^/home/listeattente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_listeattente_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'listeattente_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ListeAttenteController::deleteAction',));
                }
                not_listeattente_delete:

            }

            if (0 === strpos($pathinfo, '/home/coursvi')) {
                if (0 === strpos($pathinfo, '/home/coursview')) {
                    // coursview
                    if (rtrim($pathinfo, '/') === '/home/coursview') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'coursview');
                        }

                        return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursViewController::indexAction',  '_route' => 'coursview',);
                    }

                    // coursview_show
                    if (preg_match('#^/home/coursview/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'coursview_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursViewController::showAction',));
                    }

                    // coursview_new
                    if ($pathinfo === '/home/coursview/new') {
                        return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursViewController::newAction',  '_route' => 'coursview_new',);
                    }

                    // coursview_create
                    if ($pathinfo === '/home/coursview/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_coursview_create;
                        }

                        return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursViewController::createAction',  '_route' => 'coursview_create',);
                    }
                    not_coursview_create:

                    // coursview_edit
                    if (preg_match('#^/home/coursview/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'coursview_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursViewController::editAction',));
                    }

                    // coursview_update
                    if (preg_match('#^/home/coursview/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_coursview_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'coursview_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursViewController::updateAction',));
                    }
                    not_coursview_update:

                    // coursview_delete
                    if (preg_match('#^/home/coursview/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_coursview_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'coursview_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursViewController::deleteAction',));
                    }
                    not_coursview_delete:

                }

                if (0 === strpos($pathinfo, '/home/coursvideo')) {
                    // coursvideo
                    if (rtrim($pathinfo, '/') === '/home/coursvideo') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'coursvideo');
                        }

                        return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursVideoController::indexAction',  '_route' => 'coursvideo',);
                    }

                    // coursvideo_show
                    if (preg_match('#^/home/coursvideo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'coursvideo_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursVideoController::showAction',));
                    }

                    // coursvideo_new
                    if ($pathinfo === '/home/coursvideo/new') {
                        return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursVideoController::newAction',  '_route' => 'coursvideo_new',);
                    }

                    // coursvideo_create
                    if ($pathinfo === '/home/coursvideo/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_coursvideo_create;
                        }

                        return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursVideoController::createAction',  '_route' => 'coursvideo_create',);
                    }
                    not_coursvideo_create:

                    // coursvideo_edit
                    if (preg_match('#^/home/coursvideo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'coursvideo_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursVideoController::editAction',));
                    }

                    // coursvideo_update
                    if (preg_match('#^/home/coursvideo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_coursvideo_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'coursvideo_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursVideoController::updateAction',));
                    }
                    not_coursvideo_update:

                    // coursvideo_delete
                    if (preg_match('#^/home/coursvideo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_coursvideo_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'coursvideo_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursVideoController::deleteAction',));
                    }
                    not_coursvideo_delete:

                }

            }

            if (0 === strpos($pathinfo, '/home/ventevoiture')) {
                // ventevoiture
                if (rtrim($pathinfo, '/') === '/home/ventevoiture') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ventevoiture');
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\VenteVoitureController::indexAction',  '_route' => 'ventevoiture',);
                }

                // ventevoiture_show
                if (preg_match('#^/home/ventevoiture/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ventevoiture_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\VenteVoitureController::showAction',));
                }

                // ventevoiture_new
                if ($pathinfo === '/home/ventevoiture/new') {
                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\VenteVoitureController::newAction',  '_route' => 'ventevoiture_new',);
                }

                // ventevoiture_create
                if ($pathinfo === '/home/ventevoiture/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ventevoiture_create;
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\VenteVoitureController::createAction',  '_route' => 'ventevoiture_create',);
                }
                not_ventevoiture_create:

                // ventevoiture_edit
                if (preg_match('#^/home/ventevoiture/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ventevoiture_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\VenteVoitureController::editAction',));
                }

                // ventevoiture_update
                if (preg_match('#^/home/ventevoiture/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_ventevoiture_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ventevoiture_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\VenteVoitureController::updateAction',));
                }
                not_ventevoiture_update:

                // ventevoiture_delete
                if (preg_match('#^/home/ventevoiture/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_ventevoiture_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ventevoiture_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\VenteVoitureController::deleteAction',));
                }
                not_ventevoiture_delete:

            }

            if (0 === strpos($pathinfo, '/home/test')) {
                // test
                if (rtrim($pathinfo, '/') === '/home/test') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'test');
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\TestController::indexAction',  '_route' => 'test',);
                }

                // test_show
                if (preg_match('#^/home/test/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\TestController::showAction',));
                }

                // test_new
                if ($pathinfo === '/home/test/new') {
                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\TestController::newAction',  '_route' => 'test_new',);
                }

                // test_create
                if ($pathinfo === '/home/test/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_test_create;
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\TestController::createAction',  '_route' => 'test_create',);
                }
                not_test_create:

                // test_edit
                if (preg_match('#^/home/test/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\TestController::editAction',));
                }

                // test_update
                if (preg_match('#^/home/test/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_test_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\TestController::updateAction',));
                }
                not_test_update:

                // test_delete
                if (preg_match('#^/home/test/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_test_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\TestController::deleteAction',));
                }
                not_test_delete:

            }

            if (0 === strpos($pathinfo, '/home/re')) {
                if (0 === strpos($pathinfo, '/home/rendezvous')) {
                    // rendezvous
                    if (rtrim($pathinfo, '/') === '/home/rendezvous') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'rendezvous');
                        }

                        return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\RendezVousController::indexAction',  '_route' => 'rendezvous',);
                    }

                    // rendezvous_show
                    if (preg_match('#^/home/rendezvous/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rendezvous_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\RendezVousController::showAction',));
                    }

                    // rendezvous_new
                    if ($pathinfo === '/home/rendezvous/new') {
                        return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\RendezVousController::newAction',  '_route' => 'rendezvous_new',);
                    }

                    // rendezvous_create
                    if ($pathinfo === '/home/rendezvous/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_rendezvous_create;
                        }

                        return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\RendezVousController::createAction',  '_route' => 'rendezvous_create',);
                    }
                    not_rendezvous_create:

                    // rendezvous_edit
                    if (preg_match('#^/home/rendezvous/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rendezvous_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\RendezVousController::editAction',));
                    }

                    // rendezvous_update
                    if (preg_match('#^/home/rendezvous/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_rendezvous_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rendezvous_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\RendezVousController::updateAction',));
                    }
                    not_rendezvous_update:

                    // rendezvous_delete
                    if (preg_match('#^/home/rendezvous/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_rendezvous_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rendezvous_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\RendezVousController::deleteAction',));
                    }
                    not_rendezvous_delete:

                }

                if (0 === strpos($pathinfo, '/home/regions')) {
                    // regions
                    if (rtrim($pathinfo, '/') === '/home/regions') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'regions');
                        }

                        return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\RegionsController::indexAction',  '_route' => 'regions',);
                    }

                    // regions_show
                    if (preg_match('#^/home/regions/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'regions_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\RegionsController::showAction',));
                    }

                    // regions_new
                    if ($pathinfo === '/home/regions/new') {
                        return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\RegionsController::newAction',  '_route' => 'regions_new',);
                    }

                    // regions_create
                    if ($pathinfo === '/home/regions/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_regions_create;
                        }

                        return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\RegionsController::createAction',  '_route' => 'regions_create',);
                    }
                    not_regions_create:

                    // regions_edit
                    if (preg_match('#^/home/regions/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'regions_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\RegionsController::editAction',));
                    }

                    // regions_update
                    if (preg_match('#^/home/regions/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_regions_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'regions_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\RegionsController::updateAction',));
                    }
                    not_regions_update:

                    // regions_delete
                    if (preg_match('#^/home/regions/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_regions_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'regions_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\RegionsController::deleteAction',));
                    }
                    not_regions_delete:

                }

            }

            if (0 === strpos($pathinfo, '/home/examen')) {
                // examen
                if (rtrim($pathinfo, '/') === '/home/examen') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'examen');
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ExamenController::indexAction',  '_route' => 'examen',);
                }

                // examen_show
                if (preg_match('#^/home/examen/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'examen_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ExamenController::showAction',));
                }

                // examen_new
                if ($pathinfo === '/home/examen/new') {
                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ExamenController::newAction',  '_route' => 'examen_new',);
                }

                // examen_create
                if ($pathinfo === '/home/examen/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_examen_create;
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ExamenController::createAction',  '_route' => 'examen_create',);
                }
                not_examen_create:

                // examen_edit
                if (preg_match('#^/home/examen/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'examen_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ExamenController::editAction',));
                }

                // examen_update
                if (preg_match('#^/home/examen/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_examen_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'examen_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ExamenController::updateAction',));
                }
                not_examen_update:

                // examen_delete
                if (preg_match('#^/home/examen/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_examen_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'examen_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\ExamenController::deleteAction',));
                }
                not_examen_delete:

            }

            if (0 === strpos($pathinfo, '/home/cours')) {
                // cours
                if (rtrim($pathinfo, '/') === '/home/cours') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cours');
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursController::indexAction',  '_route' => 'cours',);
                }

                // cours_show
                if (preg_match('#^/home/cours/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cours_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursController::showAction',));
                }

                // cours_new
                if ($pathinfo === '/home/cours/new') {
                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursController::newAction',  '_route' => 'cours_new',);
                }

                // cours_create
                if ($pathinfo === '/home/cours/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cours_create;
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursController::createAction',  '_route' => 'cours_create',);
                }
                not_cours_create:

                // cours_edit
                if (preg_match('#^/home/cours/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cours_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursController::editAction',));
                }

                // cours_update
                if (preg_match('#^/home/cours/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_cours_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cours_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursController::updateAction',));
                }
                not_cours_update:

                // cours_delete
                if (preg_match('#^/home/cours/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_cours_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cours_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CoursController::deleteAction',));
                }
                not_cours_delete:

            }

            if (0 === strpos($pathinfo, '/home/admin')) {
                // admin
                if (rtrim($pathinfo, '/') === '/home/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin');
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
                }

                // admin_show
                if (preg_match('#^/home/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\AdminController::showAction',));
                }

                // admin_new
                if ($pathinfo === '/home/admin/new') {
                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\AdminController::newAction',  '_route' => 'admin_new',);
                }

                // admin_create
                if ($pathinfo === '/home/admin/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_create;
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\AdminController::createAction',  '_route' => 'admin_create',);
                }
                not_admin_create:

                // admin_edit
                if (preg_match('#^/home/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\AdminController::editAction',));
                }

                // admin_update
                if (preg_match('#^/home/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\AdminController::updateAction',));
                }
                not_admin_update:

                // admin_delete
                if (preg_match('#^/home/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\AdminController::deleteAction',));
                }
                not_admin_delete:

            }

            if (0 === strpos($pathinfo, '/home/gerant')) {
                // gerant
                if (rtrim($pathinfo, '/') === '/home/gerant') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'gerant');
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\GerantController::indexAction',  '_route' => 'gerant',);
                }

                // gerant_show
                if (preg_match('#^/home/gerant/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gerant_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\GerantController::showAction',));
                }

                // gerant_new
                if ($pathinfo === '/home/gerant/new') {
                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\GerantController::newAction',  '_route' => 'gerant_new',);
                }

                // gerant_create
                if ($pathinfo === '/home/gerant/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_gerant_create;
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\GerantController::createAction',  '_route' => 'gerant_create',);
                }
                not_gerant_create:

                // gerant_edit
                if (preg_match('#^/home/gerant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gerant_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\GerantController::editAction',));
                }

                // gerant_update
                if (preg_match('#^/home/gerant/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_gerant_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gerant_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\GerantController::updateAction',));
                }
                not_gerant_update:

                // gerant_delete
                if (preg_match('#^/home/gerant/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_gerant_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gerant_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\GerantController::deleteAction',));
                }
                not_gerant_delete:

            }

            if (0 === strpos($pathinfo, '/home/autoecole')) {
                // autoecole
                if (rtrim($pathinfo, '/') === '/home/autoecole') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'autoecole');
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\AutoEcoleController::indexAction',  '_route' => 'autoecole',);
                }

                // autoecole_show
                if (preg_match('#^/home/autoecole/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'autoecole_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\AutoEcoleController::showAction',));
                }

                // autoecole_new
                if ($pathinfo === '/home/autoecole/new') {
                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\AutoEcoleController::newAction',  '_route' => 'autoecole_new',);
                }

                // autoecole_create
                if ($pathinfo === '/home/autoecole/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_autoecole_create;
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\AutoEcoleController::createAction',  '_route' => 'autoecole_create',);
                }
                not_autoecole_create:

                // autoecole_edit
                if (preg_match('#^/home/autoecole/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'autoecole_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\AutoEcoleController::editAction',));
                }

                // autoecole_update
                if (preg_match('#^/home/autoecole/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_autoecole_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'autoecole_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\AutoEcoleController::updateAction',));
                }
                not_autoecole_update:

                // autoecole_delete
                if (preg_match('#^/home/autoecole/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_autoecole_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'autoecole_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\AutoEcoleController::deleteAction',));
                }
                not_autoecole_delete:

                // autoecole_recherche
                if ($pathinfo === '/home/autoecole/recherche') {
                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\AutoEcoleController::rechercheRegionAction',  '_route' => 'autoecole_recherche',);
                }

                // autoecole_showmap
                if (preg_match('#^/home/autoecole/(?P<id>[^/]++)/showmap$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'autoecole_showmap')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\AutoEcoleController::showMapAction',));
                }

            }

            if (0 === strpos($pathinfo, '/home/moniteur')) {
                // moniteur
                if (rtrim($pathinfo, '/') === '/home/moniteur') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'moniteur');
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\MoniteurController::indexAction',  '_route' => 'moniteur',);
                }

                // moniteur_show
                if (preg_match('#^/home/moniteur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'moniteur_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\MoniteurController::showAction',));
                }

                // moniteur_new
                if ($pathinfo === '/home/moniteur/new') {
                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\MoniteurController::newAction',  '_route' => 'moniteur_new',);
                }

                // moniteur_create
                if ($pathinfo === '/home/moniteur/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_moniteur_create;
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\MoniteurController::createAction',  '_route' => 'moniteur_create',);
                }
                not_moniteur_create:

                // moniteur_edit
                if (preg_match('#^/home/moniteur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'moniteur_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\MoniteurController::editAction',));
                }

                // moniteur_update
                if (preg_match('#^/home/moniteur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_moniteur_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'moniteur_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\MoniteurController::updateAction',));
                }
                not_moniteur_update:

                // moniteur_delete
                if (preg_match('#^/home/moniteur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_moniteur_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'moniteur_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\MoniteurController::deleteAction',));
                }
                not_moniteur_delete:

            }

            if (0 === strpos($pathinfo, '/home/candidat')) {
                // candidat
                if (rtrim($pathinfo, '/') === '/home/candidat') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'candidat');
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CandidatController::indexAction',  '_route' => 'candidat',);
                }

                // candidat_show
                if (preg_match('#^/home/candidat/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CandidatController::showAction',));
                }

                // candidat_new
                if ($pathinfo === '/home/candidat/new') {
                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CandidatController::newAction',  '_route' => 'candidat_new',);
                }

                // candidat_create
                if ($pathinfo === '/home/candidat/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_candidat_create;
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CandidatController::createAction',  '_route' => 'candidat_create',);
                }
                not_candidat_create:

                // candidat_edit
                if (preg_match('#^/home/candidat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CandidatController::editAction',));
                }

                // candidat_update
                if (preg_match('#^/home/candidat/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_candidat_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CandidatController::updateAction',));
                }
                not_candidat_update:

                // candidat_delete
                if (preg_match('#^/home/candidat/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_candidat_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\CandidatController::deleteAction',));
                }
                not_candidat_delete:

            }

            if (0 === strpos($pathinfo, '/home/h')) {
                // cdlrcode_homepage
                if (0 === strpos($pathinfo, '/home/hello') && preg_match('#^/home/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cdlrcode_homepage')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\DefaultController::indexAction',));
                }

                // cdlrcode_accueil
                if ($pathinfo === '/home/home') {
                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\EcoleController::accueilAction',  '_route' => 'cdlrcode_accueil',);
                }

            }

            if (0 === strpos($pathinfo, '/home/question')) {
                // question
                if (rtrim($pathinfo, '/') === '/home/question') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'question');
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\QuestionController::indexAction',  '_route' => 'question',);
                }

                // question_show
                if (preg_match('#^/home/question/(?P<id>[^/]++)/(?P<note>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_show')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\QuestionController::showAction',));
                }

                // question_new
                if ($pathinfo === '/home/question/new') {
                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\QuestionController::newAction',  '_route' => 'question_new',);
                }

                // question_create
                if ($pathinfo === '/home/question/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_question_create;
                    }

                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\QuestionController::createAction',  '_route' => 'question_create',);
                }
                not_question_create:

                // question_edit
                if (preg_match('#^/home/question/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_edit')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\QuestionController::editAction',));
                }

                // question_rep
                if ($pathinfo === '/home/question/reponse') {
                    return array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\QuestionController::questionSuivanteAction',  '_route' => 'question_rep',);
                }

                // question_upl
                if (0 === strpos($pathinfo, '/home/question/upload') && preg_match('#^/home/question/upload/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_upl')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\QuestionController::uploadAction',));
                }

                // question_update
                if (preg_match('#^/home/question/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_question_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_update')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\QuestionController::updateAction',));
                }
                not_question_update:

                // question_delete
                if (preg_match('#^/home/question/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_question_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_delete')), array (  '_controller' => 'Cdlr\\codeBundle\\Controller\\QuestionController::deleteAction',));
                }
                not_question_delete:

            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/fb/log')) {
            // _security_check
            if ($pathinfo === '/fb/login_check') {
                return array('_route' => '_security_check');
            }

            // _security_logout
            if ($pathinfo === '/fb/logout') {
                return array('_route' => '_security_logout');
            }

        }

        // _facebook_secured
        if (rtrim($pathinfo, '/') === '/secured') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_facebook_secured');
            }

            return array('_route' => '_facebook_secured');
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

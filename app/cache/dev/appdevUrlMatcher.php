<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/social/sloo')) {
            // SlooContactsBundle_homepage
            if (0 === strpos($pathinfo, '/social/sloo/hello') && preg_match('#^/social/sloo/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'SlooContactsBundle_homepage'));
            }

            // SlooContactsBundle_showLists
            if ($pathinfo === '/social/sloo/contacts/lists/show') {
                return array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ListsController::showListsAction',  '_route' => 'SlooContactsBundle_showLists',);
            }

            // SlooContactsBundle_lists
            if ($pathinfo === '/social/sloo/lists/manage') {
                return array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ListsController::listsAction',  '_route' => 'SlooContactsBundle_lists',);
            }

            // SlooContactsBundle_service_showLists
            if ($pathinfo === '/social/sloo/contacts/services/lists/show') {
                return array (  '_controller' => 'sloo_contacts_lists:showListsAction',  '_route' => 'SlooContactsBundle_service_showLists',);
            }

            // SlooContactsBundle_saveInLists
            if ($pathinfo === '/social/sloo/contacts/lists/savein') {
                return array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ListsController::saveInListsAction',  '_route' => 'SlooContactsBundle_saveInLists',);
            }

            // SlooContactsBundle_showUserInLists
            if ($pathinfo === '/social/sloo/contacts/lists/showin') {
                return array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ListsController::showUserInListsAction',  '_route' => 'SlooContactsBundle_showUserInLists',);
            }

            // SlooContactsBundle_saveList
            if (0 === strpos($pathinfo, '/social/sloo/contacts/lists/save') && preg_match('#^/social/sloo/contacts/lists/save(?:/(?P<id>[^/]+?))?$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ListsController::saveListAction',  '_format' => 'json',  'id' => NULL,)), array('_route' => 'SlooContactsBundle_saveList'));
            }

            // SlooContactsBundle_deleteList
            if (0 === strpos($pathinfo, '/social/sloo/contacts/lists/delete') && preg_match('#^/social/sloo/contacts/lists/delete(?:/(?P<id>[^/]+?))?$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ListsController::deleteListAction',  '_format' => 'json',  'id' => NULL,)), array('_route' => 'SlooContactsBundle_deleteList'));
            }

            // SlooContactsBundle_follow
            if ($pathinfo === '/social/sloo/contacts/follow') {
                return array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ContactsController::followUserAction',  '_route' => 'SlooContactsBundle_follow',);
            }

            // SlooContactsBundle_unfollow
            if ($pathinfo === '/social/sloo/contacts/unfollow') {
                return array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ContactsController::unfollowUserAction',  '_route' => 'SlooContactsBundle_unfollow',);
            }

            // SlooContactsBundle_showContacts
            if (rtrim($pathinfo, '/') === '/social/sloo/contacts/show/contacts') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'SlooContactsBundle_showContacts');
                }
                return array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ContactsController::showContactsAction',  '_route' => 'SlooContactsBundle_showContacts',);
            }

            // SlooContactsBundle_allContacts
            if (0 === strpos($pathinfo, '/social/sloo/contacts/show/contacts') && preg_match('#^/social/sloo/contacts/show/contacts/(?P<username>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ContactsController::showAllContactsAction',  'followers' => false,)), array('_route' => 'SlooContactsBundle_allContacts'));
            }

            // SlooContactsBundle_followers
            if (0 === strpos($pathinfo, '/social/sloo/contacts/show/followers') && preg_match('#^/social/sloo/contacts/show/followers/(?P<username>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ContactsController::showAllContactsAction',  'followers' => true,)), array('_route' => 'SlooContactsBundle_followers'));
            }

            // SlooContactsBundle_followeds
            if (0 === strpos($pathinfo, '/social/sloo/contacts/show/followeds') && preg_match('#^/social/sloo/contacts/show/followeds/(?P<username>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ContactsController::showAllContactsAction',  'followers' => false,)), array('_route' => 'SlooContactsBundle_followeds'));
            }

        }

        // RIABackboneBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'RIA\\BackboneBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'RIABackboneBundle_homepage'));
        }

        if (0 === strpos($pathinfo, '/admin/migol')) {
            // MigolBackendBundle_homepage
            if (rtrim($pathinfo, '/') === '/admin/migol/admin/migol') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'MigolBackendBundle_homepage');
                }
                return array (  '_controller' => 'Migol\\BackendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'MigolBackendBundle_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/migol/skill')) {
                // admin_migol_skill
                if (rtrim($pathinfo, '/') === '/admin/migol/skill') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_migol_skill');
                    }
                    return array (  '_controller' => 'Migol\\BackendBundle\\Controller\\SkillController::indexAction',  '_route' => 'admin_migol_skill',);
                }

                // admin_migol_skill_show
                if (preg_match('#^/admin/migol/skill/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Migol\\BackendBundle\\Controller\\SkillController::showAction',)), array('_route' => 'admin_migol_skill_show'));
                }

                // admin_migol_skill_new
                if ($pathinfo === '/admin/migol/skill/new') {
                    return array (  '_controller' => 'Migol\\BackendBundle\\Controller\\SkillController::newAction',  '_route' => 'admin_migol_skill_new',);
                }

                // admin_migol_skill_create
                if ($pathinfo === '/admin/migol/skill/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_migol_skill_create;
                    }
                    return array (  '_controller' => 'Migol\\BackendBundle\\Controller\\SkillController::createAction',  '_route' => 'admin_migol_skill_create',);
                }
                not_admin_migol_skill_create:

                // admin_migol_skill_edit
                if (preg_match('#^/admin/migol/skill/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Migol\\BackendBundle\\Controller\\SkillController::editAction',)), array('_route' => 'admin_migol_skill_edit'));
                }

                // admin_migol_skill_update
                if (preg_match('#^/admin/migol/skill/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_migol_skill_update;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Migol\\BackendBundle\\Controller\\SkillController::updateAction',)), array('_route' => 'admin_migol_skill_update'));
                }
                not_admin_migol_skill_update:

                // admin_migol_skill_delete
                if (preg_match('#^/admin/migol/skill/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_migol_skill_delete;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Migol\\BackendBundle\\Controller\\SkillController::deleteAction',)), array('_route' => 'admin_migol_skill_delete'));
                }
                not_admin_migol_skill_delete:

            }

        }

        // SlooBackendBundle_homepage
        if (0 === strpos($pathinfo, '/admin/sloo/hello') && preg_match('#^/admin/sloo/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sloo\\BackendBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'SlooBackendBundle_homepage'));
        }

        // StyleBootstrapFormBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Style\\BootstrapFormBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'StyleBootstrapFormBundle_homepage'));
        }

        // MigolCommonPagesBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'MigolCommonPagesBundle_homepage');
            }
            return array (  '_controller' => 'Migol\\CommonPagesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'MigolCommonPagesBundle_homepage',);
        }

        // MigolCommonPagesBundle_dashboard
        if ($pathinfo === '/social/dashboard') {
            return array (  '_controller' => 'Migol\\CommonPagesBundle\\Controller\\PrivateController::indexAction',  '_route' => 'MigolCommonPagesBundle_dashboard',);
        }

        // StyleBootstrapBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Style\\BootstrapBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'StyleBootstrapBundle_homepage'));
        }

        // MigolUserBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Migol\\UserBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'MigolUserBundle_homepage'));
        }

        // MigolUserBundle_showProfile
        if (0 === strpos($pathinfo, '/social/profile') && preg_match('#^/social/profile/(?P<username>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Migol\\UserBundle\\Controller\\ProfileController::showProfileAction',)), array('_route' => 'MigolUserBundle_showProfile'));
        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
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
                return array (  '_controller' => 'Migol\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'Migol\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
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
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

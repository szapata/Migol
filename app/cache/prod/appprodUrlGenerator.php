<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'SlooContactsBundle_homepage' => true,
       'SlooContactsBundle_showLists' => true,
       'SlooContactsBundle_service_showLists' => true,
       'SlooContactsBundle_saveInLists' => true,
       'SlooContactsBundle_saveList' => true,
       'SlooContactsBundle_follow' => true,
       'SlooContactsBundle_unfollow' => true,
       'SlooContactsBundle_followers' => true,
       'SlooContactsBundle_followeds' => true,
       'SlooContactsBundle_showContacts' => true,
       'RIABackboneBundle_homepage' => true,
       'MigolBackendBundle_homepage' => true,
       'admin_migol_skill' => true,
       'admin_migol_skill_show' => true,
       'admin_migol_skill_new' => true,
       'admin_migol_skill_create' => true,
       'admin_migol_skill_edit' => true,
       'admin_migol_skill_update' => true,
       'admin_migol_skill_delete' => true,
       'SlooBackendBundle_homepage' => true,
       'StyleBootstrapFormBundle_homepage' => true,
       'MigolCommonPagesBundle_homepage' => true,
       'MigolCommonPagesBundle_dashboard' => true,
       'StyleBootstrapBundle_homepage' => true,
       'MigolUserBundle_homepage' => true,
       'MigolUserBundle_showProfile' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_edit' => true,
       'fos_user_registration_register' => true,
       'fos_user_registration_check_email' => true,
       'fos_user_registration_confirm' => true,
       'fos_user_registration_confirmed' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_user_change_password' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getSlooContactsBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/social/sloo/hello',  ),));
    }

    private function getSlooContactsBundle_showListsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ListsController::showListsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/social/sloo/contacts/lists/show',  ),));
    }

    private function getSlooContactsBundle_service_showListsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sloo_contacts_lists:showListsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/social/sloo/contacts/services/lists/show',  ),));
    }

    private function getSlooContactsBundle_saveInListsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ListsController::saveInListsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/social/sloo/contacts/lists/savein',  ),));
    }

    private function getSlooContactsBundle_saveListRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ListsController::saveListAction',  '_format' => 'json',  'id' => NULL,), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/social/sloo/contacts/lists/save',  ),));
    }

    private function getSlooContactsBundle_followRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ContactsController::followUserAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/social/sloo/contacts/follow',  ),));
    }

    private function getSlooContactsBundle_unfollowRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ContactsController::unfollowUserAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/social/sloo/contacts/unfollow',  ),));
    }

    private function getSlooContactsBundle_followersRouteInfo()
    {
        return array(array (  0 => 'username',), array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ContactsController::showFollowersAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'username',  ),  1 =>   array (    0 => 'text',    1 => '/social/sloo/contacts/show/followers',  ),));
    }

    private function getSlooContactsBundle_followedsRouteInfo()
    {
        return array(array (  0 => 'username',), array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ContactsController::showFollowedUsersAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'username',  ),  1 =>   array (    0 => 'text',    1 => '/social/sloo/contacts/show/followeds',  ),));
    }

    private function getSlooContactsBundle_showContactsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sloo\\ContactsBundle\\Controller\\ContactsController::showContactsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/social/sloo/contacts/show/contacts',  ),));
    }

    private function getRIABackboneBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'RIA\\BackboneBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getMigolBackendBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Migol\\BackendBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/migol/admin/migol/',  ),));
    }

    private function getadmin_migol_skillRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Migol\\BackendBundle\\Controller\\SkillController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/migol/skill/',  ),));
    }

    private function getadmin_migol_skill_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Migol\\BackendBundle\\Controller\\SkillController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/migol/skill',  ),));
    }

    private function getadmin_migol_skill_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Migol\\BackendBundle\\Controller\\SkillController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/migol/skill/new',  ),));
    }

    private function getadmin_migol_skill_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Migol\\BackendBundle\\Controller\\SkillController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/admin/migol/skill/create',  ),));
    }

    private function getadmin_migol_skill_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Migol\\BackendBundle\\Controller\\SkillController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/migol/skill',  ),));
    }

    private function getadmin_migol_skill_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Migol\\BackendBundle\\Controller\\SkillController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/migol/skill',  ),));
    }

    private function getadmin_migol_skill_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Migol\\BackendBundle\\Controller\\SkillController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/migol/skill',  ),));
    }

    private function getSlooBackendBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Sloo\\BackendBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/admin/sloo/hello',  ),));
    }

    private function getStyleBootstrapFormBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Style\\BootstrapFormBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getMigolCommonPagesBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Migol\\CommonPagesBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getMigolCommonPagesBundle_dashboardRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Migol\\CommonPagesBundle\\Controller\\PrivateController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/social/dashboard',  ),));
    }

    private function getStyleBootstrapBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Style\\BootstrapBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getMigolUserBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Migol\\UserBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getMigolUserBundle_showProfileRouteInfo()
    {
        return array(array (  0 => 'username',), array (  '_controller' => 'Migol\\UserBundle\\Controller\\ProfileController::showProfileAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'username',  ),  1 =>   array (    0 => 'text',    1 => '/social/profile',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Migol\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/profile/',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Migol\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/edit',  ),));
    }

    private function getfos_user_registration_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/',  ),));
    }

    private function getfos_user_registration_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/check-email',  ),));
    }

    private function getfos_user_registration_confirmRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/register/confirm',  ),));
    }

    private function getfos_user_registration_confirmedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/confirmed',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/resetting/reset',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/change-password/change-password',  ),));
    }
}

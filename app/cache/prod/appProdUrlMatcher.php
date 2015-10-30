<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // itss_user_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'itss_user_default_index')), array (  '_controller' => 'ITSS\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/client')) {
            // itss_tickets_client_index
            if (rtrim($pathinfo, '/') === '/client') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'itss_tickets_client_index');
                }

                return array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\ClientController::indexAction',  '_route' => 'itss_tickets_client_index',);
            }

            // itss_tickets_client_see
            if (0 === strpos($pathinfo, '/client/see') && preg_match('#^/client/see/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'itss_tickets_client_see')), array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\ClientController::seeAction',));
            }

            // itss_tickets_client_update
            if (0 === strpos($pathinfo, '/client/update') && preg_match('#^/client/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'itss_tickets_client_update')), array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\ClientController::updateAction',));
            }

            // itss_tickets_client_delete
            if (0 === strpos($pathinfo, '/client/delete') && preg_match('#^/client/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'itss_tickets_client_delete')), array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\ClientController::deleteAction',));
            }

            // itss_tickets_client_add
            if ($pathinfo === '/client/add') {
                return array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\ClientController::addAction',  '_route' => 'itss_tickets_client_add',);
            }

        }

        // itss_tickets_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'itss_tickets_default_index')), array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\DefaultController::indexAction',));
        }

        // itss_tickets_page_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'itss_tickets_page_index');
            }

            return array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\PageController::indexAction',  '_route' => 'itss_tickets_page_index',);
        }

        if (0 === strpos($pathinfo, '/index2')) {
            // itss_tickets_product_index
            if ($pathinfo === '/index2/index2') {
                return array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\ProductController::indexAction',  '_route' => 'itss_tickets_product_index',);
            }

            // itss_tickets_product_see
            if ($pathinfo === '/index2/see') {
                return array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\ProductController::seeAction',  '_route' => 'itss_tickets_product_see',);
            }

            // itss_tickets_product_update
            if ($pathinfo === '/index2/update') {
                return array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\ProductController::updateAction',  '_route' => 'itss_tickets_product_update',);
            }

            // itss_tickets_product_delete
            if ($pathinfo === '/index2/delete') {
                return array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\ProductController::deleteAction',  '_route' => 'itss_tickets_product_delete',);
            }

            // itss_tickets_product_add
            if ($pathinfo === '/index2/add') {
                return array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\ProductController::addAction',  '_route' => 'itss_tickets_product_add',);
            }

        }

        if (0 === strpos($pathinfo, '/project')) {
            // itss_tickets_project_index
            if (rtrim($pathinfo, '/') === '/project') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'itss_tickets_project_index');
                }

                return array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\ProjetController::indexAction',  '_route' => 'itss_tickets_project_index',);
            }

            // itss_tickets_project_see
            if (0 === strpos($pathinfo, '/project/see') && preg_match('#^/project/see/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'itss_tickets_project_see')), array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\ProjetController::seeAction',));
            }

            // itss_tickets_project_update
            if (0 === strpos($pathinfo, '/project/update') && preg_match('#^/project/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'itss_tickets_project_update')), array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\ProjetController::updateAction',));
            }

            // itss_tickets_project_delete
            if (0 === strpos($pathinfo, '/project/delete') && preg_match('#^/project/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'itss_tickets_project_delete')), array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\ProjetController::deleteAction',));
            }

            // itss_tickets_project_add
            if ($pathinfo === '/project/add') {
                return array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\ProjetController::addAction',  '_route' => 'itss_tickets_project_add',);
            }

        }

        if (0 === strpos($pathinfo, '/ticket')) {
            // itss_tickets_ticket_index
            if (rtrim($pathinfo, '/') === '/ticket') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'itss_tickets_ticket_index');
                }

                return array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\TicketController::indexAction',  '_route' => 'itss_tickets_ticket_index',);
            }

            // itss_tickets_ticket_see
            if (0 === strpos($pathinfo, '/ticket/see') && preg_match('#^/ticket/see/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'itss_tickets_ticket_see')), array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\TicketController::seeAction',));
            }

            // itss_tickets_ticket_update
            if (0 === strpos($pathinfo, '/ticket/update') && preg_match('#^/ticket/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'itss_tickets_ticket_update')), array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\TicketController::updateAction',));
            }

            // itss_tickets_ticket_delete
            if (0 === strpos($pathinfo, '/ticket/delete') && preg_match('#^/ticket/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'itss_tickets_ticket_delete')), array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\TicketController::deleteAction',));
            }

            // itss_tickets_ticket_add
            if ($pathinfo === '/ticket/add') {
                return array (  '_controller' => 'ITSS\\TicketsBundle\\Controller\\TicketController::addAction',  '_route' => 'itss_tickets_ticket_add',);
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

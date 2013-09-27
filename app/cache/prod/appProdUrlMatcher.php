<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // ad_gsb_homepage
        if (rtrim($pathinfo, '/') === '/Gsb') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ad_gsb_homepage');
            }

            return array (  '_controller' => 'AD\\GsbBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ad_gsb_homepage',);
        }

        if (0 === strpos($pathinfo, '/AD')) {
            // ad_mon_premier_homepage
            if (0 === strpos($pathinfo, '/AD/hello') && preg_match('#^/AD/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ad_mon_premier_homepage')), array (  '_controller' => 'AD\\MonPremierBundle\\Controller\\DefaultController::indexAction',));
            }

            // ADMonPremierBundle_accueil
            if (rtrim($pathinfo, '/') === '/AD') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ADMonPremierBundle_accueil');
                }

                return array (  '_controller' => 'AD\\MonPremierBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ADMonPremierBundle_accueil',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

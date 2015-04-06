<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel {

    public function registerBundles() {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Cdlr\codeBundle\CdlrcodeBundle(),
            new Cdlr\UserBundle\CdlrUserBundle(),
            new Cdlr\CalendarBundle\CdlrCalendarBundle(),
            new HappyR\Google\ApiBundle\HappyRGoogleApiBundle(),
            new Cdlr\mailBundle\CdlrmailBundle(),
            new BladeTester\CalendarBundle\BladeTesterCalendarBundle(),
//            new HWI\Bundle\OAuthBundle\HWIOAuthBundle(),
//            new FOS\FacebookBundle\FOSFacebookBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            [...]
            $bundles[] = new Elao\WebProfilerExtraBundle\WebProfilerExtraBundle();
        }
        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader) {
        $loader->load(__DIR__ . '/config/config_' . $this->getEnvironment() . '.yml');
    }

}

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.bundle.form.admin.configure.advanced_parameters.feature_flag.feature_flag_list_type' shared service.

return $this->services['prestashop.bundle.form.admin.configure.advanced_parameters.feature_flag.feature_flag_list_type'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\FeatureFlag\FeatureFlagListType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages());

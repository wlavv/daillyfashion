<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.sell.product.options.customization_field_type' shared service.

return $this->services['form.type.sell.product.options.customization_field_type'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Options\CustomizationFieldType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['prestashop.core.form.choice_provider.customization_field_type_choice_provider'] ?? $this->load('getPrestashop_Core_Form_ChoiceProvider_CustomizationFieldTypeChoiceProviderService.php')));

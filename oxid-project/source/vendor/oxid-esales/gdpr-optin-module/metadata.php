<?php
/**
 * This file is part of OXID eSales GDPR opt-in module.
 *
 * OXID eSales GDPR opt-in module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales GDPR opt-in module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales GDPR opt-in module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2018
 */

use OxidEsales\Eshop\Application\Component\Widget\ArticleDetails;
use OxidEsales\Eshop\Application\Component\Widget\Review;
use OxidEsales\Eshop\Application\Component\UserComponent;
use OxidEsales\Eshop\Application\Controller\ReviewController;
use OxidEsales\Eshop\Application\Controller\ArticleDetailsController;
use OxidEsales\Eshop\Application\Controller\ContactController;
use OxidEsales\Eshop\Core\ViewConfig;

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'          => 'oegdproptin',
    'title'       => [
        'de' => 'GDPR Opt-in',
        'en' => 'GDPR Opt-in',
    ],
    'description' => [
        'de' => 'Das Modul stellt Opt-in-Funktionalit&auml;t f&uuml;r die Datenschutz-Grundverordnung (DSGVO) bereit',
        'en' => 'This module provides the opt-in functionality for the European General Data Protection Regulation (GDPR)',
    ],
    'thumbnail'   => 'logo.png',
    'version'     => '3.0.1',
    'author'      => 'OXID eSales AG',
    'url'         => 'https://www.oxid-esales.com/',
    'email'       => '',
    'extend'      => [
        ViewConfig::class => \OxidEsales\GdprOptinModule\Core\ViewConfig::class,
        ArticleDetails::class => \OxidEsales\GdprOptinModule\Component\Widget\ArticleDetails::class,
        Review::class => \OxidEsales\GdprOptinModule\Component\Widget\Review::class,
        UserComponent::class => \OxidEsales\GdprOptinModule\Component\UserComponent::class,
        ReviewController::class => \OxidEsales\GdprOptinModule\Controller\ReviewController::class,
        ArticleDetailsController::class => \OxidEsales\GdprOptinModule\Controller\ArticleDetailsController::class,
        ContactController::class => \OxidEsales\GdprOptinModule\Controller\ContactController::class
    ],
    'blocks'      => [
        [
            'template' => 'form/user.tpl',
            'block'    => 'user_billing_address_form',
            'file'     => 'views/smarty/blocks/user_invoice_address_form.tpl',
        ],
        [
            'template' => 'form/user.tpl',
            'block'    => 'user_shipping_address_form',
            'file'     => 'views/smarty/blocks/user_shipping_address_form.tpl',
        ],
        [
            'template' => 'form/user.tpl',
            'block'    => 'user_form',
            'file'     => 'views/smarty/blocks/user_address.tpl',
        ],
        [
            'template' => 'form/user.tpl',
            'block'    => 'user',
            'file'     => 'views/smarty/blocks/user.tpl',
        ],
        [
            'template' => 'form/user_checkout_change.tpl',
            'block'    => 'user_checkout_change',
            'file'     => 'views/smarty/blocks/user_checkout_change.tpl',
        ],
        [
            'template' => 'form/user_checkout_change.tpl',
            'block'    => 'user_checkout_shipping_feedback',
            'file'     => 'views/smarty/blocks/user_checkout_shipping_feedback.tpl',
        ],
        [
            'template' => 'form/user_checkout_change.tpl',
            'block'    => 'user_checkout_billing_feedback',
            'file'     => 'views/smarty/blocks/user_checkout_billing_feedback.tpl',
        ],
        [
            'template' => 'form/fieldset/user_account.tpl',
            'block'    => 'user_account_newsletter',
            'file'     => 'views/smarty/blocks/user_account_newsletter.tpl',
        ],
        [
            'template' => 'form/contact.tpl',
            'block'    => 'contact_form_fields',
            'file'     => 'views/smarty/blocks/contact_form_fields.tpl',
        ],
        [
            'template' => 'widget/reviews/reviews.tpl',
            'block'    => 'widget_reviews_form_fields',
            'file'     => 'views/smarty/blocks/widget_reviews_form_fields.tpl',
        ]
    ],
    'settings'    => [
        [
            'group' => 'oegdproptin_settings',
            'name' => 'blOeGdprOptinInvoiceAddress',
            'type' => 'bool',
            'value' => 'false'
        ],
        [
            'group' => 'oegdproptin_settings',
            'name' => 'blOeGdprOptinDeliveryAddress',
            'type' => 'bool',
            'value' => 'false'
        ],
        [
            'group' => 'oegdproptin_settings',
            'name'  => 'blOeGdprOptinUserRegistration',
            'type'  => 'bool',
            'value' => 'false'
        ],
        [
            'group' => 'oegdproptin_settings',
            'name' => 'blOeGdprOptinProductReviews',
            'type' => 'bool',
            'value' => 'false'
        ],
        [
            'group' => 'oegdproptin_contact_form',
            'name' => 'OeGdprOptinContactFormMethod',
            'type' => 'select',
            'value' => 'deletion',
            'constraints' => 'deletion|statistical',
        ],
    ],
    'events'      => [
        'onActivate'   => 'OxidEsales\GdprOptinModule\Core\GdprOptinModule::onActivate',
        'onDeactivate' => 'OxidEsales\GdprOptinModule\Core\GdprOptinModule::onDeactivate',
    ],
];

<?php


namespace App\Menu;


use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();
        $catalogMenu = $menu->getChild('catalog');

        $catalogMenu
            ->addChild('product-variant-association-type', [
                'route' => 'app_admin_product_variant_association_type_index'
            ])
            ->setLabel('ProductVariantAssociationTypes')
            ->setLabelAttribute('icon', 'exchange')
        ;
    }
}

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { BookOpen, Folder, LayoutGrid, Package, SquareDashedMousePointer } from 'lucide-vue-next';
import NavFooter from '@/components/NavFooter.vue';
import NavMain from '@/components/NavMain.vue';
import NavUser from '@/components/NavUser.vue';
import {
    Sidebar,
    SidebarContent,
    SidebarFooter,
    SidebarHeader,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
} from '@/components/ui/sidebar';
import { dashboard, inventoryProducts, inventoryCategories, uiAlerts, uiAvatars, uiBadges, uiButtons, uiCards, uiCarousels, uiDropdowns, uiImages, uiLinks } from '@/routes';
import { type NavItem } from '@/types';
import AppLogo from './AppLogo.vue';

const mainNavItems: NavItem[] = [
    {
        title: 'Dashboard',
        href: dashboard(),
        icon: LayoutGrid,
    },
    {
        title: 'Inventory',
        // href: inventory(),
        icon: Package,
        children: [
            {
                title: 'Products',
                href: inventoryProducts(),
            },
            {
                title: 'Categories',
                href: inventoryCategories(),
            },
        ],
    },
    {
        title: 'UI Elements',
        // href: inventory(),
        icon: SquareDashedMousePointer,
        children: [
            {
                title: 'Alerts',
                href: uiAlerts(),
            },
            {
                title: 'Avatars',
                href: uiAvatars(),
            },
            {
                title: 'Badge',
                href: uiBadges(),
            },
            {
                title: 'Buttons',
                href: uiButtons(),
            },
            {
                title: 'Cards',
                href: uiCards(),
            },
            {
                title: 'Carousel',
                href: uiCarousels(),
            },
            {
                title: 'Dropdowns',
                href: uiDropdowns(),
            },
            {
                title: 'Images',
                href: uiImages(),
            },
            {
                title: 'Links',
                href: uiLinks(),
            },
            // {
            //     title: 'List',
            //     href: inventoryCategories(),
            // },
            // {
            //     title: 'Modals',
            //     href: inventoryCategories(),
            // },
            // {
            //     title: 'Ribbons',
            //     href: inventoryCategories(),
            // },
            // {
            //     title: 'Spinners',
            //     href: inventoryCategories(),
            // },
            // {
            //     title: 'Tabs',
            //     href: inventoryCategories(),
            // },
            // {
            //     title: 'Tooltips',
            //     href: inventoryCategories(),
            // },
        ],
    },
];

const footerNavItems: NavItem[] = [
    {
        title: 'Github Repo',
        href: 'https://github.com/laravel/vue-starter-kit',
        icon: Folder,
    },
    {
        title: 'Documentation',
        href: 'https://laravel.com/docs/starter-kits#vue',
        icon: BookOpen,
    },
];
</script>

<template>
    <Sidebar collapsible="icon" variant="inset">
        <SidebarHeader>
            <SidebarMenu>
                <SidebarMenuItem>
                    <SidebarMenuButton size="lg" as-child>
                        <Link :href="dashboard()">
                            <AppLogo />
                        </Link>
                    </SidebarMenuButton>
                </SidebarMenuItem>
            </SidebarMenu>
        </SidebarHeader>

        <SidebarContent>
            <NavMain :items="mainNavItems" />
        </SidebarContent>

        <SidebarFooter>
            <NavFooter :items="footerNavItems" />
            <NavUser />
        </SidebarFooter>
    </Sidebar>
    <slot />
</template>

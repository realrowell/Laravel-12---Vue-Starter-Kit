<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { Plus, MoveRight } from 'lucide-vue-next';
import { Button } from '@/components/ui/button';
import AppLayout from '@/layouts/AppLayout.vue';
import { dashboard } from '@/routes';
import { type BreadcrumbItem } from '@/types';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: dashboard().url,
    },{
        title: 'Buttons',
    },
];
</script>

<template>
    <Head title="Buttons" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div
            class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4"
        >
            <div class="flex flex-row justify-between align-center">
                <h2 class="text-2xl">Buttons</h2>
            </div>
            <div
                class="relative rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border p-5"
            >
                <div class="flex flex-col gap-5">
                    <h3 class="text-lg">Solid Buttons</h3>
                    <div class="flex flex-row gap-1">
                        <Button>Primary Button</Button>
                        <Button variant="danger">Danger Button</Button>
                        <Button variant="success">Success Button</Button>
                        <Button variant="warning">Warning Button</Button>
                        <Button variant="secondary">Secondary Button</Button>
                        <Button variant="link">Link Button</Button>
                        <Button variant="ghost">Ghost Button</Button>
                        <Button variant="light">Light Button</Button>
                        <Button variant="dark">Dark Button</Button>
                    </div>
                </div>
            </div>
            <div
                class="relative rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border p-5"
            >
                <div class="flex flex-col gap-5">
                    <h3 class="text-lg">Subtle Buttons</h3>
                    <div class="flex flex-row gap-1">
                        <Button variant="subtlePrimary">Primary Button</Button>
                        <Button variant="subtleDanger">Danger Button</Button>
                        <Button variant="subtleSuccess">Success Button</Button>
                        <Button variant="subtleWarning">Warning Button</Button>
                        <Button variant="subtleSecondary">Secondary Button</Button>
                    </div>
                </div>
            </div>
            <div
                class="relative rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border p-5"
            >
                <div class="flex flex-col gap-5">
                    <h3 class="text-lg">Button Sizes</h3>
                    <div class="flex flex-row gap-1">
                        <Button size="sm">Small Button</Button>
                        <Button >Default Button</Button>
                        <Button size="lg">Large Button</Button>
                    </div>
                </div>
            </div>
            <div
                class="relative rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border p-5"
            >
                <div class="flex flex-col gap-5">
                    <h3 class="text-lg">Button with icon</h3>
                    <div class="flex flex-row gap-1">
                        <Button>
                            <Plus />
                            Action Button
                        </Button>
                        <Button>
                            Action Button
                            <MoveRight />
                        </Button>
                    </div>
                </div>
            </div>
            <div
                class="relative rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border flex flex-col gap-5 p-5"
            >
                <h3 class="text-lg">Icon Button</h3>
                <div class="flex flex-row gap-5">
                    <div class="flex flex-col gap-2 items-center">
                        <div class="flex flex-row gap-1">
                            <Button size="icon-sm" title="Action Button">
                                <Plus />
                            </Button>
                            <Button size="icon-sm" title="Action Button">
                                <MoveRight />
                            </Button>
                        </div>
                        Small Size
                    </div>
                    <div class="flex flex-col gap-2 items-center">
                        <div class="flex flex-row gap-1">
                            <Button title="Action Button">
                                <Plus />
                            </Button>
                            <Button title="Action Button">
                                <MoveRight />
                            </Button>
                        </div>
                        Default Size
                    </div>
                    <div class="flex flex-col gap-2 items-center">
                        <div class="flex flex-row gap-1">
                            <Button size="icon-lg" title="Action Button">
                                <Plus />
                            </Button>
                            <Button size="icon-lg" title="Action Button">
                                <MoveRight />
                            </Button>
                        </div>
                        Large Size
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

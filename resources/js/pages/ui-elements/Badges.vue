<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import Badge from '@/components/ui/badge/Badge.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { dashboard } from '@/routes';
import { type BreadcrumbItem } from '@/types';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: dashboard().url,
    },{
        title: 'Badges',
    },
];
</script>

<template>
    <Head title="Badges" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div
            class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4"
        >
            <div class="flex flex-row justify-between align-center">
                <h2 class="text-2xl">Badges</h2>
            </div>
            <div
                class="relative rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border flex flex-col gap-5 p-5"
            >
                <h3 class="text-lg">Solid Badges</h3>
                <div class="flex flex-row gap-5">
                    <Badge>Primary</Badge>
                    <Badge variant="success">Success</Badge>
                    <Badge variant="danger">Danger</Badge>
                    <Badge variant="warning">Warning</Badge>
                    <Badge variant="info">Info</Badge>
                    <Badge variant="secondary">Secondary</Badge>
                </div>
            </div>
            <div
                class="relative rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border flex flex-col gap-5 p-5"
            >
                <h3 class="text-lg">Subtle Badges</h3>
                <div class="flex flex-row gap-5">
                    <Badge variant="subtlePrimary">Primary</Badge>
                    <Badge variant="subtleSuccess">Success</Badge>
                    <Badge variant="subtleDanger">Danger</Badge>
                    <Badge variant="subtleWarning">Warning</Badge>
                    <Badge variant="subtleInfo">Info</Badge>
                    <Badge variant="subtleSecondary">Secondary</Badge>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

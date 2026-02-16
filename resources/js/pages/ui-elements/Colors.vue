<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import Card from '@/components/ui/card/Card.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { dashboard } from '@/routes';
import { type BreadcrumbItem } from '@/types';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: dashboard().url,
    },{
        title: 'Colors',
    },
];
</script>

<template>
    <Head title="Colors" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div
            class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4"
        >
            <div class="flex flex-row justify-between align-center">
                <h2 class="text-2xl">Colors</h2>
            </div>
            <div
                class="relative rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border flex flex-col gap-5 p-5"
            >
                <h3 class="text-lg">Solid Colors</h3>
                <div class="flex flex-row gap-5">
                    <div class="flex flex-col p-3">
                        <div class="bg-(--app-primary-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-primary-color)">#008CFF</p>
                        <p class="pb-0 text-md text-(--app-primary-color)">--app-primary-color</p>
                    </div>
                    <div class="flex flex-col p-3">
                        <div class="bg-(--app-success-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-success-color)">#04956D</p>
                        <p class="pb-0 text-md text-(--app-success-color)">--app-success-color</p>
                    </div>
                    <div class="flex flex-col p-3">
                        <div class="bg-(--app-danger-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-danger-color)">#FC3232</p>
                        <p class="pb-0 text-md text-(--app-danger-color)">--app-danger-color</p>
                    </div>
                    <div class="flex flex-col p-3">
                        <div class="bg-(--app-warning-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-warning-color)">#FF8800</p>
                        <p class="pb-0 text-md text-(--app-warning-color)">--app-warning-color</p>
                    </div>
                    <div class="flex flex-col p-3">
                        <div class="bg-(--app-info-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-info-color)">#00C2FF</p>
                        <p class="pb-0 text-md text-(--app-info-color)">--app-info-color</p>
                    </div>
                    <div class="flex flex-col bg-neutral-900 p-3">
                        <div class="bg-(--app-secondary-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-secondary-color)">#F3F3F3</p>
                        <p class="pb-0 text-md text-(--app-secondary-color)">--app-secondary-color</p>
                    </div>
                </div>
            </div>
            <div
                class="relative rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border flex flex-col gap-5 p-5"
            >
                <h3 class="text-lg">Dark Colors</h3>
                <div class="flex flex-row gap-5">
                    <div class="flex flex-col p-3">
                        <div class="bg-(--app-dark-primary-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-primary-color)">#0169BE</p>
                        <p class="pb-0 text-sm text-(--app-primary-color)">--app-dark-primary-color</p>
                    </div>
                    <div class="flex flex-col p-3">
                        <div class="bg-(--app-dark-success-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-success-color)">#026D4F</p>
                        <p class="pb-0 text-sm text-(--app-success-color)">--app-dark-success-color</p>
                    </div>
                    <div class="flex flex-col p-3">
                        <div class="bg-(--app-dark-danger-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-danger-color)">#AF0202</p>
                        <p class="pb-0 text-sm text-(--app-danger-color)">--app-dark-danger-color</p>
                    </div>
                    <div class="flex flex-col p-3">
                        <div class="bg-(--app-dark-warning-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-warning-color)">#D65600</p>
                        <p class="pb-0 text-sm text-(--app-warning-color)">--app-dark-warning-color</p>
                    </div>
                    <div class="flex flex-col p-3">
                        <div class="bg-(--app-dark-info-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-info-color)">#068FB9</p>
                        <p class="pb-0 text-sm text-(--app-info-color)">--app-dark-info-color</p>
                    </div>
                    <div class="flex flex-col bg-neutral-900 p-3">
                        <div class="bg-(--app-dark-secondary-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-secondary-color)">#D6D6D6</p>
                        <p class="pb-0 text-sm text-(--app-secondary-color)">--app-dark-secondary-color</p>
                    </div>
                </div>
            </div>
            <div
                class="relative rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border flex flex-col gap-5 p-5 bg-neutral-900"
            >
                <h3 class="text-lg text-white">Subtle Colors</h3>
                <div class="flex flex-row gap-5">
                    <div class="flex flex-col p-3">
                        <div class="bg-(--app-subtle-primary-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-primary-color)">#DEF2FF</p>
                        <p class="pb-0 text-sm text-(--app-primary-color)">--app-subtle-primary-color</p>
                    </div>
                    <div class="flex flex-col p-3">
                        <div class="bg-(--app-subtle-success-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-success-color)">#B9FFEC</p>
                        <p class="pb-0 text-sm text-(--app-success-color)">--app-subtle-success-color</p>
                    </div>
                    <div class="flex flex-col p-3">
                        <div class="bg-(--app-subtle-danger-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-danger-color)">#FFD8DD</p>
                        <p class="pb-0 text-sm text-(--app-danger-color)">--app-subtle-danger-color</p>
                    </div>
                    <div class="flex flex-col p-3">
                        <div class="bg-(--app-subtle-warning-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-warning-color)">#FFE9AE</p>
                        <p class="pb-0 text-sm text-(--app-warning-color)">--app-subtle-warning-color</p>
                    </div>
                    <div class="flex flex-col p-3">
                        <div class="bg-(--app-subtle-info-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-info-color)">#D6F7FF</p>
                        <p class="pb-0 text-sm text-(--app-info-color)">--app-subtle-info-color</p>
                    </div>
                    <div class="flex flex-col p-3">
                        <div class="bg-(--app-subtle-secondary-color) w-10 aspect-square rounded-md mb-5"></div>
                        <p class="pb-0 text-md text-(--app-secondary-color)">#5B5B5B</p>
                        <p class="pb-0 text-sm text-(--app-secondary-color)">--app-subtle-secondary-color</p>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

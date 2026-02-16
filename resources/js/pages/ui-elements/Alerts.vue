<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { Info, CircleCheck, TriangleAlert, OctagonX, BadgeInfo } from 'lucide-vue-next';
import { Alert, AlertTitle, AlertDescription } from '@/components/ui/alert';
import AppLayout from '@/layouts/AppLayout.vue';
import { dashboard } from '@/routes';
import { type BreadcrumbItem } from '@/types';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: dashboard().url,
    },{
        title: 'Alerts',
    },
];
</script>

<template>
    <Head title="Alerts" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div
            class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4"
        >
            <div class="flex flex-row justify-between align-center">
                <h2 class="text-2xl">Alerts</h2>
            </div>
            <div
                class="relative min-h-screen flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border p-5 flex flex-col gap-5"
            >
                <div class="flex flex-col gap-3">
                    <h3 class="text-lg">Solid Alert</h3>
                    <Alert iconSize="lg">
                        <Info />
                        <AlertTitle>Default Alert</AlertTitle>
                        <AlertDescription class="text-white">
                            You can insert a description for the message here.The text relates to the action that has been performed.
                        </AlertDescription>
                    </Alert>
                    <Alert variant="success" iconSize="lg">
                        <CircleCheck />
                        <AlertTitle>Success Alert</AlertTitle>
                        <AlertDescription class="text-white">
                            You can insert a description for the message here.The text relates to the action that has been performed.
                        </AlertDescription>
                    </Alert>
                    <Alert variant="danger" iconSize="lg">
                        <OctagonX />
                        <AlertTitle>Danger Alert</AlertTitle>
                        <AlertDescription class="text-white">
                            You can insert a description for the message here.The text relates to the action that has been performed.
                        </AlertDescription>
                    </Alert>
                    <Alert variant="warning" iconSize="lg">
                        <TriangleAlert />
                        <AlertTitle>Warning Alert</AlertTitle>
                        <AlertDescription class="text-white">
                            You can insert a description for the message here.The text relates to the action that has been performed.
                        </AlertDescription>
                    </Alert>
                    <Alert variant="info" iconSize="lg">
                        <BadgeInfo />
                        <AlertTitle>Info Alert</AlertTitle>
                        <AlertDescription class="text-white">
                            You can insert a description for the message here.The text relates to the action that has been performed.
                        </AlertDescription>
                    </Alert>
                    <Alert variant="secondary" iconSize="lg">
                        <Info />
                        <AlertTitle>Secondary Alert</AlertTitle>
                        <AlertDescription >
                            You can insert a description for the message here.The text relates to the action that has been performed.
                        </AlertDescription>
                    </Alert>
                    <Alert variant="light" iconSize="lg">
                        <Info />
                        <AlertTitle>Light Alert</AlertTitle>
                        <AlertDescription >
                            You can insert a description for the message here.The text relates to the action that has been performed.
                        </AlertDescription>
                    </Alert>
                    <Alert variant="dark" iconSize="lg">
                        <Info />
                        <AlertTitle>Dark Alert</AlertTitle>
                        <AlertDescription >
                            You can insert a description for the message here.The text relates to the action that has been performed.
                        </AlertDescription>
                    </Alert>
                </div>
                <div class="flex flex-col gap-3">
                    <h3 class="text-lg">Subtle Alert</h3>
                    <Alert variant="subtlePrimary" iconSize="lg">
                        <Info />
                        <AlertTitle>Primary Subtle Alert</AlertTitle>
                        <AlertDescription>
                            You can insert a description for the message here.The text relates to the action that has been performed.
                        </AlertDescription>
                    </Alert>
                    <Alert variant="subtleSuccess" iconSize="lg">
                        <CircleCheck />
                        <AlertTitle>Success Subtle Alert</AlertTitle>
                        <AlertDescription>
                            You can insert a description for the message here.The text relates to the action that has been performed.
                        </AlertDescription>
                    </Alert>
                    <Alert variant="subtleDanger" iconSize="lg">
                        <OctagonX />
                        <AlertTitle>Danger Subtle Alert</AlertTitle>
                        <AlertDescription>
                            You can insert a description for the message here.The text relates to the action that has been performed.
                        </AlertDescription>
                    </Alert>
                    <Alert variant="subtleWarning" iconSize="lg">
                        <TriangleAlert />
                        <AlertTitle>Warning Subtle Alert</AlertTitle>
                        <AlertDescription>
                            You can insert a description for the message here.The text relates to the action that has been performed.
                        </AlertDescription>
                    </Alert>
                    <Alert variant="subtleInfo" iconSize="lg">
                        <BadgeInfo />
                        <AlertTitle>Info Subtle Alert</AlertTitle>
                        <AlertDescription>
                            You can insert a description for the message here.The text relates to the action that has been performed.
                        </AlertDescription>
                    </Alert>
                    <Alert variant="subtleSecondary" iconSize="lg">
                        <Info />
                        <AlertTitle>Secondary Subtle Alert</AlertTitle>
                        <AlertDescription class="text-white">
                            You can insert a description for the message here.The text relates to the action that has been performed.
                        </AlertDescription>
                    </Alert>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

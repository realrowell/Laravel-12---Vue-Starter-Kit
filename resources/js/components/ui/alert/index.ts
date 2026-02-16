import type { VariantProps } from "class-variance-authority"
import { cva } from "class-variance-authority"

export { default as Alert } from "./Alert.vue"
export { default as AlertDescription } from "./AlertDescription.vue"
export { default as AlertTitle } from "./AlertTitle.vue"

export const alertVariants = cva(
    "relative w-full rounded-lg border px-4 py-3 text-sm grid grid-cols-[0_1fr] has-[>svg]:gap-x-3 gap-y-0.5 items-start [&>svg]:translate-y-0.5 [&>svg]:text-current",
    {
        variants: {
        variant: {
                default: "bg-(--app-primary-color) text-white",
                destructive: "text-destructive bg-card [&>svg]:text-current *:data-[slot=alert-description]:text-destructive/90",
                success: "bg-(--app-success-color) text-white",
                danger: "bg-(--app-danger-color) text-white",
                warning: "bg-(--app-warning-color) text-white",
                info: "bg-(--app-info-color) text-white",
                secondary: "bg-(--app-secondary-color) border-(--app-subtle-secondary-color)",
                light: "bg-white",
                dark: "bg-black text-white",
                subtlePrimary: "bg-(--app-subtle-primary-color) text-(--app-primary-color) border-(--app-primary-color)",
                subtleSuccess: "bg-(--app-subtle-success-color) text-(--app-success-color) border-(--app-success-color)",
                subtleDanger: "bg-(--app-subtle-danger-color) text-(--app-danger-color) border-(--app-danger-color)",
                subtleWarning: "bg-(--app-subtle-warning-color) text-(--app-warning-color) border-(--app-warning-color)",
                subtleInfo: "bg-(--app-subtle-info-color) text-(--app-info-color) border-(--app-info-color)",
                subtleSecondary: "bg-(--app-subtle-secondary-color) text-(--app-secondary-color) border-(--app-secondary-color)",
            },
            iconSize: {
                sm: "has-[>svg]:grid-cols-[calc(var(--spacing)*3)_1fr] [&>svg]:size-3",
                md: "has-[>svg]:grid-cols-[calc(var(--spacing)*4)_1fr] [&>svg]:size-4",
                lg: "has-[>svg]:grid-cols-[calc(var(--spacing)*5)_1fr] [&>svg]:size-5",
                xl: "has-[>svg]:grid-cols-[calc(var(--spacing)*6)_1fr] [&>svg]:size-6",
            },
        },
        defaultVariants: {
            variant: "default",
            iconSize: "md",
        },
    },
)

export type AlertVariants = VariantProps<typeof alertVariants>

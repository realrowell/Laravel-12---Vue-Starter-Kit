<script setup lang="ts">
import type { HTMLAttributes } from "vue"
import type { AlertVariants } from "."
import { cn } from "@/lib/utils"
import { alertVariants } from "."

const props = defineProps<{
  class?: HTMLAttributes["class"]
  variant?: AlertVariants["variant"]
  iconSize?: AlertVariants["iconSize"]
}>()
</script>

<template>
  <div
    :class="cn(
      alertVariants({
        variant: props.variant,
        iconSize: props.iconSize,
      }),
      props.class
    )"
  >
    <slot />
  </div>
</template>

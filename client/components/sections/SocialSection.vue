<template>
  <section class="flex items-center justify-between bottom-10 w-full absolute">
    <div class="flex space-x-6">
      <ion-icon name="logo-facebook" class="w-6 h-6 filter grayscale rounded" />
      <ion-icon name="logo-instagram" class="w-6 h-6 filter grayscale rounded" />
      <ion-icon name="logo-github" class="w-6 h-6 filter grayscale rounded" />
      <ion-icon name="logo-github" class="w-6 h-6 filter grayscale rounded" />
      <ion-icon name="logo-twitter" class="w-6 h-6 filter grayscale rounded" />
    </div>
    <a href="mailto:lawaloladipupo@outlook.com" class="text-black no-underline text-sm">
      {{ profile.email }}
    </a>
  </section>
</template>

<script lang="ts">
import Vue from 'vue'
import { PropType } from '@nuxtjs/composition-api'
import { User } from '@/types/api'

export default Vue.extend({
  name: 'SocialSection',
  props: {
    profile: {
      type: Object as PropType<User>,
      required: true,
    },
  },
})
</script>

<style scoped>

</style>

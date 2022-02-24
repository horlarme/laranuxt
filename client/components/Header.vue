<template>
  <nav class="container mx-auto flex items-center justify-between px-2 top-0 sticky bg-white z-10">
    <IconNuxt class="w-10 filter grayscale object-cover" />
    <div class="flex items-center space-x-4 py-4">
      <NLink
        v-for="link in links"
        :key="`Link-${link.title}`"
        class="p-3 font-normal font-rubik"
        :to="link.link"
      >
        {{ link.title }}
      </NLink>
    </div>
  </nav>
</template>

<script lang="ts">
import Vue from 'vue'

export default Vue.extend({
  name: 'Header',
  data () {
    return {
      links: [
        {
          link: '/',
          title: 'Home',
        }, {
          link: '/#services',
          title: 'Services',
        }, {
          link: '/#skills',
          title: 'Skills',
        }, {
          link: '/#experience',
          title: 'Experience',
        },
      ] as Array<{ title: string, link: string }>,
    }
  },
})
</script>

<style scoped>

</style>

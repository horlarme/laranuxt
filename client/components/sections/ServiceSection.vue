<template>
  <section id="services" class="h-screen grid place-items-center py-32">
    <div class="w-full">
      <h2 class="text-4xl font-black">What I do.</h2>
      <div class="grid grid-cols-3 gap-5 gap-x-10 py-10">
        <Service v-for="service in services" :key="`Service-${service}`" />
      </div>
      <AddButton title="Add New Service" @add="add" />
    </div>
  </section>
</template>

<script lang="ts">
import Vue from 'vue'
import Service from '@/components/Service.vue'

export default Vue.extend({
  name: 'ServiceSection',
  components: { Service },
  data () {
    return {
      services: [0, 1],
    }
  },
  methods: {
    add () {
      this.services.push(this.services.length)
    },
  },
})
</script>

<style scoped>

</style>

<template>
  <section id="services" class="h-screen grid place-items-center py-32">
    <div class="w-full">
      <h2 class="text-4xl font-black">What I do.</h2>
      <div class="grid grid-cols-3 gap-5 gap-x-10 py-10">
        <Service
          v-for="(service, index) in services"
          :key="`Service-${index}`"
          :data="service"
          @updated="$emit('updated')"
          @delete="drop(index)"
        />
      </div>
      <AddButton title="Add New Service" @add="add" />
    </div>
  </section>
</template>

<script lang="ts">
import Vue from 'vue'
import { PropType } from '@nuxtjs/composition-api'
import Service from '@/components/Service.vue'
import { Services, Service as ServiceType } from '@/types/api'

export default Vue.extend({
  name: 'ServiceSection',
  components: { Service },
  props: {
    data: {
      type: Array as PropType<Services>,
      required: false,
    },
  },
  data () {
    return {
      services: [] as Services,
    }
  },
  mounted () {
    this.services = Array.from(this.data)
  },
  methods: {
    drop (index: number) {
      this.services = this.services.filter((_, i) => i !== index)
    },
    add () {
      this.services.push({
        description: 'Add service description',
        title: 'Add service title',
      } as ServiceType)
    },
  },
})
</script>

<style scoped>

</style>

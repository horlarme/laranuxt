<template>
  <section id="experience" class="h-screen w-full grid place-items-center py-32">
    <div class="w-full">
      <h3 class="text-4xl mb-20">
        Experience
      </h3>
      <Experience v-for="i in experience" :key="`Experience-${i}`" />
      <AddButton title="Add New Experience" @add="add" />
    </div>
  </section>
</template>

<script lang="ts">
import Vue from 'vue'
import AddButton from '@/components/AddButton.vue'
import Experience from '@/components/Experience.vue'

export default Vue.extend({
  name: 'ExperienceSection',
  components: { Experience, AddButton },
  data () {
    return {

      experience: [0, 1],
    }
  },
  methods: {
    add () {
      this.experience.push(this.experience.length)
    },
  },

})
</script>

<style scoped>

</style>

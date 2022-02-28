<template>
  <section id="experience" class="h-screen w-full grid place-items-center py-32">
    <div class="w-full">
      <h3 class="text-4xl mb-20">
        Experience
      </h3>
      <Experience
        v-for="(experience, index) in experiences"
        :key="`Experience-${index}`"
        :data="experience"
        @updated="$emit('updated')"
        @delete="drop(index)"
      />
      <AddButton title="Add New Experience" @add="add" />
    </div>
  </section>
</template>

<script lang="ts">
import Vue from 'vue'
import { PropType } from '@nuxtjs/composition-api'
import AddButton from '@/components/AddButton.vue'
import Experience from '@/components/Experience.vue'
import { Experience as ExperienceType, Experiences } from '@/types/api'

export default Vue.extend({
  name: 'ExperienceSection',
  components: { Experience, AddButton },
  props: {
    data: {
      type: Array as PropType<Experiences>,
      required: false,
    },
  },
  data () {
    return {
      experiences: [] as Experiences,
    }
  },
  mounted () {
    this.experiences = Array.from(this.data)
  },
  methods: {
    drop (index: number) {
      this.experiences = this.experiences.filter((_, i) => i !== index)
    },
    add () {
      this.experiences.push({
        company: 'The Company',
        position: 'Your position',
        description: 'What I did there',
      } as ExperienceType)
    },
  },
})
</script>

<style scoped>

</style>

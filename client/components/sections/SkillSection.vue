<template>
  <section id="skills" class="h-screen w-full grid place-items-center">
    <div class="w-full">
      <h3 class="text-4xl mb-10">
        Skills
      </h3>
      <div class="w-full grid grid-cols-3 gap-10">
        <Skill
          v-for="(skill, index) in skills"
          :key="`Skill-${index}`"
          :data="skill"
          @updated="$emit('updated')"
          @delete="drop(index)"
        />
      </div>
      <AddButton title="Add New Skill" @add="add" />
    </div>
  </section>
</template>

<script lang="ts">
import Vue from 'vue'
import { PropType } from '@nuxtjs/composition-api'
import Skill from '@/components/Skill.vue'
import AddButton from '@/components/AddButton.vue'
import { Skills, Skill as SkillType } from '@/types/api'

export default Vue.extend({
  name: 'SkillSection',
  components: { Skill, AddButton },
  props: {
    data: {
      type: Array as PropType<Skills>,
      required: false,
    },
  },
  data () {
    return {
      skills: [] as Skills,
    }
  },
  mounted () {
    this.skills = Array.from(this.data)
  },
  methods: {
    drop (index: number) {
      this.skills = this.skills.filter((_, i) => i !== index)
    },
    add () {
      this.skills.push({
        title: 'Add skill title',
      } as SkillType)
    },
  },

})
</script>

<style scoped>

</style>

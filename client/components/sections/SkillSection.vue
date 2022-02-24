<template>
  <section id="skills" class="h-screen w-full grid place-items-center">
    <div class="w-full">
      <h3 class="text-4xl mb-10">
        Skills
      </h3>
      <div class="w-full grid grid-cols-3 gap-10">
        <Skill v-for="skill in skills" :key="`Skill-${skill}`" />
      </div>
      <AddButton title="Add New Skill" @add="addNewSkill" />
    </div>
  </section>
</template>

<script lang="ts">
import Vue from 'vue'
import Skill from '@/components/Skill.vue'
import AddButton from '@/components/AddButton.vue'

export default Vue.extend({
  name: 'SkillSection',
  components: { Skill, AddButton },
  data () {
    const skills: number[] = []

    return { skills }
  },
  methods: {
    addNewSkill () {
      this.skills.push(this.skills.length)
    },
  },
})
</script>

<style scoped>

</style>

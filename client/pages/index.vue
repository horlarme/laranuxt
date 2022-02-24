<template>
  <div class="container mx-auto bg-white">
    <Header />
    <IntroductionSection />
    <ServiceSection />
    <SkillSection />
    <ExperienceSection />
  </div>
</template>

<script lang="ts">
import Vue from 'vue'
import IntroductionSection from '@/components/sections/IntroductionSection.vue'
import SkillSection from '@/components/sections/SkillSection.vue'
import ServiceSection from '@/components/sections/ServiceSection.vue'
import ExperienceSection from '@/components/sections/ExperienceSection.vue'

export default Vue.extend({
  components: { ExperienceSection, SkillSection, ServiceSection, IntroductionSection },
})
</script>

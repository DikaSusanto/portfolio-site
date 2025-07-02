<template>
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Left Column - Image -->
        <div class="relative">
          <div class="relative z-10">
            <img
              src="https://media.licdn.com/dms/image/v2/D5603AQE1dAd66Mlw0w/profile-displayphoto-shrink_800_800/B56ZQsMhXOGoAc-/0/1735908268086?e=1756339200&v=beta&t=t0Zx-gtWrpFhOQHV3ZnIwozYdM01qpqFObUemMxFGPo"
              alt="About me" class="rounded-2xl shadow-2xl w-full max-w-md mx-auto lg:mx-0">
            <!-- Decorative elements -->
            <div class="absolute -top-6 -right-6 w-24 h-24 bg-blue-500 rounded-full opacity-20 blur-xl"></div>
            <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-purple-500 rounded-full opacity-20 blur-xl"></div>
          </div>
        </div>

        <!-- Right Column - Content -->
        <div>
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
            About <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Me</span>
          </h2>

          <p class="text-lg text-gray-600 mb-6 leading-relaxed text-justify">
            Currently an Information Systems Management undergraduate at Bali State Polytechnic, passionate about
            backend
            software
            development and building robust, scalable systems. My academic and internship experiences have given me
            hands-on skills in PHP, Laravel, MySQL, and related technologies.
          </p>

          <p class="text-lg text-gray-600 mb-8 leading-relaxed text-justify">
            I thrive in collaborative, diverse teams and am fluent in both English and Indonesian. Eager to keep growing
            as a web developer, I bring critical thinking, teamwork, and a drive for innovative solutions to every
            project.
          </p>

          <!-- Skills -->
          <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-900 mb-4">Skills & Technologies</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
              <div v-for="skill in skills" :key="skill.name" class="flex items-center space-x-3">
                <div class="w-3 h-3 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex-shrink-0"></div>
                <span class="text-gray-700 font-medium">{{ skill.name }}</span>
              </div>
            </div>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-6 mb-8">
            <div class="text-center">
              <div class="text-3xl font-bold text-gray-900 mb-1">1+</div>
              <div class="text-sm text-gray-600">Year Internship</div>
            </div>
            <div class="text-center">
              <div class="text-3xl font-bold text-gray-900 mb-1">9+</div>
              <div class="text-sm text-gray-600">Technologies Mastered</div>
            </div>
            <div class="text-center">
              <div class="text-3xl font-bold text-gray-900 mb-1">3.9+</div>
              <div class="text-sm text-gray-600">GPA Achievement</div>
            </div>
          </div>

          <!-- CTA Button -->
          <a href="/CV_Dika Putra Susanto_2025.pdf" download
            class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg inline-block">
            Download Resume
          </a>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'AboutSection',
  data() {
    return {
      skills: [
        { name: 'Laravel' },
        { name: 'Vue.js' },
        { name: 'PHP' },
        { name: 'JavaScript' },
        { name: 'MySQL' },
        { name: 'Tailwind CSS' },
        { name: 'Git' },
        { name: 'Docker' },
        { name: 'RabbitMQ' }
      ]
    }
  }
}
</script>
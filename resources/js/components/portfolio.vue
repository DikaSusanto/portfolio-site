<template>
  <section id="portfolio" class="py-20 bg-gray-900 relative overflow-hidden">
    <!-- Decorative Background Elements -->
    <div class="absolute inset-0 pointer-events-none">
      <div class="absolute top-20 left-10 w-32 h-32 bg-gray-600/10 rounded-full blur-xl"></div>
      <div class="absolute bottom-20 right-10 w-48 h-48 bg-gray-700/10 rounded-full blur-xl"></div>
      <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-gray-500/10 rounded-full blur-2xl"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">
          My <span class="bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">Portfolio</span>
        </h2>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
          A showcase of my recent projects, demonstrating my expertise in full-stack development, 
          UI/UX design, and modern web technologies.
        </p>
      </div>

      <!-- Filter Tabs -->
      <div class="flex flex-wrap justify-center gap-4 mb-12">
        <button 
          v-for="category in categories" 
          :key="category"
          @click="activeFilter = category"
          :class=" [
            'px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105',
            activeFilter === category 
              ? 'bg-gradient-to-r from-blue-600 to-cyan-600 text-white shadow-lg' 
              : 'bg-gray-700 text-gray-300 hover:bg-gradient-to-r hover:from-blue-600/20 hover:to-cyan-600/20 hover:border-blue-500/50 shadow-md border border-gray-600'
          ]"
        >
          {{ category }}
        </button>
      </div>

      <!-- Portfolio Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div 
          v-for="project in filteredProjects" 
          :key="project.id"
          class="group relative bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2"
        >
          <!-- Project Image -->
          <div class="relative overflow-hidden">
            <img
              :src="project.image"
              :alt="project.title"
              class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500"
            />
            <!-- Overlay on hover -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              <div class="absolute bottom-4 left-4 right-4">
                <div class="flex space-x-2">
                  <span 
                    v-for="tech in project.technologies" 
                    :key="tech"
                    class="px-2 py-1 bg-white/20 backdrop-blur-sm text-white text-xs rounded-full"
                  >
                    {{ tech }}
                  </span>
                </div>
              </div>
            </div>
            <!-- Category Badge -->
            <div class="absolute top-4 left-4">
              <span class="px-3 py-1 bg-gradient-to-r from-blue-600 to-cyan-600 text-white text-sm font-semibold rounded-full">
                {{ project.category }}
              </span>
            </div>
          </div>

          <!-- Project Content -->
          <div class="p-6">
            <h3 class="text-xl font-bold text-white mb-2 group-hover:text-blue-300 transition-colors duration-300">
              {{ project.title }}
            </h3>
            <p class="text-gray-300 mb-4 leading-relaxed">
              {{ project.description }}
            </p>

            <!-- Project Stats -->
            <div class="flex items-center justify-between mb-6">
              <div class="flex items-center space-x-4 text-sm text-gray-400">
                <div class="flex items-center space-x-1">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                  <span>{{ project.duration }}</span>
                </div>
                <div class="flex items-center space-x-1">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                  </svg>
                  <span>{{ project.views }}</span>
                </div>
              </div>
              
              <!-- Rating -->
              <div class="flex items-center space-x-1">
                <svg 
                  v-for="star in 5" 
                  :key="star"
                  :class=" [
                    'w-4 h-4',
                    star <= project.rating ? 'text-yellow-400' : 'text-gray-500'
                  ]"
                  fill="currentColor" 
                  viewBox="0 0 20 20"
                >
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
              </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex space-x-3">
              <a 
                :href="project.liveUrl" 
                target="_blank"
                class="flex-1 bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-500 hover:to-cyan-500 text-white text-center py-3 px-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-md"
              >
                Live Demo
              </a>
              <a 
                :href="project.githubUrl" 
                target="_blank"
                class="flex-1 border-2 border-blue-500/50 hover:border-blue-400 text-gray-300 hover:text-blue-300 text-center py-3 px-4 rounded-lg font-semibold transition-all duration-300 hover:bg-blue-500/10"
              >
                Code
              </a>
            </div>
          </div>

          <!-- Hover Effect Gradient -->
          <div class="absolute inset-0 bg-gradient-to-r from-blue-600/5 to-cyan-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none rounded-2xl"></div>
        </div>
      </div>

      <!-- Load More Button -->
      <div class="text-center mt-16">
        <button 
          @click="loadMore"
          v-if="!showAll"
          class="bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-500 hover:to-cyan-500 text-white px-8 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg"
        >
          Load More Projects
        </button>
        <p v-else class="text-gray-400 italic">
          You've seen all my amazing projects! 🎉
        </p>
      </div>

      <!-- Contact CTA -->
      <div class="mt-20 text-center">
        <div class="bg-gray-900 p-8 rounded-2xl shadow-xl border border-gray-600 max-w-2xl mx-auto relative">
          <!-- Decorative elements -->
          <div class="absolute -top-3 -right-3 w-16 h-16 bg-blue-500/10 rounded-full blur-xl"></div>
          <div class="absolute -bottom-3 -left-3 w-20 h-20 bg-cyan-500/10 rounded-full blur-xl"></div>
          
          <div class="relative">
            <h3 class="text-2xl font-bold text-white mb-4">
              Like what you see?
            </h3>
            <p class="text-gray-300 mb-6 leading-relaxed">
              I'm always excited to work on new projects and collaborate with amazing people. 
              Let's discuss how we can bring your ideas to life.
            </p>
            <button class="bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-500 hover:to-cyan-500 text-white px-8 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
              Start a Project
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'PortfolioSection',
  data() {
    return {
      activeFilter: 'All',
      showAll: false,
      categories: ['All', 'Web Development', 'Mobile Apps', 'UI/UX Design', 'E-commerce'],
      projects: [
        {
          id: 1,
          title: 'Centralized Email Service for PT. Bank Pembangunan Daerah Bali',
          description: 'A comprehensive admin dashboard for managing online stores with real-time analytics and inventory management.',
          image: 'https://via.placeholder.com/400x300/3B82F6/FFFFFF?text=E-commerce+Dashboard',
          category: 'Web Development',
          technologies: ['Laravel', 'RabbitMQ', 'Elasticsearch'],
          duration: '3 months',
          views: '1.2k',
          rating: 5,
          liveUrl: '#',
          githubUrl: '#'
        },
        {
          id: 2,
          title: 'Mobile Banking App',
          description: 'Secure and intuitive mobile banking application with biometric authentication and real-time transactions.',
          image: 'https://via.placeholder.com/400x300/8B5CF6/FFFFFF?text=Banking+App',
          category: 'Mobile Apps',
          technologies: ['React Native', 'Node.js', 'MongoDB'],
          duration: '4 months',
          views: '980',
          rating: 5,
          liveUrl: '#',
          githubUrl: '#'
        },
        {
          id: 3,
          title: 'Brand Identity Design',
          description: 'Complete brand identity design including logo, color palette, and design system for a tech startup.',
          image: 'https://via.placeholder.com/400x300/06B6D4/FFFFFF?text=Brand+Identity',
          category: 'UI/UX Design',
          technologies: ['Figma', 'Sketch', 'Adobe CC'],
          duration: '2 months',
          views: '750',
          rating: 4,
          liveUrl: '#',
          githubUrl: '#'
        },
        {
          id: 4,
          title: 'Restaurant Management System',
          description: 'Full-featured restaurant management system with POS, inventory tracking, and customer management.',
          image: 'https://via.placeholder.com/400x300/10B981/FFFFFF?text=Restaurant+System',
          category: 'Web Development',
          technologies: ['Laravel', 'React', 'PostgreSQL'],
          duration: '5 months',
          views: '1.5k',
          rating: 5,
          liveUrl: '#',
          githubUrl: '#'
        },
        {
          id: 5,
          title: 'Fashion E-commerce',
          description: 'Modern e-commerce platform for fashion brands with advanced filtering and recommendation engine.',
          image: 'https://via.placeholder.com/400x300/F59E0B/FFFFFF?text=Fashion+Store',
          category: 'E-commerce',
          technologies: ['Shopify', 'React', 'Stripe'],
          duration: '3 months',
          views: '2.1k',
          rating: 5,
          liveUrl: '#',
          githubUrl: '#'
        },
        {
          id: 6,
          title: 'Fitness Tracking App',
          description: 'Comprehensive fitness tracking mobile app with workout plans, nutrition tracking, and progress analytics.',
          image: 'https://via.placeholder.com/400x300/EF4444/FFFFFF?text=Fitness+App',
          category: 'Mobile Apps',
          technologies: ['Flutter', 'Firebase', 'ML Kit'],
          duration: '4 months',
          views: '890',
          rating: 4,
          liveUrl: '#',
          githubUrl: '#'
        }
      ]
    }
  },
  computed: {
    filteredProjects() {
      const filtered = this.activeFilter === 'All' 
        ? this.projects 
        : this.projects.filter(project => project.category === this.activeFilter)
      
      return this.showAll ? filtered : filtered.slice(0, 6)
    }
  },
  methods: {
    loadMore() {
      this.showAll = true
    }
  }
}
</script>
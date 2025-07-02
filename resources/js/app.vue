<template>
  <div>
    <header>
      <!-- Add navigation or header content here -->
    </header>
    <main>
      <DashboardSection />
      <AboutSection />
      <PortfolioSection />
      <ContactSection />
    </main>
    <FooterSection />
  </div>
</template>

<script>
import DashboardSection from './components/dashboard.vue';
import AboutSection from './components/about.vue';
import PortfolioSection from './components/portfolio.vue';
import ContactSection from './components/contact.vue';
import FooterSection from './components/footer.vue';

export default {
  name: 'App',
  components: {
    DashboardSection,
    AboutSection,
    PortfolioSection,
    ContactSection,
    FooterSection,
  },
};
</script>

<style>
/* Add global styles here if needed */
</style>
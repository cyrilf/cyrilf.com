<script setup lang="ts">
import BaseSection from "./components/BaseSection.vue";
import BaseIntro from "./components/BaseIntro.vue";
import BaseProjects from "./components/BaseProjects.vue";
import BaseTimeline from "./components/BaseTimeline.vue";
import BaseContact from "./components/BaseContact.vue";
import BaseLink from "./components/BaseLink.vue";

const projects: Project[] = [
  {
    name: "Luseeds",
    image: "/src/assets/luseeds.png",
    description: "Collection of projects to make you discover and question a subject",
    link: "https://luseeds.com",
  },
  {
    name: "Anoano",
    image: "/src/assets/anoano.png",
    description: "A website about masculine contraception",
    link: "https://anoano.page",
  },
  {
    name: "Microbios",
    image: "/src/assets/microbios.png",
    description: "A collection of cellular automata experiments in Typescript",
    link: "https://microbios.cyrilf.com",
  },
];

const experiences: Experience[] = [
  {
    name: "Your company name here?",
    icon: "⚡️",
    startDate: "Starting soon",
    description:
      "I'm currently open for any remote freelance opportunities. Ecology, sustainability, social, ethics are very important topics to me. I'm now solely interested in missions that reflect these values at their core.",
    isActive: true,
  },
  {
    name: "CyrilF (freelance)",
    icon: "💻",
    link: "https://cyrilf.com",
    startDate: "03/2012",
    endDate: "Present",
    description: "A variety of clients and missions over the years. A still ongoing adventure.",
    subExperiences: [
      {
        name: "Nikita",
        date: "05/2020 - 04/2022",
        description: "emails and signatures integration",
      },
      {
        name: "Péli-Mélo",
        date: "07/2020 - 08/2020",
        description: "mobile app on photo-collage creation",
      },
      {
        name: "Hoopop",
        date: "09/2020",
        description: "mobile app about event creation",
      },
      {
        name: "Les Mains Vertes",
        date: "10/2021",
        description: "a company website of landscaping",
      },
      {
        name: "Spirkop",
        date: "07/2020 - present",
        description: "collaborating on various projects",
      },
    ],
    isActive: true,
  },
  {
    name: "ETCLD (freelance)",
    icon: "💁",
    link: "https://etcld.fr",
    startDate: "01/2022",
    endDate: "Present",
    description: "Developing tools to simplify the financial workflow and volunteers follow-up in the experimentation",
    isActive: true,
  },
  {
    name: "Isobar (jetstar)",
    icon: "✈️",
    link: "https://www.dentsu.com/see/en/our-work/case-studies-isobar-jetstar",
    startDate: "05/2019",
    endDate: "11/2019",
    description: "Re-designing the travel experience",
  },
  {
    name: "Evopark",
    icon: "🚗",
    link: "https://www.evopark.com/en/",
    startDate: "04/2017",
    endDate: "10/2018",
    description: "Parking experience & management improved",
  },
  {
    name: "Evaneos",
    icon: "🌍",
    link: "https://www.evaneos.com/",
    startDate: "04/2014",
    endDate: "10/2016",
    description: "Tailor-made tours & travel with local agents",
  },
  {
    name: "reelyActive",
    icon: "🛜",
    link: "https://www.reelyactive.com/",
    startDate: "03/2013",
    endDate: "09/2013",
    description: "IOT to maximise human experience",
  },
  {
    name: "42Stores",
    icon: "🛒",
    link: "https://www.42stores.com/",
    startDate: "07/2011",
    endDate: "09/2012",
    description: "E-commerce plateform",
  },
  {
    name: "Logsys",
    icon: "📦",
    startDate: "07/2010",
    endDate: "10/2010",
    description: "Stock and employes management on embedded application",
  },
];
</script>

<template>
  <div
    class="bg-gray-100 bg-gradient-to-br from-gray-50 from-15% via-teal-50 via-30% to-gray-50 to-55% dark:bg-gray-700 dark:from-gray-700 dark:via-gray-600 dark:to-gray-700"
  >
    <nav class="mx-auto flex w-full max-w-4xl items-center justify-center px-4 py-12 pt-20 md:px-12 lg:px-48">
      <div>
        <h1
          class="text-center font-roboto-mono text-5xl text-teal-900 selection:bg-emerald-400 selection:text-white dark:text-gray-300"
        >
          <a href="https://cyrilf.com">Cyril Francesconi</a>
        </h1>
      </div>
    </nav>
    <BaseIntro class="selection:bg-emerald-400 selection:text-white" />
    <BaseSection title="Projects" subtitle="Experiments & creations" variant="projects" class="selection:bg-amber-500">
      <BaseProjects :projects="projects" />
    </BaseSection>
    <BaseSection
      title="Experience"
      subtitle="Companies I've worked with"
      variant="experience"
      class="selection:bg-sky-500"
    >
      <BaseTimeline :experiences="experiences" />
    </BaseSection>
    <BaseSection title="Contact" subtitle="How to reach me" variant="contact" class="selection:bg-stone-500">
      <BaseContact />
    </BaseSection>
    <footer
      class="bg-gray-700 p-8 text-center text-gray-100 selection:bg-emerald-400 selection:text-white dark:text-gray-200"
    >
      <BaseLink href="https://cyrilf.com">cyrilf.com</BaseLink> -
      <BaseLink href="https://github.com/cyrilf/cyrilf.com"
        >source available on Github <span class="icon-[ph--github-logo] ml-2"></span
      ></BaseLink>
    </footer>
  </div>
</template>

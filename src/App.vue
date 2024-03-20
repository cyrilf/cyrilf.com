<script setup lang="ts">
import BaseLink from "./components/BaseLink.vue";
import BaseSection from "./components/BaseSection.vue";
import BaseTimeline from "./components/BaseTimeline.vue";
import BaseContact from "./components/BaseContact.vue";

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
        description: "mobile app about photo-collage creation",
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
  <nav class="mx-auto mt-10 flex w-full max-w-4xl items-center justify-center px-4 py-6 md:px-12 lg:px-48">
    <div>
      <h1 class="font-roboto-mono text-5xl">Cyril Francesconi</h1>
    </div>
    <div></div>
  </nav>
  <div class="mx-auto mt-12 max-w-6xl">
    <div class="hover:shadow-lg md:grid-cols-none lg:grid lg:grid-cols-5 lg:bg-white">
      <div
        class="relative m-auto my-20 max-w-md rounded-xl bg-white px-10 py-10 shadow-xl md:rounded-xl md:shadow-xl lg:col-span-3 lg:mb-10 lg:mt-10 lg:w-full lg:max-w-lg lg:rounded-none lg:px-5 lg:pb-5 lg:pt-5 lg:shadow-none"
      >
        <img src="./assets/logo.png" alt="CyrilF Logo" class="absolute -top-20 h-24" />
        <img
          class="mt-2 h-64 rounded-lg object-center shadow-2xl sm:h-52 sm:w-full sm:object-cover lg:hidden"
          src="./assets/cyrilf-profile.jpg"
          alt="A picture portrait of cyrilf"
        />
        <div class="mt-12 text-lg font-bold lg:mt-7">Hello, I'm Cyril. A freelance Web Developer.</div>
        <div class="pt-2 text-justify text-lg text-gray-600">
          <p>I write code, I solve problems, I learn new things.</p>
          <p class="inline-flex items-center">
            Open-source and web lover, find most of my contributions at
            <span class="icon-[ph--github-logo] ml-2 text-4xl" />
            <BaseLink href="https://github.com/cyrilf">github.com/cyrilf</BaseLink>.
          </p>
          <p>
            Also, happy creator/contributor of <span class="icon-[ph--plant-fill] mx-1" /><BaseLink
              href="https://luseeds.com"
              >luseeds.com</BaseLink
            >
            and <span class="icon-[ph--circle] mx-1" /><BaseLink href="https://anoano.page">anoano.page</BaseLink>.
          </p>
        </div>
        <button class="mt-5 rounded-xl bg-gray-600 p-3 font-bold text-white shadow-2xl hover:bg-gray-800">
          START STUDYING
        </button>
      </div>

      <div class="relative hidden lg:col-span-2 lg:block">
        <img
          class="absolute inset-0 h-full w-full object-cover object-center"
          src="./assets/cyrilf-bw.jpg"
          alt="A picture portrait of cyrilf"
        />
      </div>
    </div>
    <div class="mx-auto my-12 w-fit">
      <span class="text-gray-800"
        >⚡️ Open for any remote freelance opportunities. Reach me out at
        <BaseLink href="mailto:hello@cyrilf.com">hello@cyrilf.com</BaseLink>⚡️</span
      >
    </div>
  </div>
  <BaseSection title="Experience" subtitle="Companies I've worked with" variant="green">
    <BaseTimeline :experiences="experiences" />
  </BaseSection>
  <BaseSection title="Contact" subtitle="How to reach me" variant="stone">
    <BaseContact />
  </BaseSection>
</template>

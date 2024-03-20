/// <reference types="vite/client" />

type SubExperience = {
  name: string;
  date: string;
  description: string;
};

type Experience = {
  name: string;
  startDate: string;
  endDate?: string;
  description: string;
  isActive?: boolean;
  icon?: string;
  link?: string;
  subExperiences?: SubExperience[];
};

type Contact = {
  name: string;
  link: string;
  type: "email" | "github" | "linkedin";
};

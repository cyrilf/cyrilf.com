/// <reference types="vite/client" />

type Experience = {
  name: string;
  date: string;
  description: string;
};

type Company = {
  name: string;
  startDate: string;
  endDate?: string;
  description: string;
  isActive?: boolean;
  icon?: string;
  link?: string;
  experiences?: Experience[];
};

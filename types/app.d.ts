declare type SubExperience = {
  name: string;
  date: string;
  description: string;
};

declare type Experience = {
  name: string;
  startDate: string;
  endDate?: string;
  description: string;
  isActive?: boolean;
  icon?: string;
  link?: string;
  subExperiences?: SubExperience[];
};

declare type Project = {
  name: string;
  image: string;
  description: string;
  link: string;
};

declare type Contact = {
  name: string;
  link: string;
  type: "email" | "github" | "linkedin";
};

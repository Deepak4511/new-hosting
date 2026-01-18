
import React from 'react';

interface SectionProps {
  id?: string;
  title: string;
  subtitle?: string;
  children: React.ReactNode;
  bgColor?: string;
}

const Section: React.FC<SectionProps> = ({ id, title, subtitle, children, bgColor = "bg-white" }) => {
  return (
    <section id={id} className={`py-24 md:py-32 ${bgColor}`}>
      <div className="container mx-auto px-6">
        <div className="text-center max-w-3xl mx-auto mb-16">
          <h2 className="text-4xl md:text-5xl font-black mb-6 text-dmca-dark">{title}</h2>
          {subtitle && <p className="text-lg text-gray-500 font-medium">{subtitle}</p>}
        </div>
        {children}
      </div>
    </section>
  );
};

export default Section;

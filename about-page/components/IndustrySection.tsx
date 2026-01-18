
import React from 'react';

const IndustrySection: React.FC = () => {
  const useCases = [
    { title: "Streaming & Media", icon: "fa-clapperboard", desc: "Optimized for massive throughput and high-concurrency viewing." },
    { title: "File-Hosting", icon: "fa-folder-open", desc: "Reliable storage solutions for massive download and upload volumes." },
    { title: "SaaS Developers", icon: "fa-code", desc: "Stable environments for building and deploying complex cloud applications." },
    { title: "Resellers", icon: "fa-users", desc: "Wholesale infrastructure ready for your own client base." },
    { title: "High-Risk Business", icon: "fa-globe", desc: "Privacy-centric operations for businesses in sensitive niches." },
    { title: "Tech Startups", icon: "fa-rocket", desc: "Scalable power for projects requiring operational freedom and reliability." }
  ];

  return (
    <section className="py-24 bg-white">
      <div className="container mx-auto px-6">
        <div className="text-center max-w-3xl mx-auto mb-20">
          <h2 className="text-4xl md:text-5xl font-black text-dmca-dark mb-6">Industries & Use Cases</h2>
          <p className="text-lg text-gray-500">Tailored infrastructure for the web's most demanding niches.</p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {useCases.map((useCase, i) => (
            <div key={i} className="group p-8 bg-white border-2 border-gray-50 rounded-3xl hover:border-dmca-bright transition-all duration-300">
              <div className="w-14 h-14 bg-dmca-light rounded-2xl flex items-center justify-center text-dmca-bright mb-6 group-hover:bg-dmca-bright group-hover:text-white transition-all">
                <i className={`fa-solid ${useCase.icon} text-2xl`}></i>
              </div>
              <h3 className="text-xl font-bold text-dmca-dark mb-3">{useCase.title}</h3>
              <p className="text-gray-500 leading-relaxed">{useCase.desc}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default IndustrySection;

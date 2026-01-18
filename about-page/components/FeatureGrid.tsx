
import React from 'react';

const FeatureGrid: React.FC = () => {
  const services = [
    {
      title: "DMCA-Tolerant Dedicated Servers",
      desc: "Enterprise-grade hardware with SSD / NVMe storage for maximum throughput.",
      icon: "fa-microchip"
    },
    {
      title: "High-Bandwidth Network",
      desc: "Optimized routing with 1 Gbps to 10 Gbps uplinks for seamless streaming.",
      icon: "fa-bolt"
    },
    {
      title: "Fully Customizable Configs",
      desc: "Tailor your server infrastructure exactly to your project's unique requirements.",
      icon: "fa-puzzle-piece"
    },
    {
      title: "Scalable Infrastructure",
      desc: "Easily upgrade your resources as your platform grows without downtime.",
      icon: "fa-arrow-trend-up"
    }
  ];

  return (
    <section className="py-24 bg-dmca-dark text-white overflow-hidden relative">
      <div className="container mx-auto px-6 relative z-10">
        <div className="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
          <div className="max-w-xl">
            <h2 className="text-4xl font-black mb-6">Our Core Services</h2>
            <p className="text-gray-400 text-lg">Powerful infrastructure built for serious projects that demand stability, privacy, and control.</p>
          </div>
          <button className="bg-dmca-bright text-white px-8 py-3 rounded-xl font-bold hover:brightness-110 transition-all">
            See All Specifications
          </button>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          {services.map((service, i) => (
            <div key={i} className="glass-card p-8 rounded-3xl group">
              <div className="w-12 h-12 bg-dmca-bright/20 rounded-xl flex items-center justify-center text-dmca-bright mb-6 group-hover:bg-dmca-bright group-hover:text-white transition-all">
                <i className={`fa-solid ${service.icon} text-xl`}></i>
              </div>
              <h3 className="text-xl font-bold mb-4">{service.title}</h3>
              <p className="text-gray-400 text-sm leading-relaxed">{service.desc}</p>
            </div>
          ))}
        </div>
      </div>
      
      {/* Decorative Background Icon */}
      <i className="fa-solid fa-server absolute -right-20 -bottom-20 text-[25rem] text-white/5 pointer-events-none"></i>
    </section>
  );
};

export default FeatureGrid;


import React, { useState, useEffect } from 'react';
import Navbar from './components/Navbar';
import Footer from './components/Footer';
import Hero from './components/Hero';
import Section from './components/Section';
import FeatureGrid from './components/FeatureGrid';
import ComplianceSection from './components/ComplianceSection';
import LocationHighlight from './components/LocationHighlight';
import IndustrySection from './components/IndustrySection';
import ContactCTA from './components/ContactCTA';

const App: React.FC = () => {
  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      <main className="flex-grow">
        <Hero />
        
        <Section 
          id="overview"
          title="Company Overview" 
          subtitle="Empowering businesses to operate with confidence, stability, and discretion through specialized offshore infrastructure."
          bgColor="bg-white"
        >
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
            {[
              { icon: "fa-server", title: "Specialized Infrastructure", text: "Focused on DMCA-tolerant dedicated servers for high-risk projects." },
              { icon: "fa-globe", title: "Offshore Locations", text: "Privacy-friendly server locations strategically chosen for digital freedom." },
              { icon: "fa-shield-halved", title: "Niche Focused", text: "Designed for content-intensive and compliance-sensitive digital operations." },
              { icon: "fa-brain", title: "Expert Backed", text: "Years of hands-on experience in secure hosting environments and compliance." }
            ].map((item, i) => (
              <div key={i} className="p-8 border border-gray-100 rounded-2xl hover:shadow-xl transition-all duration-300 group hover:-translate-y-1">
                <div className="w-14 h-14 bg-dmca-light rounded-xl flex items-center justify-center mb-6 text-dmca-bright group-hover:scale-110 transition-transform">
                  <i className={`fa-solid ${item.icon} text-2xl`}></i>
                </div>
                <h3 className="text-xl font-bold mb-3">{item.title}</h3>
                <p className="text-gray-600 leading-relaxed">{item.text}</p>
              </div>
            ))}
          </div>
        </Section>

        <FeatureGrid />
        
        <ComplianceSection />

        <LocationHighlight />

        <IndustrySection />

        <Section 
          title="Payment & Billing" 
          subtitle="We believe in financial privacy as a core component of your digital independence."
          bgColor="bg-dmca-light"
        >
          <div className="max-w-4xl mx-auto mt-12 bg-white rounded-3xl p-8 md:p-12 shadow-sm border border-dmca-bright/10 flex flex-col md:flex-row items-center gap-12">
            <div className="w-full md:w-1/3 flex justify-center">
              <div className="w-32 h-32 md:w-48 md:h-48 bg-dmca-bright rounded-full flex items-center justify-center text-white shadow-lg shadow-dmca-bright/20">
                <i className="fa-brands fa-bitcoin text-6xl md:text-8xl"></i>
              </div>
            </div>
            <div className="w-full md:w-2/3">
              <h3 className="text-2xl font-bold mb-6">Cryptocurrency & Privacy First</h3>
              <ul className="space-y-4">
                {[
                  "Full support for Bitcoin and major altcoins",
                  "Secure, private, and borderless transactions",
                  "Ideal for international clients and offshore businesses",
                  "Reduced dependency on traditional banking systems"
                ].map((li, i) => (
                  <li key={i} className="flex items-start gap-3">
                    <i className="fa-solid fa-check text-dmca-bright mt-1"></i>
                    <span className="text-gray-700 font-medium">{li}</span>
                  </li>
                ))}
              </ul>
            </div>
          </div>
        </Section>

        <ContactCTA />
      </main>
      <Footer />
    </div>
  );
};

export default App;

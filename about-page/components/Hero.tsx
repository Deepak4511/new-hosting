
import React from 'react';

const Hero: React.FC = () => {
  return (
    <div className="relative overflow-hidden bg-dmca-light pt-20 pb-24 md:pt-32 md:pb-40">
      {/* Decorative Elements */}
      <div className="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-dmca-bright/10 rounded-full blur-3xl"></div>
      <div className="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-dmca-bright/5 rounded-full blur-3xl"></div>
      
      <div className="container mx-auto px-6 relative z-10">
        <div className="max-w-4xl mx-auto text-center">
          <div className="inline-flex items-center px-4 py-1.5 rounded-full bg-dmca-bright/10 text-dmca-bright font-bold text-xs uppercase tracking-widest mb-6">
            <span className="mr-2">●</span> About DMCAQloud.com
          </div>
          <h1 className="text-5xl md:text-7xl font-black text-dmca-dark mb-8 leading-[1.1]">
            Privacy. Freedom. <br />
            <span className="text-dmca-bright">Reliability.</span>
          </h1>
          <p className="text-xl md:text-2xl text-gray-600 leading-relaxed max-w-2xl mx-auto">
            DMCAQloud is a professional DMCA-tolerant hosting provider delivering secure, high-performance server solutions for privacy-focused and high-risk online projects.
          </p>
          <div className="mt-12 flex flex-wrap justify-center gap-4">
            <button className="bg-dmca-dark text-white px-10 py-4 rounded-xl text-lg font-bold hover:bg-opacity-90 transition-all shadow-xl shadow-dmca-dark/30">
              Get Started
            </button>
            <button className="bg-white text-dmca-dark border-2 border-gray-100 px-10 py-4 rounded-xl text-lg font-bold hover:border-dmca-bright transition-all">
              View Plans
            </button>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Hero;

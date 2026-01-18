
import React from 'react';

const LocationHighlight: React.FC = () => {
  return (
    <section className="py-24 bg-dmca-light relative overflow-hidden">
      <div className="container mx-auto px-6">
        <div className="flex flex-col lg:flex-row items-center gap-16">
          <div className="w-full lg:w-1/2 order-2 lg:order-1">
            <h2 className="text-4xl md:text-5xl font-black text-dmca-dark mb-6">Premium Locations: <span className="text-dmca-bright">Netherlands</span></h2>
            <p className="text-xl text-gray-600 mb-8 font-medium">Amsterdam – The heart of European digital connectivity.</p>
            
            <div className="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
              {[
                "Privacy-Friendly Laws",
                "Tier-3 Data Centers",
                "Low Latency to Europe",
                "100+ Gbps Network Backbone",
                "DMCA-Resistant Policies",
                "24/7 Physical Security"
              ].map((feat, i) => (
                <div key={i} className="flex items-center gap-3 bg-white p-4 rounded-xl border border-gray-100 shadow-sm">
                  <i className="fa-solid fa-circle-check text-dmca-bright"></i>
                  <span className="font-semibold text-dmca-dark">{feat}</span>
                </div>
              ))}
            </div>

            <p className="text-gray-500 leading-relaxed italic">
              "Our Amsterdam facility is chosen specifically for its robust legal framework regarding hosting services and its world-class peering capabilities, making it the perfect hub for media and high-traffic platforms."
            </p>
          </div>

          <div className="w-full lg:w-1/2 order-1 lg:order-2">
            <div className="relative group">
              {/* Map Illustration Placeholder */}
              <div className="w-full aspect-square bg-white rounded-full p-8 shadow-inner flex items-center justify-center border-8 border-white">
                <div className="text-center">
                  <i className="fa-solid fa-location-dot text-7xl text-dmca-bright mb-4 animate-bounce"></i>
                  <div className="text-2xl font-black text-dmca-dark">Amsterdam</div>
                  <div className="text-dmca-bright font-bold uppercase tracking-widest text-sm">Active Hub</div>
                </div>
                {/* Visual "Connections" */}
                <div className="absolute inset-0 flex items-center justify-center pointer-events-none">
                  <div className="w-[80%] h-[80%] border-2 border-dashed border-dmca-bright/20 rounded-full animate-spin-slow"></div>
                  <div className="absolute w-[60%] h-[60%] border border-dashed border-dmca-bright/10 rounded-full animate-spin-reverse-slow"></div>
                </div>
              </div>
              
              {/* Overlay Stat */}
              <div className="absolute top-4 right-4 bg-dmca-dark text-white px-6 py-4 rounded-2xl shadow-xl">
                <div className="text-2xl font-bold">99.99%</div>
                <div className="text-xs text-gray-400 font-bold uppercase">Uptime Guarantee</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <style>{`
        @keyframes spin-slow {
          from { transform: rotate(0deg); }
          to { transform: rotate(360deg); }
        }
        @keyframes spin-reverse-slow {
          from { transform: rotate(360deg); }
          to { transform: rotate(0deg); }
        }
        .animate-spin-slow {
          animation: spin-slow 20s linear infinite;
        }
        .animate-spin-reverse-slow {
          animation: spin-reverse-slow 15s linear infinite;
        }
      `}</style>
    </section>
  );
};

export default LocationHighlight;

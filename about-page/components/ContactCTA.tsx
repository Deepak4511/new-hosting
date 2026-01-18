
import React from 'react';

const ContactCTA: React.FC = () => {
  return (
    <section className="py-24">
      <div className="container mx-auto px-6">
        <div className="gradient-bg rounded-[3rem] p-12 md:p-20 text-white text-center relative overflow-hidden">
          {/* Abstract background shapes */}
          <div className="absolute top-0 left-0 w-64 h-64 bg-dmca-bright/10 rounded-full -translate-x-1/2 -translate-y-1/2 blur-2xl"></div>
          <div className="absolute bottom-0 right-0 w-96 h-96 bg-dmca-bright/20 rounded-full translate-x-1/2 translate-y-1/2 blur-3xl"></div>
          
          <div className="relative z-10 max-w-4xl mx-auto">
            <h2 className="text-4xl md:text-6xl font-black mb-8 leading-tight">
              Looking for a hosting partner that understands your niche?
            </h2>
            <p className="text-xl md:text-2xl text-white/80 mb-12">
              DMCAQloud.com is built for serious projects that demand stability, privacy, and control.
            </p>
            
            <div className="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-12">
              {[
                { title: "Live Chat", icon: "fa-comments", color: "bg-dmca-dark" },
                { title: "Email Support", icon: "fa-envelope", color: "bg-dmca-bright" },
                { title: "Telegram", icon: "fa-paper-plane", color: "bg-[#24A1DE]" }
              ].map((method, i) => (
                <button key={i} className={`${method.color} p-6 rounded-2xl shadow-xl hover:-translate-y-1 transition-all flex flex-col items-center gap-3`}>
                  <i className={`fa-solid ${method.icon} text-2xl`}></i>
                  <span className="font-bold">{method.title}</span>
                </button>
              ))}
            </div>

            <p className="text-white/60 font-medium">
              Our 24/7 team is ready to assist with pre-sales questions or technical challenges.
            </p>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ContactCTA;

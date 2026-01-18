
import React from 'react';

const ComplianceSection: React.FC = () => {
  return (
    <section className="py-24 bg-white">
      <div className="container mx-auto px-6">
        <div className="flex flex-col lg:flex-row items-center gap-16">
          <div className="w-full lg:w-1/2">
            <div className="relative">
              <div className="absolute inset-0 bg-dmca-bright blur-3xl opacity-10 rounded-full"></div>
              <img 
                src="https://picsum.photos/id/160/800/600" 
                alt="Secure Operations" 
                className="relative rounded-3xl shadow-2xl border-8 border-white"
              />
              <div className="absolute -bottom-8 -right-8 bg-dmca-dark text-white p-8 rounded-3xl shadow-xl max-w-xs hidden md:block">
                <i className="fa-solid fa-gavel text-3xl text-dmca-bright mb-4"></i>
                <h4 className="font-bold text-lg mb-2">Fair Use Validation</h4>
                <p className="text-sm text-gray-400">Abuse reports are reviewed manually and fairly. No instant suspensions without validation.</p>
              </div>
            </div>
          </div>
          <div className="w-full lg:w-1/2">
            <h2 className="text-4xl md:text-5xl font-black text-dmca-dark mb-8">DMCA & Compliance Handling</h2>
            <p className="text-lg text-gray-600 mb-10 leading-relaxed">
              We operate in carefully selected jurisdictions where DMCA notices are not automatically enforced, providing you with the operational freedom your project needs.
            </p>
            
            <div className="space-y-6">
              {[
                { title: "Offshore Jurisdictions", desc: "Servers hosted in privacy-friendly legal zones.", icon: "fa-landmark" },
                { title: "Operational Confidentiality", desc: "Strong emphasis on client privacy and data protection.", icon: "fa-user-secret" },
                { title: "Manual Review Process", desc: "Expert assessment of every abuse report received.", icon: "fa-eye" }
              ].map((item, i) => (
                <div key={i} className="flex gap-5">
                  <div className="flex-shrink-0 w-12 h-12 rounded-full bg-dmca-light flex items-center justify-center text-dmca-bright">
                    <i className={`fa-solid ${item.icon}`}></i>
                  </div>
                  <div>
                    <h4 className="text-xl font-bold mb-1">{item.title}</h4>
                    <p className="text-gray-500">{item.desc}</p>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ComplianceSection;

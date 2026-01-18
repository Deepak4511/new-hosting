
import React from 'react';

const Footer: React.FC = () => {
  return (
    <footer className="bg-dmca-dark text-white pt-24 pb-12">
      <div className="container mx-auto px-6">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
          <div>
            <div className="flex items-center gap-2 mb-8">
              <div className="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center">
                <i className="fa-solid fa-cloud text-dmca-bright text-xl"></i>
              </div>
              <span className="text-2xl font-black tracking-tight">DMCA<span className="text-dmca-bright">Qloud</span></span>
            </div>
            <p className="text-gray-400 mb-8 leading-relaxed">
              Premium offshore hosting services with absolute privacy protection. Ignore DMCA and host your content with total freedom.
            </p>
            <div className="flex gap-4">
              {['facebook', 'twitter', 'instagram', 'linkedin'].map((social) => (
                <a key={social} href="#" className="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center text-gray-400 hover:text-white hover:bg-dmca-bright transition-all">
                  <i className={`fa-brands fa-${social}`}></i>
                </a>
              ))}
            </div>
          </div>

          <div>
            <h4 className="text-lg font-bold mb-8">Quick Links</h4>
            <ul className="space-y-4 text-gray-400">
              <li><a href="#" className="hover:text-white transition-colors">Home</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Servers</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Streaming</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Video Servers</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Use Cases</a></li>
            </ul>
          </div>

          <div>
            <h4 className="text-lg font-bold mb-8">Useful Links</h4>
            <ul className="space-y-4 text-gray-400">
              <li><a href="#" className="hover:text-white transition-colors">Shared Hosting</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Dedicated Hosting</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Reseller Hosting</a></li>
              <li><a href="#" className="hover:text-white transition-colors">VPS Hosting</a></li>
            </ul>
          </div>

          <div>
            <h4 className="text-lg font-bold mb-8">Mailing Address</h4>
            <ul className="space-y-4 text-gray-400">
              <li className="flex items-start gap-3">
                <i className="fa-solid fa-location-dot mt-1 text-dmca-bright"></i>
                <span>121 King Street, Melbourne Victoria 3000 Australia</span>
              </li>
              <li className="flex items-start gap-3">
                <i className="fa-solid fa-phone mt-1 text-dmca-bright"></i>
                <span>+61 3 8376 6284</span>
              </li>
              <li className="flex items-start gap-3">
                <i className="fa-solid fa-envelope mt-1 text-dmca-bright"></i>
                <span>info@hostiko.com</span>
              </li>
            </ul>
          </div>
        </div>

        <div className="pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6 text-sm text-gray-500">
          <p>© 2024 DMCAQloud. All Rights Reserved.</p>
          <div className="flex gap-6">
            <a href="#" className="hover:text-white">Privacy Policy</a>
            <a href="#" className="hover:text-white">Terms of Service</a>
            <a href="#" className="hover:text-white">Fair Usage Policy</a>
            <a href="#" className="hover:text-white">Refund Policy</a>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;


import React from 'react';

const Navbar: React.FC = () => {
  return (
    <nav className="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 py-4">
      <div className="container mx-auto px-6 flex justify-between items-center">
        <div className="flex items-center gap-2">
          <div className="w-10 h-10 bg-dmca-dark rounded-lg flex items-center justify-center">
             <i className="fa-solid fa-cloud text-dmca-bright text-xl"></i>
          </div>
          <span className="text-2xl font-black text-dmca-dark tracking-tight">DMCA<span className="text-dmca-bright">Qloud</span></span>
        </div>

        <div className="hidden lg:flex items-center space-x-8">
          <a href="#" className="font-semibold text-gray-700 hover:text-dmca-bright transition-colors">HOME</a>
          <a href="#" className="font-semibold text-gray-700 hover:text-dmca-bright transition-colors">SERVERS</a>
          <a href="#" className="font-semibold text-gray-700 hover:text-dmca-bright transition-colors">STREAMING</a>
          <a href="#" className="font-semibold text-gray-700 hover:text-dmca-bright transition-colors">VIDEO SERVERS</a>
          <a href="#" className="font-semibold text-gray-700 hover:text-dmca-bright transition-colors">USE CASES</a>
        </div>

        <div className="flex items-center gap-4">
          <button className="text-sm font-bold text-gray-700 hover:text-dmca-bright transition-colors">Login</button>
          <button className="bg-dmca-dark text-white px-6 py-2.5 rounded-full text-sm font-bold hover:bg-opacity-90 transition-all shadow-md shadow-dmca-dark/20">
            Client Area
          </button>
        </div>
      </div>
    </nav>
  );
};

export default Navbar;

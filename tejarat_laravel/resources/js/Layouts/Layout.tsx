import { Link } from '@inertiajs/react';
import { motion } from 'framer-motion';
import React from 'react';

interface Props {
    children: React.ReactNode;
}

export default function Layout({ children }: Props) {
    return (
        <div className="min-h-screen bg-slate-50 text-slate-900 font-sans">
            {/* Header / Navbar */}
            <nav className="fixed top-0 left-0 right-0 z-50 bg-white/70 backdrop-blur-md border-b border-white/20 shadow-sm">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="flex justify-between h-20 items-center">
                        <div className="flex-shrink-0 flex items-center">
                            <Link href="/" className="text-2xl font-bold tracking-tighter text-blue-600">
                                TEJARAT<span className="text-slate-900">INTL</span>
                            </Link>
                        </div>
                        <div className="hidden md:flex space-x-8">
                            <Link href="/" className="text-sm font-medium hover:text-blue-600 transition-colors">Home</Link>
                            <Link href="/exports" className="text-sm font-medium hover:text-blue-600 transition-colors">Exports</Link>
                            <Link href="/defense" className="text-sm font-medium hover:text-blue-600 transition-colors">Defense</Link>
                            <Link href="/contact" className="text-sm font-medium hover:text-blue-600 transition-colors">Contact</Link>
                        </div>
                        <div className="md:hidden">
                            {/* Mobile menu button could go here */}
                        </div>
                    </div>
                </div>
            </nav>

            {/* Main Content */}
            <main className="pt-20">
                <motion.div
                    initial={{ opacity: 0, y: 20 }}
                    animate={{ opacity: 1, y: 0 }}
                    transition={{ duration: 0.5 }}
                >
                    {children}
                </motion.div>
            </main>

            {/* Footer */}
            <footer className="bg-slate-900 text-white py-12 mt-20">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <div className="mb-8">
                        <h2 className="text-2xl font-bold mb-4">Tejarat International</h2>
                        <p className="text-slate-400 max-w-md mx-auto">
                            A trusted supplier of military products and global exporter of high-quality agricultural goods.
                        </p>
                    </div>
                    <div className="border-t border-slate-800 pt-8 text-sm text-slate-500">
                        &copy; {new Date().getFullYear()} Tejarat International. All rights reserved.
                    </div>
                </div>
            </footer>
        </div>
    );
}

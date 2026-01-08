import Layout from '@/Layouts/Layout';
import { Head, Link } from '@inertiajs/react';
import { motion } from 'framer-motion';

export default function Home() {
    return (
        <Layout>
            <Head title="Home" />

            {/* Hero Section */}
            <section className="relative h-[80vh] flex items-center justify-center overflow-hidden">
                <div className="absolute inset-0 bg-[url('/img/export_img.jpg')] bg-cover bg-center opacity-20 transform scale-105"></div>
                <div className="relative z-10 text-center px-4">
                    <motion.h1 
                        initial={{ opacity: 0, scale: 0.9 }}
                        animate={{ opacity: 1, scale: 1 }}
                        className="text-5xl md:text-7xl font-extrabold tracking-tight mb-6"
                    >
                        Bridging Boundaries, <br/><span className="text-blue-600">Ensuring Quality.</span>
                    </motion.h1>
                    <p className="text-xl text-slate-600 max-w-2xl mx-auto mb-10">
                        Tejarat International specializes in top-tier military supplies and the global export of premium agricultural products.
                    </p>
                </div>
            </section>

            {/* Core Sections */}
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
                <div className="grid grid-cols-1 md:grid-cols-2 gap-12">
                    {/* Exports Card */}
                    <motion.div 
                        whileHover={{ y: -10 }}
                        className="group relative h-[500px] rounded-3xl overflow-hidden shadow-2xl"
                    >
                        <img 
                            src="/img/export_img.jpg" 
                            className="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" 
                            alt="Agricultural Exports" 
                        />
                        <div className="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-10 text-white">
                            <h3 className="text-3xl font-bold mb-4">Agricultural Exports</h3>
                            <p className="text-slate-200 mb-8 max-w-sm">
                                Exporting the finest agricultural products from Bangladesh to the global market.
                            </p>
                            <Link 
                                href="/exports" 
                                className="inline-block px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-full text-center transition-colors self-start"
                            >
                                Explore Exports
                            </Link>
                        </div>
                    </motion.div>

                    {/* Defense Card */}
                    <motion.div 
                        whileHover={{ y: -10 }}
                        className="group relative h-[500px] rounded-3xl overflow-hidden shadow-2xl"
                    >
                        <img 
                            src="/img/military_image.webp" 
                            className="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" 
                            alt="Defense Supplies" 
                        />
                        <div className="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent flex flex-col justify-end p-10 text-white">
                            <h3 className="text-3xl font-bold mb-4">Defense Supplies</h3>
                            <p className="text-slate-200 mb-8 max-w-sm">
                                Over 15 years of excellence in providing high-quality strategic defense and security materials.
                            </p>
                            <Link 
                                href="/defense" 
                                className="inline-block px-8 py-3 bg-slate-800 hover:bg-slate-700 text-white font-semibold rounded-full text-center transition-colors self-start border border-slate-700"
                            >
                                Explore Defense
                            </Link>
                        </div>
                    </motion.div>
                </div>
            </div>

            {/* About Us Brief */}
            <section className="bg-white py-24">
                <div className="max-w-4xl mx-auto px-4 text-center">
                    <motion.div
                        initial={{ opacity: 0 }}
                        whileInView={{ opacity: 1 }}
                        viewport={{ once: true }}
                    >
                        <h2 className="text-3xl font-bold mb-8">About Tejarat International</h2>
                        <div className="text-lg text-slate-600 leading-relaxed space-y-6">
                            <p>
                                <strong>Tejarat International (TI)</strong> has been a trusted supplier of military products for over 15 years. 
                                We started with all military supplies, including food rations, but later realized the potential for food exports.
                            </p>
                            <p>
                                Recognizing this, we began exporting food products beyond Bangladesh, including potatoes, betel nuts, 
                                and various premium vegetables. We prioritize top-tier storage, fast delivery, and halal assurance.
                            </p>
                        </div>
                    </motion.div>
                </div>
            </section>
        </Layout>
    );
}

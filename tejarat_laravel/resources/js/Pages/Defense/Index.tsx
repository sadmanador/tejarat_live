import Layout from '@/Layouts/Layout';
import { Head } from '@inertiajs/react';
import { motion } from 'framer-motion';

const Categories = [
    { name: "Strategic Materials", desc: "Providing essential materials for defense operations.", icon: "⚔️" },
    { name: "Logistics & Rations", desc: "Reliable supply chain for military sustenance.", icon: "📦" },
    { name: "Specialized Equipment", desc: "State-of-the-art gear for security forces.", icon: "🛡️" }
];

export default function Index() {
    return (
        <Layout>
            <Head title="Defense Supplies" />

            {/* Hero */}
            <div className="relative h-[50vh] flex items-center bg-slate-900 overflow-hidden">
                <div className="absolute inset-0 bg-[url('/img/military_image.webp')] bg-cover bg-center opacity-30"></div>
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full text-center">
                    <motion.h1 
                        initial={{ opacity: 0, scale: 0.9 }}
                        animate={{ opacity: 1, scale: 1 }}
                        className="text-4xl md:text-6xl font-extrabold text-white tracking-tight"
                    >
                        Defense & Strategic <span className="text-blue-500">Supplies</span>
                    </motion.h1>
                    <p className="mt-4 text-xl text-slate-300">Trusted partners in national security for over 15 years.</p>
                </div>
            </div>

            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
                <div className="grid grid-cols-1 md:grid-cols-3 gap-12">
                    {Categories.map((cat, idx) => (
                        <motion.div 
                            key={idx}
                            initial={{ opacity: 0, y: 20 }}
                            whileInView={{ opacity: 1, y: 0 }}
                            transition={{ delay: idx * 0.1 }}
                            viewport={{ once: true }}
                            className="bg-white p-10 rounded-3xl shadow-xl border border-slate-100 relative overflow-hidden group"
                        >
                            <div className="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-bl-full opacity-50 group-hover:scale-110 transition-transform"></div>
                            <div className="text-5xl mb-6 relative">{cat.icon}</div>
                            <h3 className="text-2xl font-bold mb-4 relative">{cat.name}</h3>
                            <p className="text-slate-600 relative">{cat.desc}</p>
                        </motion.div>
                    ))}
                </div>

                {/* Info Block */}
                <div className="mt-32 bg-slate-900 rounded-[3rem] p-12 md:p-20 text-white flex flex-col md:flex-row items-center gap-12 overflow-hidden relative">
                    <div className="absolute top-0 left-0 w-64 h-64 bg-blue-600/10 blur-3xl rounded-full"></div>
                    <div className="flex-1 space-y-8 relative z-10">
                        <h2 className="text-4xl font-bold italic">Uncompromising Quality in Defense Supplies</h2>
                        <p className="text-lg text-slate-400">
                            Our commitment to excellence ensures that every product we supply meets the rigorous standards required for strategic applications. We handle everything from food rations to technical equipment with absolute precision.
                        </p>
                    </div>
                    <div className="flex-1 relative z-10">
                        <img src="/img/military_image.webp" className="rounded-3xl shadow-2xl border border-white/10" alt="Defense" />
                    </div>
                </div>
            </div>
        </Layout>
    );
}

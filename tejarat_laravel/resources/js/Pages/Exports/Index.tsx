import Layout from '@/Layouts/Layout';
import { Head } from '@inertiajs/react';
import { motion } from 'framer-motion';

const SliderContent = [
    {
        img: "/img/exports/agri-veges.jpg",
        title: "Cultivating Excellence",
        sub: "Harvesting the Finest Agricultural Goods for a Sustainable Tomorrow."
    },
    {
        img: "/img/exports/seafood-market.jpg",
        title: "Ocean's Bounty Unleashed",
        sub: "Unrivaled Quality in Every Seafood Experience."
    }
];

const Products = [
    { name: "Mango", tag: "Agricultural Goods", img: "/img/exports/items/mango.png" },
    { name: "Jackfruit", tag: "Agricultural Goods", img: "/img/exports/items/jackfruit.jpg" },
    { name: "Potato", tag: "Agricultural Goods", img: "/img/exports/items/potato.jpg" },
    { name: "Beef", tag: "Animal Products", img: "/img/exports/items/beef.jpg" },
    { name: "Crab", tag: "Sea Food", img: "/img/exports/items/crab.jpg" },
    { name: "Shrimp", tag: "Sea Food", img: "/img/exports/items/shrimp.jpg" },
];

export default function Index() {
    return (
        <Layout>
            <Head title="Exports" />

            {/* Slider / Hero Area */}
            <div className="relative h-[60vh] overflow-hidden bg-slate-900">
                <div className="absolute inset-0 grayscale opacity-40">
                    <img src="/img/exports/agri-veges.jpg" className="w-full h-full object-cover" alt="Hero" />
                </div>
                <div className="relative z-10 h-full flex items-center justify-center text-center px-4">
                    <motion.div
                        initial={{ opacity: 0, y: 30 }}
                        animate={{ opacity: 1, y: 0 }}
                    >
                        <h1 className="text-4xl md:text-6xl font-bold text-white mb-4">Exporting Excellence</h1>
                        <p className="text-xl text-slate-300 max-w-2xl mx-auto">Cultivating and delivering the finest products worldwide.</p>
                    </motion.div>
                </div>
            </div>

            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
                {/* PDF Profile Section */}
                <div className="mb-20 rounded-3xl overflow-hidden shadow-2xl bg-white p-4 border border-slate-100">
                    <h2 className="text-2xl font-bold mb-6 text-center">Tejarat Company Profile</h2>
                    <div className="aspect-[16/10] w-full">
                        <iframe 
                            src="/img/Tejaratprofile.pdf#toolbar=0&navpanes=0&scrollbar=0" 
                            className="w-full h-full rounded-xl"
                            title="Company Profile"
                        />
                    </div>
                </div>

                {/* Products Section */}
                <h2 className="text-3xl font-bold mb-12 text-center text-slate-800 underline decoration-blue-500 decoration-4 underline-offset-8">Our Premium Products</h2>
                <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    {Products.map((product, idx) => (
                        <motion.div 
                            key={idx}
                            whileHover={{ scale: 1.02 }}
                            className="bg-white rounded-2xl overflow-hidden shadow-lg border border-slate-100 group"
                        >
                            <div className="h-64 overflow-hidden">
                                <img src={product.img} className="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt={product.name} />
                            </div>
                            <div className="p-6">
                                <span className="inline-block px-3 py-1 bg-blue-50 text-blue-600 text-xs font-semibold rounded-full mb-3 italic">
                                    {product.tag}
                                </span>
                                <h3 className="text-xl font-bold text-slate-800">{product.name}</h3>
                            </div>
                        </motion.div>
                    ))}
                </div>
            </div>
        </Layout>
    );
}

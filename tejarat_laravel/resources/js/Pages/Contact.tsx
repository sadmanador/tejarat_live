import Layout from '@/Layouts/Layout';
import { Head } from '@inertiajs/react';
import { motion } from 'framer-motion';

export default function Contact() {
    return (
        <Layout>
            <Head title="Contact Us" />

            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
                <div className="text-center mb-16">
                    <motion.h1 
                        initial={{ opacity: 0 }}
                        animate={{ opacity: 1 }}
                        className="text-4xl font-extrabold text-slate-900 mb-4"
                    >
                        Get In Touch
                    </motion.h1>
                    <p className="text-lg text-slate-600">Have questions? We'd love to hear from you.</p>
                </div>

                <div className="grid grid-cols-1 lg:grid-cols-2 gap-16">
                    {/* Contact Info */}
                    <div className="space-y-12">
                        <div className="flex items-start space-x-6">
                            <div className="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 shrink-0">
                                📍
                            </div>
                            <div>
                                <h3 className="text-xl font-bold mb-2">Head Office</h3>
                                <p className="text-slate-600 leading-relaxed">
                                    391 Ground Floor, Road#29, <br/>
                                    New DOHS, Mohakhali, Dhaka-1206.
                                </p>
                            </div>
                        </div>

                        <div className="flex items-start space-x-6">
                            <div className="w-14 h-14 bg-green-100 rounded-2xl flex items-center justify-center text-green-600 shrink-0">
                                📞
                            </div>
                            <div>
                                <h3 className="text-xl font-bold mb-2">Phone</h3>
                                <p className="text-slate-600">+88 096 1167 7341</p>
                            </div>
                        </div>

                        <div className="flex items-start space-x-6">
                            <div className="w-14 h-14 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 shrink-0">
                                ✉️
                            </div>
                            <div>
                                <h3 className="text-xl font-bold mb-2">Email</h3>
                                <p className="text-slate-600">info@tejaratintl.com</p>
                            </div>
                        </div>
                    </div>

                    {/* Contact Form */}
                    <motion.div 
                        initial={{ x: 20, opacity: 0 }}
                        animate={{ x: 0, opacity: 1 }}
                        className="bg-white p-10 rounded-[2rem] shadow-2xl border border-slate-100"
                    >
                        <form className="space-y-6">
                            <div>
                                <label className="block text-sm font-semibold text-slate-700 mb-2">Full Name</label>
                                <input type="text" className="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all" placeholder="John Doe" />
                            </div>
                            <div>
                                <label className="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                                <input type="email" className="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all" placeholder="john@example.com" />
                            </div>
                            <div>
                                <label className="block text-sm font-semibold text-slate-700 mb-2">Message</label>
                                <textarea className="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all h-32 resize-none" placeholder="Your message here..."></textarea>
                            </div>
                            <button className="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl transition-all shadow-lg hover:shadow-blue-500/30">
                                Send Message
                            </button>
                        </form>
                    </motion.div>
                </div>
            </div>
        </Layout>
    );
}

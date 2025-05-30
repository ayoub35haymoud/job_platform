'use client'

import Image from 'next/image'
import { useEffect } from 'react'

export default function HeroSection() {
    // Optional: Remove scroll on load to focus on hero
    useEffect(() => { window.scrollTo(0, 0) }, [])

    return (
        <section className="relative bg-[#f7f9fb] min-h-[600px] flex items-center overflow-hidden">
            {/* === BACKGROUND ANIMATED CIRCLES === */}
            <div className="absolute right-0 top-0 w-[700px] h-[700px] pointer-events-none z-0">
                {/* Large animated gradient circle */}
                <div className="absolute right-10 top-16 w-[500px] h-[500px] rounded-full bg-gradient-to-tr from-blue-200 via-blue-300 to-blue-100 opacity-80 animate-gradientMove"></div>
                {/* Small rotating circles */}
                <div className="absolute right-[140px] top-[180px] w-[320px] h-[320px]">
                    <div className="relative w-full h-full animate-spin-slow">
                        {/* Place small circles in orbit */}
                        <span className="absolute w-5 h-5 rounded-full bg-blue-400 opacity-80 left-1/2 top-0 -translate-x-1/2"></span>
                        <span className="absolute w-3 h-3 rounded-full bg-blue-200 left-0 top-1/2 -translate-y-1/2"></span>
                        <span className="absolute w-4 h-4 rounded-full bg-blue-500 right-0 top-2/3 -translate-y-1/2"></span>
                        <span className="absolute w-2.5 h-2.5 rounded-full bg-blue-300 left-2/3 bottom-0 -translate-x-1/2"></span>
                    </div>
                </div>
            </div>



            {/* MAIN HERO CONTENT */}
            <div className="max-w-7xl mx-auto w-full flex flex-col lg:flex-row items-center px-4 lg:px-8 z-10 py-12 lg:py-0">
                {/* Left Side */}
                <div className="flex-1 w-full pt-8 lg:pt-0">
                    <div className="text-gray-600 text-base font-semibold mb-2">
                        We Have <span className="text-blue-700 font-bold">208,000+</span> Live Jobs
                    </div>
                    <h1 className="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-4">
                        Find the <span className="text-blue-700">job</span> that fits<br/>your life
                    </h1>
                    <p className="text-gray-500 mb-7">
                        Type your keyword, then click search to find your perfect job.
                    </p>
                    {/* Search Bar */}
                    <form
                        className="flex flex-col sm:flex-row items-stretch gap-2 bg-white shadow-lg rounded-xl p-4 w-full max-w-2xl mb-4"
                        onSubmit={e => e.preventDefault()}
                    >
                        <input
                            className="flex-1 border border-gray-200 rounded px-3 py-2 focus:outline-blue-400"
                            placeholder="Job Title"
                        />
                        <select className="flex-1 border border-gray-200 rounded px-3 py-2 focus:outline-blue-400">
                            <option>All Category</option>
                            <option>IT</option>
                            <option>Finance</option>
                            <option>Healthcare</option>
                        </select>
                        <input
                            className="flex-1 border border-gray-200 rounded px-3 py-2 focus:outline-blue-400"
                            placeholder="Search..."
                        />
                        <button
                            type="submit"
                            className="px-6 py-2 rounded bg-blue-700 text-white font-bold hover:bg-blue-800 transition"
                        >
                            Find Job
                        </button>
                    </form>
                    <div className="text-gray-500 text-sm">
                        <span className="font-semibold text-gray-700">Popular Searches: </span>
                        <span>Developer</span>, <span>Designer</span>, <span>Architect</span>, <span>Engineer</span> ...
                    </div>
                </div>

                {/* Right Side (with badges) */}
                <div className="flex-1 relative w-full flex justify-center items-center mt-10 lg:mt-0">
                    <div className="relative z-10">
                        <Image
                            src="/hero.png" // Replace with your image
                            alt="Professional"
                            width={340}
                            height={420}
                            className="rounded-xl object-cover"
                            priority
                        />
                        {/* 12K+ Companies badge */}
                        <div className="absolute -top-8 -left-14 bg-white shadow-xl rounded-xl px-6 py-3 flex items-center gap-2">
                            <Image src="/company-icon.png" alt="Companies" width={32} height={32}/>
                            <div>
                                <div className="text-blue-700 font-extrabold text-lg leading-tight">12K+</div>
                                <div className="text-xs text-gray-500">Companies Jobs</div>
                            </div>
                        </div>
                        {/* 98+ Countries badge */}
                        <div className="absolute top-0 right-0 bg-white shadow-xl rounded-xl px-4 py-2 flex items-center gap-2">
                            <Image src="/world-icon.png" alt="World" width={28} height={28}/>
                            <div>
                                <div className="text-blue-700 font-extrabold text-base">98 +</div>
                                <div className="text-xs text-gray-500">Job For Countries</div>
                            </div>
                        </div>
                        {/* 3K+ Jobs Done badge */}
                        <div className="absolute -bottom-8 left-0 bg-white shadow-xl rounded-xl px-4 py-2 flex items-center gap-2">
                            <div className="flex -space-x-2">
                                <Image src="/avatars/1.jpg" alt="" width={28} height={28} className="rounded-full border-2 border-white" />
                                <Image src="/avatars/2.jpg" alt="" width={28} height={28} className="rounded-full border-2 border-white" />
                                <Image src="/avatars/3.jpg" alt="" width={28} height={28} className="rounded-full border-2 border-white" />
                                <Image src="/avatars/4.jpg" alt="" width={28} height={28} className="rounded-full border-2 border-white" />
                            </div>
                            <div>
                                <div className="text-green-500 font-extrabold text-lg leading-tight">3K+</div>
                                <div className="text-xs text-gray-500">Jobs Done</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {/* Custom Animations */}
            <style jsx global>{`
                @keyframes gradientMove {
                    0%, 100% { filter: blur(0px) brightness(1); }
                    50% { filter: blur(8px) brightness(1.15); }
                }
                .animate-gradientMove {
                    animation: gradientMove 6s ease-in-out infinite alternate;
                }
                @keyframes spin-slow {
                    0% { transform: rotate(0deg);}
                    100% { transform: rotate(360deg);}
                }
                .animate-spin-slow {
                    animation: spin-slow 18s linear infinite;
                }
            `}</style>
        </section>
    )
}
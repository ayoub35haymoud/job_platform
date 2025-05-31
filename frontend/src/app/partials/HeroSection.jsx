'use client'

import Image from 'next/image'
import { useEffect, useRef, useState } from 'react'
import { FaSearch, FaMapMarkerAlt, FaUserPlus, FaRegFilePdf } from 'react-icons/fa'

// Custom Hook for slow count up
function useCountUp(target, duration = 2000) {
    const [count, setCount] = useState(0)
    const frame = useRef()
    useEffect(() => {
        let startTimestamp = null
        function step(timestamp) {
            if (!startTimestamp) startTimestamp = timestamp
            const progress = Math.min((timestamp - startTimestamp) / duration, 1)
            setCount(Math.floor(progress * target))
            if (progress < 1) frame.current = requestAnimationFrame(step)
            else setCount(target)
        }
        frame.current = requestAnimationFrame(step)
        return () => cancelAnimationFrame(frame.current)
    }, [target, duration])
    return count
}

export default function HeroSection() {
    useEffect(() => { window.scrollTo(0, 0) }, [])

    const companies = useCountUp(12, 3000)
    const countries = useCountUp(98, 3000)

    return (
        <section className="relative bg-[#f7f9fb] min-h-[90vh] flex items-center overflow-hidden">
            <div className="max-w-screen-xl mx-auto w-full flex flex-col lg:flex-row items-center px-4 md:px-8 z-10 py-12 lg:py-0">
                {/* Left Side */}
                <div className="flex-1 w-full pt-8 lg:pt-0 max-w-xl">
                    <div className="text-gray-600 text-base font-semibold mb-2">
                        We Have <span className="text-blue-700 font-bold">208,000+</span> Live Jobs
                    </div>
                    <h1 className="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight tracking-tight mb-4">
                        Find the <span className="text-blue-700">job</span> that fits<br />your life
                    </h1>
                    <p className="text-gray-500 mb-7">
                        Type your keyword, then click search to find your perfect job.
                    </p>
                    <form
                        className="w-full max-w-2xl mx-auto bg-white shadow-md rounded-xl p-2 sm:p-4 flex flex-col sm:flex-row gap-3 items-center mb-4"
                        onSubmit={e => e.preventDefault()}
                    >
                        {/* Job Title */}
                        <div className="flex items-center flex-1 bg-gray-50 border border-gray-300 rounded-lg px-3 py-2 focus-within:border-blue-500 transition">
                            <FaSearch className="text-gray-400 mr-2 w-4 h-4" />
                            <input
                                className="w-full bg-transparent outline-none border-none text-gray-700 text-sm"
                                placeholder="Job title, skill, or company"
                                type="text"
                            />
                        </div>
                        {/* Location */}
                        <div className="flex items-center flex-1 bg-gray-50 border border-gray-300 rounded-lg px-3 py-2 focus-within:border-blue-500 transition">
                            <FaMapMarkerAlt className="text-gray-400 mr-2 w-4 h-4" />
                            <input
                                className="w-full bg-transparent outline-none border-none text-gray-700 text-sm"
                                placeholder="Location (e.g. Montreal)"
                                type="text"
                            />
                        </div>
                        {/* Button */}
                        <button
                            type="submit"
                            className="flex items-center px-6 py-4 bg-blue-700 text-white font-semibold rounded-lg hover:bg-blue-800 transition text-sm shadow-sm"
                        >
                            Find Jobs
                        </button>
                    </form>
                    <div className="text-gray-500 text-sm">
                        <span className="font-semibold text-gray-700">Popular Searches: </span>
                        <span>Nurse</span>, <span>Registered Nurse</span>, <span>Pharmacist</span>, <span>Personal Support Worker</span> ...
                    </div>
                </div>

                {/* Right Side (Image with all background/animated elements as siblings!) */}
                <div className="flex-1 ml-32 relative w-full flex justify-center lg:justify-end items-center mt-10 lg:mt-0 z-20 max-w-md lg:max-w-lg">
                    {/* === Animated background and floating elements START === */}
                    <div className="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[370px] h-[370px] md:w-[430px] md:h-[430px] lg:w-[500px] lg:h-[500px] pointer-events-none z-0">
                        {/* Large animated gradient circle */}
                        <div className="absolute inset-0 rounded-full bg-gradient-to-tr from-blue-200 via-blue-300 to-blue-100 opacity-80 animate-gradientMove"></div>
                        {/* Small rotating circles */}
                        <div className="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] h-[300px]">
                            <div className="relative w-full h-full animate-spin-slow">
                                <span className="absolute w-5 h-5 rounded-full bg-blue-400 opacity-80 left-1/2 top- -translate-x-1/2"></span>
                                <span className="absolute w-3 h-3 rounded-full bg-blue-200 left-0 top-1/2 -translate-y-1/2"></span>
                                <span className="absolute w-4 h-4 rounded-full bg-blue-500 right-400 top-2/3 -translate-y-1/2"></span>
                                <span className="absolute w-2.5 h-2.5 rounded-full bg-blue-600 left-2/3 bottom-0 -translate-x-1/2"></span>
                                <span className="absolute w-2.5 h-2.5 rounded-full bg-blue-700 left-2/3 bottom-48 -translate-x-1/2"></span>
                                <span className="absolute w-2.5 h-2.5 rounded-full bg-blue-500 left-2/3 bottom-0 -translate-x-1/2"></span>
                            </div>
                        </div>
                        {/* Floating Upload CV box */}
                        <div className="absolute left-3 top-16 md:left-1 md:top-48 animate-floatY">
                            <div className="flex items-center gap-2 px-4 py-2 bg-white border border-blue-100 shadow-md rounded-lg">
                               <Image src="/cv-icon.png" alt="cv" width={20} height={20}/>
                                <span className="font-semibold text-xs text-blue-900">Upload CV</span>
                            </div>
                        </div>
                        {/* Floating PDF icon */}
                        <div className="absolute right-2 bottom-14 md:right-6 md:bottom-20 animate-floatY2">
                            <div className="flex items-center justify-center w-12 h-12 bg-white rounded-xl shadow-md border border-gray-100">
                                <FaRegFilePdf className="text-blue-500 w-7 h-7" />
                            </div>
                        </div>
                    </div>
                    {/* === Animated background and floating elements END === */}

                    {/* Foreground: The image and badges */}
                    <div className="relative z-10 right-20">
                        <Image
                            src="/hero.png" // Replace with your image
                            alt="Professional"
                            width={340}
                            height={420}
                            className="rounded-xl object-cover"
                            priority
                        />
                        {/* 12K+ Companies badge */}
                        <div className="absolute -top-8 -left-14 bg-white shadow-xl rounded-xl px-6 py-3 flex items-center gap-2 select-none">
                            <Image src="/hero-icon.png" alt="Companies" width={32} height={32}/>
                            <div>
                                <div className="text-red-300 font-extrabold text-2xl leading-tight">
                                    {companies}K+
                                </div>
                                <div className="text-xs text-gray-500">Companies Jobs</div>
                            </div>
                        </div>
                        {/* 98+ Countries badge */}
                        <div className="absolute top-0 -right-32 bg-white shadow-xl rounded-xl px-4 py-2 flex items-center gap-2 select-none">
                            <Image src="/icon-2.png" alt="World" width={28} height={28}/>
                            <div>
                                <div className="text-blue-400 font-extrabold text-2xl">
                                    {countries} +
                                </div>
                                <div className="text-xs text-gray-500">Job For Countries</div>
                            </div>
                        </div>
                        {/* 3K+ Jobs Done badge */}
                        <div className="absolute -bottom-8  -right-0 bg-white shadow-xl rounded-xl px-9  py-2 flex items-center gap-2 select-none">
                            <div className="flex -space-x-2">
                                <Image src="/u-1.jpg" alt="" width={28} height={28} className="rounded-full border-2 border-white" />
                                <Image src="/u-2.jpg" alt="" width={28} height={28} className="rounded-full border-2 border-white" />
                                <Image src="/u-3.jpg" alt="" width={28} height={28} className="rounded-full border-2 border-white" />
                                <Image src="/u-4.jpg" alt="" width={28} height={28} className="rounded-full border-2 border-white" />
                                <Image src="/u-5.jpg" alt="" width={28} height={28} className="rounded-full border-2 border-white" />
                                <Image src="/u-6.jpg" alt="" width={28} height={28} className="rounded-full border-2 border-white" />
                            </div>
                            <div>
                                <div className="text-green-500 font-extrabold text-xl leading-tight">3K+</div>
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
                @keyframes floatY {
                    0%, 100% { transform: translateY(0); }
                    50% { transform: translateY(-18px); }
                }
                .animate-floatY {
                    animation: floatY 3s ease-in-out infinite;
                }
                @keyframes floatY2 {
                    0%, 100% { transform: translateY(0); }
                    50% { transform: translateY(14px); }
                }
                .animate-floatY2 {
                    animation: floatY2 4.2s ease-in-out infinite;
                }
            `}</style>
        </section>
    )
}

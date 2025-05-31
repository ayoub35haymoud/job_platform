'use client'

import { useEffect, useState } from 'react'
import Link from 'next/link'
import Head from 'next/head'
import { FaBriefcase } from 'react-icons/fa'
import { usePathname } from 'next/navigation'
import { useAuth } from '@/hooks/auth'
import ApplicationLogo from '@/components/ApplicationLogo'
import Dropdown from '@/components/Dropdown'
import NavLink from '@/components/NavLink'
import ResponsiveNavLink, { ResponsiveNavButton } from '@/components/ResponsiveNavLink'
import { DropdownButton } from '@/components/DropdownLink'

export default function Navbar() {
    const [menuOpen, setMenuOpen] = useState(false)
    const [scrolled, setScrolled] = useState(false)
    const pathname = usePathname()
    const { user, logout } = useAuth({ middleware: 'guest' })
    const isLoading = user === undefined

    useEffect(() => {
        const handleScroll = () => {
            setScrolled(window.scrollY > 50)
        }

        window.addEventListener('scroll', handleScroll)
        return () => window.removeEventListener('scroll', handleScroll)
    }, [])

    const navItems = [
        { label: 'Home', href: '/' },
        { label: 'Jobs', href: '/jobs' },
        { label: 'Employers', href: '/employers' },
        { label: 'About', href: '/about' },
        { label: 'Contact', href: '/contact' },
    ]

    return (
        <header
            className={`sticky top-0 z-50 transition-all duration-300 ${
                scrolled
                    ? 'bg-white shadow-[0_4px_10px_0_rgba(59,130,246,0.3)]'
                    : ''
            }`}
            style={{
                backgroundColor: scrolled ? '#ffffff' : '#f7f9fb',
            }}
        >
            <nav className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
                {/* Logo */}
                <Link href="/" className="text-2xl font-bold text-blue-600">
                    <ApplicationLogo className="h-8 w-auto" />
                </Link>

                {/* Desktop Menu */}
                <ul className="hidden md:flex gap-6 items-center text-gray-700 font-medium">
                    {navItems.map((item) => (
                        <li key={item.href}>
                            <Link
                                href={item.href}
                                className={`hover:text-blue-600 ${
                                    pathname === item.href ? 'text-blue-600 font-semibold' : ''
                                }`}
                            >
                                {item.label}
                            </Link>
                        </li>
                    ))}
                    <li>
                        <Link
                            href="/jobs/post"
                            className="flex items-center gap-2 px-4 py-2 rounded-md bg-blue-600 text-white font-medium hover:bg-blue-700 transition"
                        >
                            <FaBriefcase className="w-5 h-5" />
                            Post a job
                        </Link>
                        </li>
                    {user && (
                        <li>
                            <Link href="/dashboard">Dashboard</Link>
                        </li>
                    )}
                </ul>

                {/* Auth Buttons (Desktop) */}
                <div className="hidden md:flex items-center gap-4">
                    {user ? (
                        <Dropdown
                            align="right"
                            width="48"
                            trigger={
                                <button className="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700">
                                    <span>{user.name}</span>
                                    <svg className="ml-1 h-4 w-4 fill-current" viewBox="0 0 20 20">
                                        <path
                                            fillRule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clipRule="evenodd"
                                        />
                                    </svg>
                                </button>
                            }
                        >
                            <DropdownButton onClick={logout}>Logout</DropdownButton>
                        </Dropdown>
                    ) : (
                        // !isLoading && (
                            <>
                                <Link href="/login" className="text-sm text-gray-700 hover:text-blue-600">
                                    Login
                                </Link>
                                <Link
                                    href="/register"
                                    className="bg-blue-600 text-white px-4 py-2 rounded text-sm hover:bg-blue-700"
                                >
                                    Register
                                </Link>
                            </>
                        // )
                    )}
                </div>

                {/* Mobile Menu Button */}
                <button
                    onClick={() => setMenuOpen(!menuOpen)}
                    className="md:hidden text-gray-700 text-2xl"
                    aria-label="Toggle menu"
                >
                    ☰
                </button>
            </nav>

            {/* Mobile Dropdown Menu */}
            {menuOpen && (
                <div className="md:hidden bg-white px-4 pb-4 space-y-2 border-t">
                    {navItems.map((item) => (
                        <Link
                            key={item.href}
                            href={item.href}
                            className="block text-gray-700 font-medium hover:text-blue-600"
                            onClick={() => setMenuOpen(false)}
                        >
                            {item.label}
                        </Link>
                    ))}
                    <hr />
                    {user ? (
                        <ResponsiveNavButton onClick={() => { setMenuOpen(false); logout() }}>
                            Logout
                        </ResponsiveNavButton>
                    ) : (
                        <>
                            <Link
                                href="/login"
                                onClick={() => setMenuOpen(false)}
                                className="block text-sm text-gray-600"
                            >
                                Login
                            </Link>
                            <Link
                                href="/register"
                                onClick={() => setMenuOpen(false)}
                                className="block text-sm text-blue-600 font-semibold"
                            >
                                Register
                            </Link>
                        </>
                    )}
                </div>
            )}
        </header>
    )
}
